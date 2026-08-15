<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeris extends Model
{
    use HasFactory;

    protected $table = 'galeris';

    protected $fillable = [
        'judulgaleri',
        'deskripsigaleri',
        'kategorigaleri',
        'imagegaleri',
    ];
}
