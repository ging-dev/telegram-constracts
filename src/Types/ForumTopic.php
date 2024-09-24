<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a forum topic.
 */
class ForumTopic
{
    /**
     * @param int         $message_thread_id    Unique identifier of the forum topic
     * @param string      $name                 Name of the topic
     * @param int         $icon_color           Color of the topic icon in RGB format
     * @param string|null $icon_custom_emoji_id Optional. Unique identifier of the custom emoji shown as the topic icon
     */
    public function __construct(
        public int $message_thread_id,
        public string $name,
        public int $icon_color,
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
