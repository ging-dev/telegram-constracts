<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a Game.
 */
class InlineQueryResultGame implements InlineQueryResult
{
    /**
     * @param string                    $type            Type of the result, must be game
     * @param string                    $id              Unique identifier for this result, 1-64 bytes
     * @param string                    $game_short_name Short name of the game
     * @param InlineKeyboardMarkup|null $reply_markup    Optional. Inline keyboard attached to the message
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $game_short_name,
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
