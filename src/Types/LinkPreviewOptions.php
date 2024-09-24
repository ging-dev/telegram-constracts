<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes the options used for link preview generation.
 */
class LinkPreviewOptions
{
    /**
     * @param bool|null   $is_disabled        Optional. True, if the link preview is disabled
     * @param string|null $url                Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used
     * @param bool|null   $prefer_small_media Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     * @param bool|null   $prefer_large_media Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     * @param bool|null   $show_above_text    Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
     */
    public function __construct(
        public ?bool $is_disabled,
        public ?string $url,
        public ?bool $prefer_small_media,
        public ?bool $prefer_large_media,
        public ?bool $show_above_text,
    ) {
    }
}
