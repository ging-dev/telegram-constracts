<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultGif implements InlineQueryResult
{
    /**
     * @param string                    $type                     Type of the result, must be gif
     * @param string                    $id                       Unique identifier for this result, 1-64 bytes
     * @param string                    $gif_url                  A valid URL for the GIF file. File size must not exceed 1MB
     * @param int|null                  $gif_width                Optional. Width of the GIF
     * @param int|null                  $gif_height               Optional. Height of the GIF
     * @param int|null                  $gif_duration             Optional. Duration of the GIF in seconds
     * @param string                    $thumbnail_url            URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @param string|null               $thumbnail_mime_type      Optional. MIME type of the thumbnail, must be one of "image/jpeg", "image/gif", or "video/mp4". Defaults to "image/jpeg"
     * @param string|null               $title                    Optional. Title for the result
     * @param string|null               $caption                  Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     * @param string|null               $parse_mode               Optional. Mode for parsing entities in the caption. See formatting options for more details.
     * @param MessageEntity[]|null      $caption_entities         Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                 $show_caption_above_media Optional. Pass True, if the caption must be shown above the message media
     * @param InlineKeyboardMarkup|null $reply_markup             Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content    Optional. Content of the message to be sent instead of the GIF animation
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $gif_url,
        public ?int $gif_width,
        public ?int $gif_height,
        public ?int $gif_duration,
        public string $thumbnail_url,
        public ?string $thumbnail_mime_type,
        public ?string $title,
        public ?string $caption,
        public ?string $parse_mode,
        public ?array $caption_entities,
        public ?bool $show_caption_above_media,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
