<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 */
class UsersShared
{
    /**
     * @param int          $request_id Identifier of the request
     * @param SharedUser[] $users      information about users shared with the bot
     */
    public function __construct(
        public int $request_id,
        public array $users,
    ) {
    }
}
