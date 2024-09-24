<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The paid media is a video.
 */
class PaidMediaVideo implements PaidMedia
{
    /**
     * @param string $type  Type of the paid media, always "video"
     * @param Video  $video The video
     */
    public function __construct(
        public string $type,
        public Video $video,
    ) {
    }
}
