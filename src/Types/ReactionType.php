<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes the type of a reaction. Currently, it can be one of
 * - ReactionTypeEmoji
 * - ReactionTypeCustomEmoji
 * - ReactionTypePaid.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'emoji' => ReactionTypeEmoji::class,
        'custom_emoji' => ReactionTypeCustomEmoji::class,
        'paid' => ReactionTypePaid::class,
    ],
)]
interface ReactionType
{
}
