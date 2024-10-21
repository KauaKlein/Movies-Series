<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Season extends Model
{
    use HasFactory;

    protected $table = 'tb_season';

    protected $fillable = [

        'id_series',
        'id_season',
        'description',
        'season_title'

    ];
  

    public function episode():HasMany
    {
        return $this->hasMany(Episode::class);
    }
}
