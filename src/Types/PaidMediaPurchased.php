<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about a paid media purchase.
 */
class PaidMediaPurchased
{
    /**
     * @param User   $from               User who purchased the media
     * @param string $paid_media_payload Bot-specified paid media payload
     */
    public function __construct(
        public User $from,
        public string $paid_media_payload,
    ) {
    }
}
