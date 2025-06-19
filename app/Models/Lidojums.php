<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lidojums extends Model
{
    // Specify the actual table name
    protected $table = 'lidojumi';

    // If you want mass assignment
    protected $fillable = [
        'lidojuma_numurs',
        'no',
        'uz',
        'izlidosanas_laiks',
        'nosledesanas_laiks',
        'cena',
    ];
}
