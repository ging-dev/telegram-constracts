<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents the bot's description.
 */
class BotDescription
{
    /**
     * @param string $description The bot's description
     */
    public function __construct(
        public string $description,
    ) {
    }
}
