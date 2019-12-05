<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Message
 * @package App\Models
 */
class Message extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'content'
    ];

    /**
     * @return HasMany
     */
    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }

    /**
     * @param $session_id
     * @return Model
     */
    public function createForSend($session_id): Model
    {
        return $this->chats()->create([
            'session_id' => $session_id,
            'type' => 0,
            'user_id' => auth()->id()]);
    }

    /**
     * @param $session_id
     * @param $to_user
     * @return Model
     */
    public function createForReceive($session_id, $to_user): Model
    {
        return $this->chats()->create([
            'session_id' => $session_id,
            'type' => 1,
            'user_id' => $to_user]);
    }
}
