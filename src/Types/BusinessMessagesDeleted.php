<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object is received when messages are deleted from a connected business account.
 */
class BusinessMessagesDeleted
{
    /**
     * @param string $business_connection_id Unique identifier of the business connection
     * @param Chat   $chat                   Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
     * @param int[]  $message_ids            The list of identifiers of deleted messages in the chat of the business account
     */
    public function __construct(
        public string $business_connection_id,
        public Chat $chat,
        public array $message_ids,
    ) {
    }
}
