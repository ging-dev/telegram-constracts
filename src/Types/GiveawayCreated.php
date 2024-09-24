<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a service message about the creation of a scheduled giveaway.
 */
class GiveawayCreated
{
    /**
     * @param int|null $prize_star_count Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     */
    public function __construct(
        public ?int $prize_star_count,
    ) {
    }
}
