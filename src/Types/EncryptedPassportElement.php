<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 */
class EncryptedPassportElement
{
    /**
     * @param string              $type         Element type. One of "personal_details", "passport", "driver_license", "identity_card", "internal_passport", "address", "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration", "phone_number", "email".
     * @param string|null         $data         Optional. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for "personal_details", "passport", "driver_license", "identity_card", "internal_passport" and "address" types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param string|null         $phone_number Optional. User's verified phone number; available only for "phone_number" type
     * @param string|null         $email        Optional. User's verified email address; available only for "email" type
     * @param PassportFile[]|null $files        Optional. Array of encrypted files with documents provided by the user; available only for "utility_bill", "bank_statement", "rental_agreement", "passport_registration" and "temporary_registration" types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFile|null   $front_side   Optional. Encrypted file with the front side of the document, provided by the user; available only for "passport", "driver_license", "identity_card" and "internal_passport". The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFile|null   $reverse_side Optional. Encrypted file with the reverse side of the document, provided by the user; available only for "driver_license" and "identity_card". The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFile|null   $selfie       Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for "passport", "driver_license", "identity_card" and "internal_passport". The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFile[]|null $translation  Optional. Array of encrypted files with translated versions of documents provided by the user; available if requested for "passport", "driver_license", "identity_card", "internal_passport", "utility_bill", "bank_statement", "rental_agreement", "passport_registration" and "temporary_registration" types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param string              $hash         Base64-encoded element hash for using in PassportElementErrorUnspecified
     */
    public function __construct(
        public string $type,
        public ?string $data,
        public ?string $phone_number,
        public ?string $email,
        public ?array $files,
        public ?PassportFile $front_side,
        public ?PassportFile $reverse_side,
        public ?PassportFile $selfie,
        public ?array $translation,
        public string $hash,
    ) {
    }
}
