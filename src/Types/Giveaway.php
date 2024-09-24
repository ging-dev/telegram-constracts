<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a message about a scheduled giveaway.
 */
class Giveaway
{
    /**
     * @param Chat[]        $chats                            The list of chats which the user must join to participate in the giveaway
     * @param int           $winners_selection_date           Point in time (Unix timestamp) when winners of the giveaway will be selected
     * @param int           $winner_count                     The number of users which are supposed to be selected as winners of the giveaway
     * @param bool|null     $only_new_members                 Optional. True, if only users who join the chats after the giveaway started should be eligible to win
     * @param bool|null     $has_public_winners               Optional. True, if the list of giveaway winners will be visible to everyone
     * @param string|null   $prize_description                Optional. Description of additional giveaway prize
     * @param string[]|null $country_codes                    Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
     * @param int|null      $prize_star_count                 Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @param int|null      $premium_subscription_month_count Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
     */
    public function __construct(
        public array $chats,
        public int $winners_selection_date,
        public int $winner_count,
        public ?bool $only_new_members,
        public ?bool $has_public_winners,
        public ?string $prize_description,
        public ?array $country_codes,
        public ?int $prize_star_count,
        public ?int $premium_subscription_month_count,
    ) {
    }
}
