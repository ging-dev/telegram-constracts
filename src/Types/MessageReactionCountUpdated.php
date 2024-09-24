<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
class MessageReactionCountUpdated
{
    /**
     * @param Chat            $chat       The chat containing the message
     * @param int             $message_id Unique message identifier inside the chat
     * @param int             $date       Date of the change in Unix time
     * @param ReactionCount[] $reactions  List of reactions that are present on the message
     */
    public function __construct(
        public Chat $chat,
        public int $message_id,
        public int $date,
        public array $reactions,
    ) {
    }
}
