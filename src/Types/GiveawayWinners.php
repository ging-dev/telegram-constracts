<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a message about the completion of a giveaway with public winners.
 */
class GiveawayWinners
{
    /**
     * @param Chat        $chat                             The chat that created the giveaway
     * @param int         $giveaway_message_id              Identifier of the message with the giveaway in the chat
     * @param int         $winners_selection_date           Point in time (Unix timestamp) when winners of the giveaway were selected
     * @param int         $winner_count                     Total number of winners in the giveaway
     * @param User[]      $winners                          List of up to 100 winners of the giveaway
     * @param int|null    $additional_chat_count            Optional. The number of other chats the user had to join in order to be eligible for the giveaway
     * @param int|null    $prize_star_count                 Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
     * @param int|null    $premium_subscription_month_count Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
     * @param int|null    $unclaimed_prize_count            Optional. Number of undistributed prizes
     * @param bool|null   $only_new_members                 Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
     * @param bool|null   $was_refunded                     Optional. True, if the giveaway was canceled because the payment for it was refunded
     * @param string|null $prize_description                Optional. Description of additional giveaway prize
     */
    public function __construct(
        public Chat $chat,
        public int $giveaway_message_id,
        public int $winners_selection_date,
        public int $winner_count,
        public array $winners,
        public ?int $additional_chat_count,
        public ?int $prize_star_count,
        public ?int $premium_subscription_month_count,
        public ?int $unclaimed_prize_count,
        public ?bool $only_new_members,
        public ?bool $was_refunded,
        public ?string $prize_description,
    ) {
    }
}
