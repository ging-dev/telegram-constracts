<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a chat background.
 */
class ChatBackground
{
    /**
     * @param BackgroundType $type Type of the background
     */
    public function __construct(
        public BackgroundType $type,
    ) {
    }
}
