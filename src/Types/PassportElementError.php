<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 * - PassportElementErrorDataField
 * - PassportElementErrorFrontSide
 * - PassportElementErrorReverseSide
 * - PassportElementErrorSelfie
 * - PassportElementErrorFile
 * - PassportElementErrorFiles
 * - PassportElementErrorTranslationFile
 * - PassportElementErrorTranslationFiles
 * - PassportElementErrorUnspecified
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'source',
    mapping: [
        'data' => PassportElementErrorDataField::class,
        'front_side' => PassportElementErrorFrontSide::class,
        'reverse_side' => PassportElementErrorReverseSide::class,
        'selfie' => PassportElementErrorSelfie::class,
        'file' => PassportElementErrorFile::class,
        'files' => PassportElementErrorFiles::class,
        'translation_file' => PassportElementErrorTranslationFile::class,
        'translation_files' => PassportElementErrorTranslationFiles::class,
        'unspecified' => PassportElementErrorUnspecified::class,
    ],
)]
interface PassportElementError
{
}
