<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 */
class MessageAutoDeleteTimerChanged
{
    /**
     * @param int $message_auto_delete_time New auto-delete time for messages in the chat; in seconds
     */
    public function __construct(
        public int $message_auto_delete_time,
    ) {
    }
}
