<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function genre(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
       return $this->belongsTo(Genre::class);
    }
}
