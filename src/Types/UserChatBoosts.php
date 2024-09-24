<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a list of boosts added to a chat by a user.
 */
class UserChatBoosts
{
    /**
     * @param ChatBoost[] $boosts The list of boosts added to the chat by the user
     */
    public function __construct(
        public array $boosts,
    ) {
    }
}
