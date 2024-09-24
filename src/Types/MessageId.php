<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a unique message identifier.
 */
class MessageId
{
    /**
     * @param int $message_id Unique message identifier
     */
    public function __construct(
        public int $message_id,
    ) {
    }
}
