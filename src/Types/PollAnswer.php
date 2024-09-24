<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer
{
    /**
     * @param string    $poll_id    Unique poll identifier
     * @param Chat|null $voter_chat Optional. The chat that changed the answer to the poll, if the voter is anonymous
     * @param User|null $user       Optional. The user that changed the answer to the poll, if the voter isn't anonymous
     * @param int[]     $option_ids 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     */
    public function __construct(
        public string $poll_id,
        public ?Chat $voter_chat,
        public ?User $user,
        public array $option_ids,
    ) {
    }
}
