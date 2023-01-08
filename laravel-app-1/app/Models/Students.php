<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //specific column to allow change in db

    // protected $fillable = [
    //     'firstName', 'lastName', 'gender', 'age', 'email'
    // ];

    //use this when all columns on the database can be edited.
    protected $guarded = [];

    use HasFactory;
}
