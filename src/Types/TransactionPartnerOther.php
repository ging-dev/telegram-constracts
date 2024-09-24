<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes a transaction with an unknown source or recipient.
 */
class TransactionPartnerOther implements TransactionPartner
{
    /**
     * @param string $type Type of the transaction partner, always "other"
     */
    public function __construct(
        public string $type,
    ) {
    }
}
