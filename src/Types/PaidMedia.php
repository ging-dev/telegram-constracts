<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes paid media. Currently, it can be one of
 * - PaidMediaPreview
 * - PaidMediaPhoto
 * - PaidMediaVideo.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: ['preview' => PaidMediaPreview::class, 'photo' => PaidMediaPhoto::class, 'video' => PaidMediaVideo::class],
)]
interface PaidMedia
{
}
