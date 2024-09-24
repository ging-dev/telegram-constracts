<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
class BotCommandScopeAllGroupChats implements BotCommandScope
{
    /**
     * @param string $type Scope type, must be all_group_chats
     */
    public function __construct(
        public string $type,
    ) {
    }
}
