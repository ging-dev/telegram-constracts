<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The reaction is paid.
 */
class ReactionTypePaid implements ReactionType
{
    /**
     * @param string $type Type of the reaction, always "paid"
     */
    public function __construct(
        public string $type,
    ) {
    }
}
