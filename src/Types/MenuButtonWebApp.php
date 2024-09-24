<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a menu button, which launches a Web App.
 */
class MenuButtonWebApp implements MenuButton
{
    /**
     * @param string     $type    Type of the button, must be web_app
     * @param string     $text    Text on the button
     * @param WebAppInfo $web_app Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Alternatively, a t.me link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
     */
    public function __construct(
        public string $type,
        public string $text,
        public WebAppInfo $web_app,
    ) {
    }
}
