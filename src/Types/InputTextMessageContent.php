<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 */
class InputTextMessageContent
{
    /**
     * @param string                  $message_text         Text of the message to be sent, 1-4096 characters
     * @param string|null             $parse_mode           Optional. Mode for parsing entities in the message text. See formatting options for more details.
     * @param MessageEntity[]|null    $entities             Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     * @param LinkPreviewOptions|null $link_preview_options Optional. Link preview generation options for the message
     */
    public function __construct(
        public string $message_text,
        public ?string $parse_mode,
        public ?array $entities,
        public ?LinkPreviewOptions $link_preview_options,
    ) {
    }
}
