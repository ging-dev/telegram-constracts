<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
class Audio
{
    /**
     * @param string         $file_id        Identifier for this file, which can be used to download or reuse the file
     * @param string         $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int            $duration       Duration of the audio in seconds as defined by the sender
     * @param string|null    $performer      Optional. Performer of the audio as defined by the sender or by audio tags
     * @param string|null    $title          Optional. Title of the audio as defined by the sender or by audio tags
     * @param string|null    $file_name      Optional. Original filename as defined by the sender
     * @param string|null    $mime_type      Optional. MIME type of the file as defined by the sender
     * @param int|null       $file_size      Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     * @param PhotoSize|null $thumbnail      Optional. Thumbnail of the album cover to which the music file belongs
     */
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public int $duration,
        public ?string $performer,
        public ?string $title,
        public ?string $file_name,
        public ?string $mime_type,
        public ?int $file_size,
        public ?PhotoSize $thumbnail,
    ) {
    }
}
