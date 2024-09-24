<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
class InlineKeyboardMarkup
{
    /**
     * @param InlineKeyboardButton[][] $inline_keyboard Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    public function __construct(
        public array $inline_keyboard,
    ) {
    }
}
