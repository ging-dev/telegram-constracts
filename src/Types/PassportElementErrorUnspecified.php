<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
class PassportElementErrorUnspecified implements PassportElementError
{
    /**
     * @param string $source       Error source, must be unspecified
     * @param string $type         Type of element of the user's Telegram Passport which has the issue
     * @param string $element_hash Base64-encoded element hash
     * @param string $message      Error message
     */
    public function __construct(
        public string $source,
        public string $type,
        public string $element_hash,
        public string $message,
    ) {
    }
}
