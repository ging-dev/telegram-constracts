<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Contains information about the start page settings of a Telegram Business account.
 */
class BusinessIntro
{
    /**
     * @param string|null  $title   Optional. Title text of the business intro
     * @param string|null  $message Optional. Message text of the business intro
     * @param Sticker|null $sticker Optional. Sticker of the business intro
     */
    public function __construct(
        public ?string $title,
        public ?string $message,
        public ?Sticker $sticker,
    ) {
    }
}
