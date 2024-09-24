<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Contains information about the location of a Telegram Business account.
 */
class BusinessLocation
{
    /**
     * @param string        $address  Address of the business
     * @param Location|null $location Optional. Location of the business
     */
    public function __construct(
        public string $address,
        public ?Location $location,
    ) {
    }
}
