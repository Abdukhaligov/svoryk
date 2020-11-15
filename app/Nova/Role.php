<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Role extends Resource {
  public static $model = \App\Models\Role::class;
  public static $title = 'name';
  public static $search = ['id', 'name'];

  public function fields(Request $request) {
    return [ID::make(__('ID'), 'id')->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255')
                ->displayUsing(function($r) {
                  return strtoupper($r);
                }),

            BelongsToMany::make("Users")];
  }

}
