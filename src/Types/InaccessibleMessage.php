<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
class InaccessibleMessage
{
    /**
     * @param Chat $chat       Chat the message belonged to
     * @param int  $message_id Unique message identifier inside the chat
     * @param int  $date       Always 0. The field can be used to differentiate regular and inaccessible messages.
     */
    public function __construct(
        public Chat $chat,
        public int $message_id,
        public int $date,
    ) {
    }
}
