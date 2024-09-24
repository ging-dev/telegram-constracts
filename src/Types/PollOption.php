<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about one answer option in a poll.
 */
class PollOption
{
    /**
     * @param string               $text          Option text, 1-100 characters
     * @param MessageEntity[]|null $text_entities Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
     * @param int                  $voter_count   Number of users that voted for this option
     */
    public function __construct(
        public string $text,
        public ?array $text_entities,
        public int $voter_count,
    ) {
    }
}
