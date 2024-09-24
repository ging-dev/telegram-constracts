<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the content of a location message to be sent as the result of an inline query.
 */
class InputLocationMessageContent
{
    /**
     * @param float      $latitude               Latitude of the location in degrees
     * @param float      $longitude              Longitude of the location in degrees
     * @param float|null $horizontal_accuracy    Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null   $live_period            Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     * @param int|null   $heading                Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int|null   $proximity_alert_radius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
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
