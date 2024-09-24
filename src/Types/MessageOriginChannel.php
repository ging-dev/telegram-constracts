<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The message was originally sent to a channel chat.
 */
class MessageOriginChannel implements MessageOrigin
{
    /**
     * @param string      $type             Type of the message origin, always "channel"
     * @param int         $date             Date the message was sent originally in Unix time
     * @param Chat        $chat             Channel chat to which the message was originally sent
     * @param int         $message_id       Unique message identifier inside the chat
     * @param string|null $author_signature Optional. Signature of the original post author
     */
    public function __construct(
        public string $type,
        public int $date,
        public Chat $chat,
        public int $message_id,
        public ?string $author_signature,
    ) {
    }
}
