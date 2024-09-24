<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes the opening hours of a business.
 */
class BusinessOpeningHours
{
    /**
     * @param string                         $time_zone_name Unique name of the time zone for which the opening hours are defined
     * @param BusinessOpeningHoursInterval[] $opening_hours  List of time intervals describing business opening hours
     */
    public function __construct(
        public string $time_zone_name,
        public array $opening_hours,
    ) {
    }
}
