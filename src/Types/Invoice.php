<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains basic information about an invoice.
 */
class Invoice
{
    /**
     * @param string $title           Product name
     * @param string $description     Product description
     * @param string $start_parameter Unique bot deep-linking parameter that can be used to generate this invoice
     * @param string $currency        Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars
     * @param int    $total_amount    Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public function __construct(
        public string $title,
        public string $description,
        public string $start_parameter,
        public string $currency,
        public int $total_amount,
    ) {
    }
}
