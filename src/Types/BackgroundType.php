<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes the type of a background. Currently, it can be one of
 * - BackgroundTypeFill
 * - BackgroundTypeWallpaper
 * - BackgroundTypePattern
 * - BackgroundTypeChatTheme.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'fill' => BackgroundTypeFill::class,
        'wallpaper' => BackgroundTypeWallpaper::class,
        'pattern' => BackgroundTypePattern::class,
        'chat_theme' => BackgroundTypeChatTheme::class,
    ],
)]
interface BackgroundType
{
}
