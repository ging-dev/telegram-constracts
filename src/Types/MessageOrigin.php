<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes the origin of a message. It can be one of
 * - MessageOriginUser
 * - MessageOriginHiddenUser
 * - MessageOriginChat
 * - MessageOriginChannel.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'user' => MessageOriginUser::class,
        'hidden_user' => MessageOriginHiddenUser::class,
        'chat' => MessageOriginChat::class,
        'channel' => MessageOriginChannel::class,
    ],
)]
interface MessageOrigin
{
}
