<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
class PassportElementErrorFiles implements PassportElementError
{
    /**
     * @param string   $source      Error source, must be files
     * @param string   $type        The section of the user's Telegram Passport which has the issue, one of "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
     * @param string[] $file_hashes List of base64-encoded file hashes
     * @param string   $message     Error message
     */
    public function __construct(
        public string $source,
        public string $type,
        public array $file_hashes,
        public string $message,
    ) {
    }
}
