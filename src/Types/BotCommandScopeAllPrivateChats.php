<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
class BotCommandScopeAllPrivateChats implements BotCommandScope
{
    /**
     * @param string $type Scope type, must be all_private_chats
     */
    public function __construct(
        public string $type,
    ) {
    }
}
