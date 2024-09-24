<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Contains a list of Telegram Star transactions.
 */
class StarTransactions
{
    /**
     * @param StarTransaction[] $transactions The list of transactions
     */
    public function __construct(
        public array $transactions,
    ) {
    }
}
