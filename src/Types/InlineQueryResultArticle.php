<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a link to an article or web page.
 */
class InlineQueryResultArticle implements InlineQueryResult
{
    /**
     * @param string                    $type                  Type of the result, must be article
     * @param string                    $id                    Unique identifier for this result, 1-64 Bytes
     * @param string                    $title                 Title of the result
     * @param InputMessageContent       $input_message_content Content of the message to be sent
     * @param InlineKeyboardMarkup|null $reply_markup          Optional. Inline keyboard attached to the message
     * @param string|null               $url                   Optional. URL of the result
     * @param bool|null                 $hide_url              Optional. Pass True if you don't want the URL to be shown in the message
     * @param string|null               $description           Optional. Short description of the result
     * @param string|null               $thumbnail_url         Optional. Url of the thumbnail for the result
     * @param int|null                  $thumbnail_width       Optional. Thumbnail width
     * @param int|null                  $thumbnail_height      Optional. Thumbnail height
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $title,
        public InputMessageContent $input_message_content,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?string $url,
        public ?bool $hide_url,
        public ?string $description,
        public ?string $thumbnail_url,
        public ?int $thumbnail_width,
        public ?int $thumbnail_height,
    ) {
    }
}
