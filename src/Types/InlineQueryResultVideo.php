<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
class InlineQueryResultVideo implements InlineQueryResult
{
    /**
     * @param string                    $type                     Type of the result, must be video
     * @param string                    $id                       Unique identifier for this result, 1-64 bytes
     * @param string                    $video_url                A valid URL for the embedded video player or video file
     * @param string                    $mime_type                MIME type of the content of the video URL, "text/html" or "video/mp4"
     * @param string                    $thumbnail_url            URL of the thumbnail (JPEG only) for the video
     * @param string                    $title                    Title for the result
     * @param string|null               $caption                  Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @param string|null               $parse_mode               Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     * @param MessageEntity[]|null      $caption_entities         Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                 $show_caption_above_media Optional. Pass True, if the caption must be shown above the message media
     * @param int|null                  $video_width              Optional. Video width
     * @param int|null                  $video_height             Optional. Video height
     * @param int|null                  $video_duration           Optional. Video duration in seconds
     * @param string|null               $description              Optional. Short description of the result
     * @param InlineKeyboardMarkup|null $reply_markup             Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content    Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $video_url,
        public string $mime_type,
        public string $thumbnail_url,
        public string $title,
        public ?string $caption,
        public ?string $parse_mode,
        public ?array $caption_entities,
        public ?bool $show_caption_above_media,
        public ?int $video_width,
        public ?int $video_height,
        public ?int $video_duration,
        public ?string $description,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
