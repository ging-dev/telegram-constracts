<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes the paid media to be sent. Currently, it can be one of
 * - InputPaidMediaPhoto
 * - InputPaidMediaVideo.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(typeProperty: 'type', mapping: ['photo' => InputPaidMediaPhoto::class, 'video' => InputPaidMediaVideo::class])]
interface InputPaidMedia
{
}
