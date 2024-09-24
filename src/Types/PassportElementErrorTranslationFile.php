<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 */
class PassportElementErrorTranslationFile implements PassportElementError
{
    /**
     * @param string $source    Error source, must be translation_file
     * @param string $type      Type of element of the user's Telegram Passport which has the issue, one of "passport", "driver_license", "identity_card", "internal_passport", "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
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
