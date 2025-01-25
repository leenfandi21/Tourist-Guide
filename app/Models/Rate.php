<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Guid\Guid;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate',
        'user_id',
        'activity_id',
        'guide_id',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function guide() : BelongsTo
    {
        return $this->belongsTo(Guide::class);
    }

    public function activity() : BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
