<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a venue.
 */
class Venue
{
    /**
     * @param Location    $location          Venue location. Can't be a live location
     * @param string      $title             Name of the venue
     * @param string      $address           Address of the venue
     * @param string|null $foursquare_id     Optional. Foursquare identifier of the venue
     * @param string|null $foursquare_type   Optional. Foursquare type of the venue. (For example, "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
     * @param string|null $google_place_id   Optional. Google Places identifier of the venue
     * @param string|null $google_place_type Optional. Google Places type of the venue. (See supported types.)
     */
    public function __construct(
        public Location $location,
        public string $title,
        public string $address,
        public ?string $foursquare_id,
        public ?string $foursquare_type,
        public ?string $google_place_id,
        public ?string $google_place_type,
    ) {
    }
}
