<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes an interval of time during which a business is open.
 */
class BusinessOpeningHoursInterval
{
    /**
     * @param int $opening_minute The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
     * @param int $closing_minute The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
     */
    public function __construct(
        public int $opening_minute,
        public int $closing_minute,
    ) {
    }
}
