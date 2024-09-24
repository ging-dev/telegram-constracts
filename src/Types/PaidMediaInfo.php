<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes the paid media added to a message.
 */
class PaidMediaInfo
{
    /**
     * @param int         $star_count The number of Telegram Stars that must be paid to buy access to the media
     * @param PaidMedia[] $paid_media Information about the paid media
     */
    public function __construct(
        public int $star_count,
        public array $paid_media,
    ) {
    }
}
