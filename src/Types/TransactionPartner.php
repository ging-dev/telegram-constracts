<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object describes the source of a transaction, or its recipient for outgoing transactions. Currently, it can be one of
 * - TransactionPartnerUser
 * - TransactionPartnerFragment
 * - TransactionPartnerTelegramAds
 * - TransactionPartnerOther.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'user' => TransactionPartnerUser::class,
        'fragment' => TransactionPartnerFragment::class,
        'telegram_ads' => TransactionPartnerTelegramAds::class,
        'other' => TransactionPartnerOther::class,
    ],
)]
interface TransactionPartner
{
}
