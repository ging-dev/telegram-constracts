<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 */
class CallbackQuery
{
    /**
     * @param string                        $id                Unique identifier for this query
     * @param User                          $from              Sender
     * @param MaybeInaccessibleMessage|null $message           Optional. Message sent by the bot with the callback button that originated the query
     * @param string|null                   $inline_message_id Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     * @param string                        $chat_instance     Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     * @param string|null                   $data              Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
     * @param string|null                   $game_short_name   Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    public function __construct(
        public string $id,
        public User $from,
        public ?MaybeInaccessibleMessage $message,
        public ?string $inline_message_id,
        public string $chat_instance,
        public ?string $data,
        public ?string $game_short_name,
    ) {
    }
}
