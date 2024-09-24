<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about a chat that was shared with the bot using a KeyboardButtonRequestChat button.
 */
class ChatShared
{
    /**
     * @param int              $request_id Identifier of the request
     * @param int              $chat_id    Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
     * @param string|null      $title      Optional. Title of the chat, if the title was requested by the bot.
     * @param string|null      $username   Optional. Username of the chat, if the username was requested by the bot and available.
     * @param PhotoSize[]|null $photo      Optional. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public function __construct(
        public int $request_id,
        public int $chat_id,
        public ?string $title,
        public ?string $username,
        public ?array $photo,
    ) {
    }
}
