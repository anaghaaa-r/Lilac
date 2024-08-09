<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    /*
    define hasmany relationship to users
    */
    public function users()
    {
        return $this->hasMany(User::class, 'fk_department');
    }
}
