<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    function authors(): BelongsTo{
        return $this->belongsTo(Author::class);
    }
    function languages(): BelongsTo{
        return $this->belongsTo(Language::class);
    }

    function topics(): BelongsTo{
        return $this->belongsTo(Topic::class);
    }
}
