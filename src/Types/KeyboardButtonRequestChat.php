<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. More about requesting chats: https://core.telegram.org/bots/features#chat-and-user-selection.
 */
class KeyboardButtonRequestChat
{
    /**
     * @param int                          $request_id                Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
     * @param bool                         $chat_is_channel           pass True to request a channel chat, pass False to request a group or a supergroup chat
     * @param bool|null                    $chat_is_forum             Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
     * @param bool|null                    $chat_has_username         Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
     * @param bool|null                    $chat_is_created           Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     * @param ChatAdministratorRights|null $user_administrator_rights Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
     * @param ChatAdministratorRights|null $bot_administrator_rights  Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
     * @param bool|null                    $bot_is_member             Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     * @param bool|null                    $request_title             Optional. Pass True to request the chat's title
     * @param bool|null                    $request_username          Optional. Pass True to request the chat's username
     * @param bool|null                    $request_photo             Optional. Pass True to request the chat's photo
     */
    public function __construct(
        public int $request_id,
        public bool $chat_is_channel,
        public ?bool $chat_is_forum,
        public ?bool $chat_has_username,
        public ?bool $chat_is_created,
        public ?ChatAdministratorRights $user_administrator_rights,
        public ?ChatAdministratorRights $bot_administrator_rights,
        public ?bool $bot_is_member,
        public ?bool $request_title,
        public ?bool $request_username,
        public ?bool $request_photo,
    ) {
    }
}
