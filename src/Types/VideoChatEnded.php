<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded
{
    /**
     * @param int $duration Video chat duration in seconds
     */
    public function __construct(
        public int $duration,
    ) {
    }
}
