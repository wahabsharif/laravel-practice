<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // The table associated with the model (if you didn't rename it)
    protected $table = 'contacts';

    // Define the fields that are fillable
    protected $fillable = ['name', 'email', 'subject', 'message'];
}
