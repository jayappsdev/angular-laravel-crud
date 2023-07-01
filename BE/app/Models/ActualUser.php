<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActualUser extends Model
{
    protected $table = 'users_table';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phone','country','age'];

    use HasFactory;
}
