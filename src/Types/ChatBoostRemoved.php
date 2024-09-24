<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a boost removed from a chat.
 */
class ChatBoostRemoved
{
    /**
     * @param Chat            $chat        Chat which was boosted
     * @param string          $boost_id    Unique identifier of the boost
     * @param int             $remove_date Point in time (Unix timestamp) when the boost was removed
     * @param ChatBoostSource $source      Source of the removed boost
     */
    public function __construct(
        public Chat $chat,
        public string $boost_id,
        public int $remove_date,
        public ChatBoostSource $source,
    ) {
    }
}
