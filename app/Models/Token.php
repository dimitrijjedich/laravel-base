<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Token extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $connection = 'pgsql';

    public function user(): BelongsTo
    {
        return $this->setConnection('mysql')->belongsTo(User::class);
    }
}
