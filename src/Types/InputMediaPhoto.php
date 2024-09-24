<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a photo to be sent.
 */
class InputMediaPhoto implements InputMedia
{
    /**
     * @param string               $type                     Type of the result, must be photo
     * @param string               $media                    File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
     * @param string|null          $caption                  Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @param string|null          $parse_mode               Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     * @param MessageEntity[]|null $caption_entities         Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null            $show_caption_above_media Optional. Pass True, if the caption must be shown above the message media
     * @param bool|null            $has_spoiler              Optional. Pass True if the photo needs to be covered with a spoiler animation
     */
    public function __construct(
        public string $type,
        public string $media,
        public ?string $caption,
        public ?string $parse_mode,
        public ?array $caption_entities,
        public ?bool $show_caption_above_media,
        public ?bool $has_spoiler,
    ) {
    }
}
