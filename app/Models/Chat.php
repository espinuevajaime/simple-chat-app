<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Chat
 * @package App\Models
 */
class Chat extends Model
{
    /**
     * 
     * @var array
     */
    protected $guarded = [];

    /**
     * 
     * @var string[]
     */
    protected $casts = [
        'read_at' => 'datetime'
    ];

    /**
     * 
     * @return BelongsTo
     */
    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
