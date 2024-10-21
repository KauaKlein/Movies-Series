<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'tb_episode';

    protected $fillable = [

        'id_episode',
        'id_season',
        'name',
        'episode',
        'description',
        'title_episode'

    ];
}
