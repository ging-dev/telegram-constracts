<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 */
class PassportElementErrorDataField implements PassportElementError
{
    /**
     * @param string $source     Error source, must be data
     * @param string $type       The section of the user's Telegram Passport which has the error, one of "personal_details", "passport", "driver_license", "identity_card", "internal_passport", "address"
     * @param string $field_name Name of the data field which has the error
     * @param string $data_hash  Base64-encoded data hash
     * @param string $message    Error message
     */
    public function __construct(
        public string $source,
        public string $type,
        public string $field_name,
        public string $data_hash,
        public string $message,
    ) {
    }
}
