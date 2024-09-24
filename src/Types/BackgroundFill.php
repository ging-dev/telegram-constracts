<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes the way a background is filled based on the selected colors. Currently, it can be one of
 * - BackgroundFillSolid
 * - BackgroundFillGradient
 * - BackgroundFillFreeformGradient.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'solid' => BackgroundFillSolid::class,
        'gradient' => BackgroundFillGradient::class,
        'freeform_gradient' => BackgroundFillFreeformGradient::class,
    ],
)]
interface BackgroundFill
{
}
