<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
 */
class InlineQueryResultDocument implements InlineQueryResult
{
    /**
     * @param string                    $type                  Type of the result, must be document
     * @param string                    $id                    Unique identifier for this result, 1-64 bytes
     * @param string                    $title                 Title for the result
     * @param string|null               $caption               Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param string|null               $parse_mode            Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     * @param MessageEntity[]|null      $caption_entities      Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param string                    $document_url          A valid URL for the file
     * @param string                    $mime_type             MIME type of the content of the file, either "application/pdf" or "application/zip"
     * @param string|null               $description           Optional. Short description of the result
     * @param InlineKeyboardMarkup|null $reply_markup          Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content Optional. Content of the message to be sent instead of the file
     * @param string|null               $thumbnail_url         Optional. URL of the thumbnail (JPEG only) for the file
     * @param int|null                  $thumbnail_width       Optional. Thumbnail width
     * @param int|null                  $thumbnail_height      Optional. Thumbnail height
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $title,
        public ?string $caption,
        public ?string $parse_mode,
        public ?array $caption_entities,
        public string $document_url,
        public string $mime_type,
        public ?string $description,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
        public ?string $thumbnail_url,
        public ?int $thumbnail_width,
        public ?int $thumbnail_height,
    ) {
    }
}
