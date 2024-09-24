<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users: https://core.telegram.org/bots/features#chat-and-user-selection.
 */
class KeyboardButtonRequestUsers
{
    /**
     * @param int       $request_id       Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message
     * @param bool|null $user_is_bot      Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
     * @param bool|null $user_is_premium  Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
     * @param int|null  $max_quantity     Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
     * @param bool|null $request_name     Optional. Pass True to request the users' first and last names
     * @param bool|null $request_username Optional. Pass True to request the users' usernames
     * @param bool|null $request_photo    Optional. Pass True to request the users' photos
     */
    public function __construct(
        public int $request_id,
        public ?bool $user_is_bot,
        public ?bool $user_is_premium,
        public ?int $max_quantity,
        public ?bool $request_name,
        public ?bool $request_username,
        public ?bool $request_photo,
    ) {
    }
}
