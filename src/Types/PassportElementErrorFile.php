<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 */
class PassportElementErrorFile implements PassportElementError
{
    /**
     * @param string $source    Error source, must be file
     * @param string $type      The section of the user's Telegram Passport which has the issue, one of "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
     * @param string $file_hash Base64-encoded file hash
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
