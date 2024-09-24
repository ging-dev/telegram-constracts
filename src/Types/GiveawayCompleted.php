<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 */
class GiveawayCompleted
{
    /**
     * @param int          $winner_count          Number of winners in the giveaway
     * @param int|null     $unclaimed_prize_count Optional. Number of undistributed prizes
     * @param Message|null $giveaway_message      Optional. Message with the giveaway that was completed, if it wasn't deleted
     * @param bool|null    $is_star_giveaway      Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
     */
    public function __construct(
        public int $winner_count,
        public ?int $unclaimed_prize_count,
        public ?Message $giveaway_message,
        public ?bool $is_star_giveaway,
    ) {
    }
}
