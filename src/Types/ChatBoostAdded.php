<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a service message about a user boosting a chat.
 */
class ChatBoostAdded
{
    /**
     * @param int $boost_count Number of boosts added by the user
     */
    public function __construct(
        public int $boost_count,
    ) {
    }
}
