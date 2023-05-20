<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'name',
            'slug',
        ];
    protected $table = 'roles';
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    public function permission(){
        return $this->belongsTo(Permission::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public const Is_User = 1;
    public const Is_Admin = 2;
    public const Is_Editor = 3;
    public const Is_Support = 4;
}
