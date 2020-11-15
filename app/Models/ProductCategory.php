<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class ProductCategory extends Model {
  use HasFactory;

  protected $fillable = ['name','parent_id'];

  public function parent() {
    return $this->belongsTo(self::class, 'parent_id');
  }

  public function children() {
    return $this->hasMany(self::class, "parent_id");
  }
}
