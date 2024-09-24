<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a link to a video file stored on the Telegram servers. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
class InlineQueryResultCachedVideo implements InlineQueryResult
{
    /**
     * @param string                    $type                     Type of the result, must be video
     * @param string                    $id                       Unique identifier for this result, 1-64 bytes
     * @param string                    $video_file_id            A valid file identifier for the video file
     * @param string                    $title                    Title for the result
     * @param string|null               $description              Optional. Short description of the result
     * @param string|null               $caption                  Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @param string|null               $parse_mode               Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     * @param MessageEntity[]|null      $caption_entities         Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                 $show_caption_above_media Optional. Pass True, if the caption must be shown above the message media
     * @param InlineKeyboardMarkup|null $reply_markup             Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content    Optional. Content of the message to be sent instead of the video
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $video_file_id,
        public string $title,
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
