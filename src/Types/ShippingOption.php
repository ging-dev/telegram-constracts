<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents one shipping option.
 */
class ShippingOption
{
    /**
     * @param string         $id     Shipping option identifier
     * @param string         $title  Option title
     * @param LabeledPrice[] $prices List of price portions
     */
    public function __construct(
        public string $id,
        public string $title,
        public array $prices,
    ) {
    }
}
