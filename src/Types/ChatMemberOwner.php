<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner implements ChatMember
{
    /**
     * @param string      $status       The member's status in the chat, always "creator"
     * @param User        $user         Information about the user
     * @param bool        $is_anonymous True, if the user's presence in the chat is hidden
     * @param string|null $custom_title Optional. Custom title for this user
     */
    public function __construct(
        public string $status,
        public User $user,
        public bool $is_anonymous,
        public ?string $custom_title,
    ) {
    }
}
