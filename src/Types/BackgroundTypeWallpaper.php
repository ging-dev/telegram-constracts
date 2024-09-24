<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The background is a wallpaper in the JPEG format.
 */
class BackgroundTypeWallpaper implements BackgroundType
{
    /**
     * @param string    $type               Type of the background, always "wallpaper"
     * @param Document  $document           Document with the wallpaper
     * @param int       $dark_theme_dimming Dimming of the background in dark themes, as a percentage; 0-100
     * @param bool|null $is_blurred         Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
     * @param bool|null $is_moving          Optional. True, if the background moves slightly when the device is tilted
     */
    public function __construct(
        public string $type,
        public Document $document,
        public int $dark_theme_dimming,
        public ?bool $is_blurred,
        public ?bool $is_moving,
    ) {
    }
}
