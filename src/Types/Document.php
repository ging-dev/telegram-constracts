<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
class Document
{
    /**
     * @param string         $file_id        Identifier for this file, which can be used to download or reuse the file
     * @param string         $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param PhotoSize|null $thumbnail      Optional. Document thumbnail as defined by the sender
     * @param string|null    $file_name      Optional. Original filename as defined by the sender
     * @param string|null    $mime_type      Optional. MIME type of the file as defined by the sender
     * @param int|null       $file_size      Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public ?PhotoSize $thumbnail,
        public ?string $file_name,
        public ?string $mime_type,
        public ?int $file_size,
    ) {
    }
}
