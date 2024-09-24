<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes that no specific value for the menu button was set.
 */
class MenuButtonDefault implements MenuButton
{
    /**
     * @param string $type Type of the button, must be default
     */
    public function __construct(
        public string $type,
    ) {
    }
}
