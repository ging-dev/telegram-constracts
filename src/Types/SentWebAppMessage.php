<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 */
class SentWebAppMessage
{
    /**
     * @param string|null $inline_message_id Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
     */
    public function __construct(
        public ?string $inline_message_id,
    ) {
    }
}
