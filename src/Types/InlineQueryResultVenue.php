<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 */
class InlineQueryResultVenue implements InlineQueryResult
{
    /**
     * @param string                    $type                  Type of the result, must be venue
     * @param string                    $id                    Unique identifier for this result, 1-64 Bytes
     * @param float                     $latitude              Latitude of the venue location in degrees
     * @param float                     $longitude             Longitude of the venue location in degrees
     * @param string                    $title                 Title of the venue
     * @param string                    $address               Address of the venue
     * @param string|null               $foursquare_id         Optional. Foursquare identifier of the venue if known
     * @param string|null               $foursquare_type       Optional. Foursquare type of the venue, if known. (For example, "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
     * @param string|null               $google_place_id       Optional. Google Places identifier of the venue
     * @param string|null               $google_place_type     Optional. Google Places type of the venue. (See supported types.)
     * @param InlineKeyboardMarkup|null $reply_markup          Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content Optional. Content of the message to be sent instead of the venue
     * @param string|null               $thumbnail_url         Optional. Url of the thumbnail for the result
     * @param int|null                  $thumbnail_width       Optional. Thumbnail width
     * @param int|null                  $thumbnail_height      Optional. Thumbnail height
     */
    public function __construct(
        public string $type,
        public string $id,
        public float $latitude,
        public float $longitude,
        public string $title,
        public string $address,
        public ?string $foursquare_id,
        public ?string $foursquare_type,
        public ?string $google_place_id,
        public ?string $google_place_type,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
        public ?string $thumbnail_url,
        public ?int $thumbnail_width,
        public ?int $thumbnail_height,
    ) {
    }
}
