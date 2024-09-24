<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a reaction added to a message along with the number of times it was added.
 */
class ReactionCount
{
    /**
     * @param ReactionType $type        Type of the reaction
     * @param int          $total_count Number of times the reaction was added
     */
    public function __construct(
        public ReactionType $type,
        public int $total_count,
    ) {
    }
}
