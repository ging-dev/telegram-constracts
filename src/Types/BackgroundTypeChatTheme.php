<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The background is taken directly from a built-in chat theme.
 */
class BackgroundTypeChatTheme implements BackgroundType
{
    /**
     * @param string $type       Type of the background, always "chat_theme"
     * @param string $theme_name Name of the chat theme, which is usually an emoji
     */
    public function __construct(
        public string $type,
        public string $theme_name,
    ) {
    }
}
