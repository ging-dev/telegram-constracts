<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS. By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the the voice message.
 */
class InlineQueryResultVoice implements InlineQueryResult
{
    /**
     * @param string                    $type                  Type of the result, must be voice
     * @param string                    $id                    Unique identifier for this result, 1-64 bytes
     * @param string                    $voice_url             A valid URL for the voice recording
     * @param string                    $title                 Recording title
     * @param string|null               $caption               Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null               $parse_mode            Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param MessageEntity[]|null      $caption_entities      Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int|null                  $voice_duration        Optional. Recording duration in seconds
     * @param InlineKeyboardMarkup|null $reply_markup          Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content Optional. Content of the message to be sent instead of the voice recording
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $voice_url,
        public string $title,
        public ?string $caption,
        public ?string $parse_mode,
        public ?array $caption_entities,
        public ?int $voice_duration,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
