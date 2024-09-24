<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The background is filled using the selected color.
 */
class BackgroundFillSolid implements BackgroundFill
{
    /**
     * @param string $type  Type of the background fill, always "solid"
     * @param int    $color The color of the background fill in the RGB24 format
     */
    public function __construct(
        public string $type,
        public int $color,
    ) {
    }
}
