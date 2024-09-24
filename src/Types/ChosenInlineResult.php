<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 * Note: It is necessary to enable inline feedback via @BotFather in order to receive these objects in updates.
 */
class ChosenInlineResult
{
    /**
     * @param string        $result_id         The unique identifier for the result that was chosen
     * @param User          $from              The user that chose the result
     * @param Location|null $location          Optional. Sender location, only for bots that require user location
     * @param string|null   $inline_message_id Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
     * @param string        $query             The query that was used to obtain the result
     */
    public function __construct(
        public string $result_id,
        public User $from,
        public ?Location $location,
        public ?string $inline_message_id,
        public string $query,
    ) {
    }
}
