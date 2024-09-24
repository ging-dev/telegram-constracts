<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes the current status of a webhook.
 */
class WebhookInfo
{
    /**
     * @param string        $url                             Webhook URL, may be empty if webhook is not set up
     * @param bool          $has_custom_certificate          True, if a custom certificate was provided for webhook certificate checks
     * @param int           $pending_update_count            Number of updates awaiting delivery
     * @param string|null   $ip_address                      Optional. Currently used webhook IP address
     * @param int|null      $last_error_date                 Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     * @param string|null   $last_error_message              Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     * @param int|null      $last_synchronization_error_date Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
     * @param int|null      $max_connections                 Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     * @param string[]|null $allowed_updates                 Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
     */
    public function __construct(
        public string $url,
        public bool $has_custom_certificate,
        public int $pending_update_count,
        public ?string $ip_address,
        public ?int $last_error_date,
        public ?string $last_error_message,
        public ?int $last_synchronization_error_date,
        public ?int $max_connections,
        public ?array $allowed_updates,
    ) {
    }
}
