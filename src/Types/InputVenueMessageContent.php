<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 */
class InputVenueMessageContent
{
    /**
     * @param float       $latitude          Latitude of the venue in degrees
     * @param float       $longitude         Longitude of the venue in degrees
     * @param string      $title             Name of the venue
     * @param string      $address           Address of the venue
     * @param string|null $foursquare_id     Optional. Foursquare identifier of the venue, if known
     * @param string|null $foursquare_type   Optional. Foursquare type of the venue, if known. (For example, "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
     * @param string|null $google_place_id   Optional. Google Places identifier of the venue
     * @param string|null $google_place_type Optional. Google Places type of the venue. (See supported types.)
     */
    public function __construct(
        public float $latitude,
        public float $longitude,
        public string $title,
        public string $address,
        public ?string $foursquare_id,
        public ?string $foursquare_type,
        public ?string $google_place_id,
        public ?string $google_place_type,
    ) {
    }
}
