<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents the content of a media message to be sent. It should be one of
 * - InputMediaAnimation
 * - InputMediaDocument
 * - InputMediaAudio
 * - InputMediaPhoto
 * - InputMediaVideo.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'photo' => InputMediaPhoto::class,
        'video' => InputMediaVideo::class,
        'animation' => InputMediaAnimation::class,
        'audio' => InputMediaAudio::class,
        'document' => InputMediaDocument::class,
    ],
)]
interface InputMedia
{
}
