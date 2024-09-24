<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The background is a gradient fill.
 */
class BackgroundFillGradient implements BackgroundFill
{
    /**
     * @param string $type           Type of the background fill, always "gradient"
     * @param int    $top_color      Top color of the gradient in the RGB24 format
     * @param int    $bottom_color   Bottom color of the gradient in the RGB24 format
     * @param int    $rotation_angle Clockwise rotation angle of the background fill in degrees; 0-359
     */
    public function __construct(
        public string $type,
        public int $top_color,
        public int $bottom_color,
        public int $rotation_angle,
    ) {
    }
}
