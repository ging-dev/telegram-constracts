<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The paid media is a photo.
 */
class PaidMediaPhoto implements PaidMedia
{
    /**
     * @param string      $type  Type of the paid media, always "photo"
     * @param PhotoSize[] $photo The photo
     */
    public function __construct(
        public string $type,
        public array $photo,
    ) {
    }
}
