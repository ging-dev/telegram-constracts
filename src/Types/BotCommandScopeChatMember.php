<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
class BotCommandScopeChatMember implements BotCommandScope
{
    /**
     * @param string     $type    Scope type, must be chat_member
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int        $user_id Unique identifier of the target user
     */
    public function __construct(
        public string $type,
        public int|string $chat_id,
        public int $user_id,
    ) {
    }
}
