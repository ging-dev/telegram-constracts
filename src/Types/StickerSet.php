<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a sticker set.
 */
class StickerSet
{
    /**
     * @param string         $name         Sticker set name
     * @param string         $title        Sticker set title
     * @param string         $sticker_type Type of stickers in the set, currently one of "regular", "mask", "custom_emoji"
     * @param Sticker[]      $stickers     List of all set stickers
     * @param PhotoSize|null $thumbnail    Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     */
    public function __construct(
        public string $name,
        public string $title,
        public string $sticker_type,
        public array $stickers,
        public ?PhotoSize $thumbnail,
    ) {
    }
}
