<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the scope of bot commands, covering a specific chat.
 */
class BotCommandScopeChat implements BotCommandScope
{
    /**
     * @param string     $type    Scope type, must be chat
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public function __construct(
        public string $type,
        public int|string $chat_id,
    ) {
    }
}
