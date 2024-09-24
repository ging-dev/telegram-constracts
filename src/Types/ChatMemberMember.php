<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
class ChatMemberMember implements ChatMember
{
    /**
     * @param string   $status     The member's status in the chat, always "member"
     * @param User     $user       Information about the user
     * @param int|null $until_date Optional. Date when the user's subscription will expire; Unix time
     */
    public function __construct(
        public string $status,
        public User $user,
        public ?int $until_date,
    ) {
    }
}
