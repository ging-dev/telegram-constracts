<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a point on the map.
 */
class Location
{
    /**
     * @param float      $latitude               Latitude as defined by the sender
     * @param float      $longitude              Longitude as defined by the sender
     * @param float|null $horizontal_accuracy    Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null   $live_period            Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
     * @param int|null   $heading                Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     * @param int|null   $proximity_alert_radius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     */
    public function __construct(
        public float $latitude,
        public float $longitude,
        public ?float $horizontal_accuracy,
        public ?int $live_period,
        public ?int $heading,
        public ?int $proximity_alert_radius,
    ) {
    }
}
