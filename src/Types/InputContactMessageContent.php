<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
class InputContactMessageContent
{
    /**
     * @param string      $phone_number Contact's phone number
     * @param string      $first_name   Contact's first name
     * @param string|null $last_name    Optional. Contact's last name
     * @param string|null $vcard        Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     */
    public function __construct(
        public string $phone_number,
        public string $first_name,
        public ?string $last_name,
        public ?string $vcard,
    ) {
    }
}
