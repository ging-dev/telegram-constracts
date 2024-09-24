<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents an invite link for a chat.
 */
class ChatInviteLink
{
    /**
     * @param string      $invite_link                The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with "...".
     * @param User        $creator                    Creator of the link
     * @param bool        $creates_join_request       True, if users joining the chat via the link need to be approved by chat administrators
     * @param bool        $is_primary                 True, if the link is primary
     * @param bool        $is_revoked                 True, if the link is revoked
     * @param string|null $name                       Optional. Invite link name
     * @param int|null    $expire_date                Optional. Point in time (Unix timestamp) when the link will expire or has been expired
     * @param int|null    $member_limit               Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @param int|null    $pending_join_request_count Optional. Number of pending join requests created using this link
     * @param int|null    $subscription_period        Optional. The number of seconds the subscription will be active for before the next payment
     * @param int|null    $subscription_price         Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
     */
    public function __construct(
        public string $invite_link,
        public User $creator,
        public bool $creates_join_request,
        public bool $is_primary,
        public bool $is_revoked,
        public ?string $name,
        public ?int $expire_date,
        public ?int $member_limit,
        public ?int $pending_join_request_count,
        public ?int $subscription_period,
        public ?int $subscription_price,
    ) {
    }
}
