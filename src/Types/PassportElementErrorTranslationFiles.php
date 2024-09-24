<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 */
class PassportElementErrorTranslationFiles implements PassportElementError
{
    /**
     * @param string   $source      Error source, must be translation_files
     * @param string   $type        Type of element of the user's Telegram Passport which has the issue, one of "passport", "driver_license", "identity_card", "internal_passport", "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
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
