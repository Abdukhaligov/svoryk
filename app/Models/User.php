<?php

namespace App\Models;

use DateTime;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;

/**
 * @property int id
 * @property string name
 * @property string email
 * @property DateTime created_at
 * @property DateTime updated_at
 * @property Collection roles
 * @method static create(array $array)
 */
class User extends Authenticatable {
  use HasFactory, Notifiable;

  const ROLES = ["Admin" => 1,];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name',
                         'email',
                         'password',];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = ['password',
                       'remember_token',];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = ['email_verified_at' => 'datetime',];

  public function roles() {
    return $this->belongsToMany(Role::class, "user_role");
  }

  public function isAdmin() {
    return in_array(self::ROLES["Admin"], (array)$this->roles->pluck('id')
                                                             ->toArray());
  }
}
