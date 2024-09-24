<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes the state of a revenue withdrawal operation. Currently, it can be one of
 * - RevenueWithdrawalStatePending
 * - RevenueWithdrawalStateSucceeded
 * - RevenueWithdrawalStateFailed.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'pending' => RevenueWithdrawalStatePending::class,
        'succeeded' => RevenueWithdrawalStateSucceeded::class,
        'failed' => RevenueWithdrawalStateFailed::class,
    ],
)]
interface RevenueWithdrawalState
{
}
