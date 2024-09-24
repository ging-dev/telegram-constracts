<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents information about an order.
 */
class OrderInfo
{
    /**
     * @param string|null          $name             Optional. User name
     * @param string|null          $phone_number     Optional. User's phone number
     * @param string|null          $email            Optional. User email
     * @param ShippingAddress|null $shipping_address Optional. User shipping address
     */
    public function __construct(
        public ?string $name,
        public ?string $phone_number,
        public ?string $email,
        public ?ShippingAddress $shipping_address,
    ) {
    }
}
