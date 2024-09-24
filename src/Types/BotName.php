<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents the bot's name.
 */
class BotName
{
    /**
     * @param string $name The bot's name
     */
    public function __construct(
        public string $name,
    ) {
    }
}
