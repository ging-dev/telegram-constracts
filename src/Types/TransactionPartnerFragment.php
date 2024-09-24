<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes a withdrawal transaction with Fragment.
 */
class TransactionPartnerFragment implements TransactionPartner
{
    /**
     * @param string                      $type             Type of the transaction partner, always "fragment"
     * @param RevenueWithdrawalState|null $withdrawal_state Optional. State of the transaction if the transaction is outgoing
     */
    public function __construct(
        public string $type,
        public ?RevenueWithdrawalState $withdrawal_state,
    ) {
    }
}
