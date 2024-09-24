<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 */
class PassportElementErrorReverseSide implements PassportElementError
{
    /**
     * @param string $source    Error source, must be reverse_side
     * @param string $type      The section of the user's Telegram Passport which has the issue, one of "driver_license", "identity_card"
     * @param string $file_hash Base64-encoded hash of the file with the reverse side of the document
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
