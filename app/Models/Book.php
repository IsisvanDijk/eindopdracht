<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function genre(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
       return $this->belongsTo(Genre::class);
    }
}
