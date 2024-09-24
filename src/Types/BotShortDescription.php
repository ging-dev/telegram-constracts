<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents the bot's short description.
 */
class BotShortDescription
{
    /**
     * @param string $short_description The bot's short description
     */
    public function __construct(
        public string $short_description,
    ) {
    }
}
