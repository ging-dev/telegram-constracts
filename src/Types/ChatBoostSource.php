<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes the source of a chat boost. It can be one of
 * - ChatBoostSourcePremium
 * - ChatBoostSourceGiftCode
 * - ChatBoostSourceGiveaway.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'source',
    mapping: [
        'premium' => ChatBoostSourcePremium::class,
        'gift_code' => ChatBoostSourceGiftCode::class,
        'giveaway' => ChatBoostSourceGiveaway::class,
    ],
)]
interface ChatBoostSource
{
}
