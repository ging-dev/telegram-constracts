<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes a transaction with a user.
 */
class TransactionPartnerUser implements TransactionPartner
{
    /**
     * @param string           $type               Type of the transaction partner, always "user"
     * @param User             $user               Information about the user
     * @param string|null      $invoice_payload    Optional. Bot-specified invoice payload
     * @param PaidMedia[]|null $paid_media         Optional. Information about the paid media bought by the user
     * @param string|null      $paid_media_payload Optional. Bot-specified paid media payload
     */
    public function __construct(
        public string $type,
        public User $user,
        public ?string $invoice_payload,
        public ?array $paid_media,
        public ?string $paid_media_payload,
    ) {
    }
}
