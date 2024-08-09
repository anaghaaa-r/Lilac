<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'fk_department',
        'fk_designation',
        'phone_number'
    ];


    /*
    define belongs to relationship to department
    */
    public function department()
    {
        return $this->belongsTo(Department::class, 'fk_department');
    }

    /*
    define belongs to relationship to designation
    */
    public function designation()
    {
        return $this->belongsTo(Designation::class, 'fk_designation');
    }
}
