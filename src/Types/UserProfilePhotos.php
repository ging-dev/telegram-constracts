<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos
{
    /**
     * @param int           $total_count Total number of profile pictures the target user has
     * @param PhotoSize[][] $photos      Requested profile pictures (in up to 4 sizes each)
     */
    public function __construct(
        public int $total_count,
        public array $photos,
    ) {
    }
}
