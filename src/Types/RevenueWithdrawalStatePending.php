<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The withdrawal is in progress.
 */
class RevenueWithdrawalStatePending implements RevenueWithdrawalState
{
    /**
     * @param string $type Type of the state, always "pending"
     */
    public function __construct(
        public string $type,
    ) {
    }
}
