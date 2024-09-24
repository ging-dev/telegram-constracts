<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains basic information about a refunded payment.
 */
class RefundedPayment
{
    /**
     * @param string      $currency                   Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars. Currently, always "XTR"
     * @param int         $total_amount               Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string      $invoice_payload            Bot-specified invoice payload
     * @param string      $telegram_payment_charge_id Telegram payment identifier
     * @param string|null $provider_payment_charge_id Optional. Provider payment identifier
     */
    public function __construct(
        public string $currency,
        public int $total_amount,
        public string $invoice_payload,
        public string $telegram_payment_charge_id,
        public ?string $provider_payment_charge_id,
    ) {
    }
}
