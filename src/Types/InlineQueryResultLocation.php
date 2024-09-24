<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
class InlineQueryResultLocation implements InlineQueryResult
{
    /**
     * @param string                    $type                   Type of the result, must be location
     * @param string                    $id                     Unique identifier for this result, 1-64 Bytes
     * @param float                     $latitude               Location latitude in degrees
     * @param float                     $longitude              Location longitude in degrees
     * @param string                    $title                  Location title
     * @param float|null                $horizontal_accuracy    Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null                  $live_period            Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     * @param int|null                  $heading                Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int|null                  $proximity_alert_radius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param InlineKeyboardMarkup|null $reply_markup           Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content  Optional. Content of the message to be sent instead of the location
     * @param string|null               $thumbnail_url          Optional. Url of the thumbnail for the result
     * @param int|null                  $thumbnail_width        Optional. Thumbnail width
     * @param int|null                  $thumbnail_height       Optional. Thumbnail height
     */
    public function __construct(
        public string $type,
        public string $id,
        public float $latitude,
        public float $longitude,
        public string $title,
        public ?float $horizontal_accuracy,
        public ?int $live_period,
        public ?int $heading,
        public ?int $proximity_alert_radius,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
        public ?string $thumbnail_url,
        public ?int $thumbnail_width,
        public ?int $thumbnail_height,
    ) {
    }
}
