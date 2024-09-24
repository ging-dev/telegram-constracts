<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 */
class MessageOriginChat implements MessageOrigin
{
    /**
     * @param string      $type             Type of the message origin, always "chat"
     * @param int         $date             Date the message was sent originally in Unix time
     * @param Chat        $sender_chat      Chat that sent the message originally
     * @param string|null $author_signature Optional. For messages originally sent by an anonymous chat administrator, original message author signature
     */
    public function __construct(
        public string $type,
        public int $date,
        public Chat $sender_chat,
        public ?string $author_signature,
    ) {
    }
}
