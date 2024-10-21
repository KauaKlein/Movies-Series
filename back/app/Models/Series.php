<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/***
 * Command to create (-m with migration)
 *
 * php artisan make:model Serie -m
 *
 */

class Series extends Model
{
    use HasFactory;

    protected $table = 'tb_series';

    protected $fillable = [
        'id_series',
        'title',
        'season',
        'episode',
        'genre',
        'year',
        'rating'

    ];
     protected $primaryKey = 'id_series';

    /**
     * @return HasMany
     */
    public function season(): HasMany // uma serie pode ter varias temporadas
    {
        return $this->hasMany(Season::class);
    }
}
