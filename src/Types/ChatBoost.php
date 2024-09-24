<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about a chat boost.
 */
class ChatBoost
{
    /**
     * @param string          $boost_id        Unique identifier of the boost
     * @param int             $add_date        Point in time (Unix timestamp) when the chat was boosted
     * @param int             $expiration_date Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
     * @param ChatBoostSource $source          Source of the added boost
     */
    public function __construct(
        public string $boost_id,
        public int $add_date,
        public int $expiration_date,
        public ChatBoostSource $source,
    ) {
    }
}
