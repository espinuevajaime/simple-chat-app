<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasManyThrough;
use \Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Session
 * @package App\Models
 *
 * @property boolean block
 */
class Session extends Model
{

    protected $guarded = [];

    /**
     * @return HasManyThrough
     */
    public function chats(): HasManyThrough
    {
        return $this->hasManyThrough(Chat::class, Message::class);
    }

    /**
     * @return HasMany
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    /**
     *
     */
    public function deleteChats(): void
    {
        $this->chats()->where('user_id', auth()->id())->delete();
    }

    /**
     *
     */
    public function deleteMessages(): void
    {
        $this->messages()->delete();
    }

    /**
     *
     */
    public function block(): void
    {
        $this->is_block = true;
        $this->blocked_by = auth()->id();
        $this->save();
    }

    /**
     *
     */
    public function unblock(): void
    {
        $this->is_block = false;
        $this->blocked_by = null;
        $this->save();
    }
}
