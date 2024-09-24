<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a boost added to a chat or changed.
 */
class ChatBoostUpdated
{
    /**
     * @param Chat      $chat  Chat which was boosted
     * @param ChatBoost $boost Information about the chat boost
     */
    public function __construct(
        public Chat $chat,
        public ChatBoost $boost,
    ) {
    }
}
