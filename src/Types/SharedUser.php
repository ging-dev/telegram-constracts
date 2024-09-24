<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
 */
class SharedUser
{
    /**
     * @param int              $user_id    Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
     * @param string|null      $first_name Optional. First name of the user, if the name was requested by the bot
     * @param string|null      $last_name  Optional. Last name of the user, if the name was requested by the bot
     * @param string|null      $username   Optional. Username of the user, if the username was requested by the bot
     * @param PhotoSize[]|null $photo      Optional. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public function __construct(
        public int $user_id,
        public ?string $first_name,
        public ?string $last_name,
        public ?string $username,
        public ?array $photo,
    ) {
    }
}
