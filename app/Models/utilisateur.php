<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Auth\Authenticatable;

class Utilisateur extends Model 
{
    use HasFactory, AuthenticatableTrait;

    protected $fillable = [
        'Prénom',
        'Nom',
        'email',
        'password'
    ];
}
