<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'social_name',
        'cpf',
        'father_name',
        'mother_name',
        'cellphone',
        'email',
        'email_verified_at',
        'password'
    ];

    protected $table = "person";

}
