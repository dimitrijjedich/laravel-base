<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property Collection $cities
 * @property int $country_id
 * @property Country $country
 * @property string $name
 */
class State extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cities(): HasMany
    {
        return $this->HasMany(City::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
