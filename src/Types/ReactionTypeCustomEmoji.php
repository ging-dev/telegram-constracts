<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The reaction is based on a custom emoji.
 */
class ReactionTypeCustomEmoji implements ReactionType
{
    /**
     * @param string $type            Type of the reaction, always "custom_emoji"
     * @param string $custom_emoji_id Custom emoji identifier
     */
    public function __construct(
        public string $type,
        public string $custom_emoji_id,
    ) {
    }
}
