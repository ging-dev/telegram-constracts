<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a chat.
 */
class Chat
{
    /**
     * @param int         $id         Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string      $type       Type of the chat, can be either "private", "group", "supergroup" or "channel"
     * @param string|null $title      Optional. Title, for supergroups, channels and group chats
     * @param string|null $username   Optional. Username, for private chats, supergroups and channels if available
     * @param string|null $first_name Optional. First name of the other party in a private chat
     * @param string|null $last_name  Optional. Last name of the other party in a private chat
     * @param bool|null   $is_forum   Optional. True, if the supergroup chat is a forum (has topics enabled)
     */
    public function __construct(
        public int $id,
        public string $type,
        public ?string $title,
        public ?string $username,
        public ?string $first_name,
        public ?string $last_name,
        public ?bool $is_forum,
    ) {
    }
}
