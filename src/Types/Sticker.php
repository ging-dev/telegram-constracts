<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a sticker.
 */
class Sticker
{
    /**
     * @param string            $file_id           Identifier for this file, which can be used to download or reuse the file
     * @param string            $file_unique_id    Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param string            $type              Type of the sticker, currently one of "regular", "mask", "custom_emoji". The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
     * @param int               $width             Sticker width
     * @param int               $height            Sticker height
     * @param bool              $is_animated       True, if the sticker is animated
     * @param bool              $is_video          True, if the sticker is a video sticker
     * @param PhotoSize|null    $thumbnail         Optional. Sticker thumbnail in the .WEBP or .JPG format
     * @param string|null       $emoji             Optional. Emoji associated with the sticker
     * @param string|null       $set_name          Optional. Name of the sticker set to which the sticker belongs
     * @param File|null         $premium_animation Optional. For premium regular stickers, premium animation for the sticker
     * @param MaskPosition|null $mask_position     Optional. For mask stickers, the position where the mask should be placed
     * @param string|null       $custom_emoji_id   Optional. For custom emoji stickers, unique identifier of the custom emoji
     * @param bool|null         $needs_repainting  Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     * @param int|null          $file_size         Optional. File size in bytes
     */
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public string $type,
        public int $width,
        public int $height,
        public bool $is_animated,
        public bool $is_video,
        public ?PhotoSize $thumbnail,
        public ?string $emoji,
        public ?string $set_name,
        public ?File $premium_animation,
        public ?MaskPosition $mask_position,
        public ?string $custom_emoji_id,
        public ?bool $needs_repainting,
        public ?int $file_size,
    ) {
    }
}
