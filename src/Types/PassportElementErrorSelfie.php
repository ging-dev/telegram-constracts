<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 */
class PassportElementErrorSelfie implements PassportElementError
{
    /**
     * @param string $source    Error source, must be selfie
     * @param string $type      The section of the user's Telegram Passport which has the issue, one of "passport", "driver_license", "identity_card", "internal_passport"
     * @param string $file_hash Base64-encoded hash of the file with the selfie
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
