<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProductCategory extends Resource {
  public static $model = \App\Models\ProductCategory::class;
  public static $title = 'name';
  public static $search = ['id', 'name'];

  /**
   * Get the fields displayed by the resource.
   *
   * @param Request $request
   * @return array
   */
  public function fields(Request $request) {
    return [ID::make(__('ID'), 'id')->sortable(),
            Text::make('Name'),
            BelongsTo::make('Parent', 'parent', ProductCategory::class),
            HasMany::make('Children', 'children', ProductCategory::class),
    ];
  }
}
