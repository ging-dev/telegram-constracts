<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators implements BotCommandScope
{
    /**
     * @param string $type Scope type, must be all_chat_administrators
     */
    public function __construct(
        public string $type,
    ) {
    }
}
