<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 */
class PassportElementErrorFrontSide implements PassportElementError
{
    /**
     * @param string $source    Error source, must be front_side
     * @param string $type      The section of the user's Telegram Passport which has the issue, one of "passport", "driver_license", "identity_card", "internal_passport"
     * @param string $file_hash Base64-encoded hash of the file with the front side of the document
     * @param string $message   Error message
     */
    public function __construct(
        public string $source,
        public string $type,
        public string $file_hash,
        public string $message,
    ) {
    }
}
