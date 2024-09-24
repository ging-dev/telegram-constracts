<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
class MenuButtonCommands implements MenuButton
{
    /**
     * @param string $type Type of the button, must be commands
     */
    public function __construct(
        public string $type,
    ) {
    }
}
