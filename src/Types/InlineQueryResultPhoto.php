<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 */
class InlineQueryResultPhoto implements InlineQueryResult
{
    /**
     * @param string                    $type                     Type of the result, must be photo
     * @param string                    $id                       Unique identifier for this result, 1-64 bytes
     * @param string                    $photo_url                A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
     * @param string                    $thumbnail_url            URL of the thumbnail for the photo
     * @param int|null                  $photo_width              Optional. Width of the photo
     * @param int|null                  $photo_height             Optional. Height of the photo
     * @param string|null               $title                    Optional. Title for the result
     * @param string|null               $description              Optional. Short description of the result
     * @param string|null               $caption                  Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @param string|null               $parse_mode               Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     * @param MessageEntity[]|null      $caption_entities         Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                 $show_caption_above_media Optional. Pass True, if the caption must be shown above the message media
     * @param InlineKeyboardMarkup|null $reply_markup             Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content    Optional. Content of the message to be sent instead of the photo
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $photo_url,
        public string $thumbnail_url,
        public ?int $photo_width,
        public ?int $photo_height,
        public ?string $title,
        public ?string $description,
        public ?string $caption,
        public ?string $parse_mode,
        public ?array $caption_entities,
        public ?bool $show_caption_above_media,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
