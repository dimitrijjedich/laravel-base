<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property Collection $states
 * @property string $name
 */
class Country extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }
}
