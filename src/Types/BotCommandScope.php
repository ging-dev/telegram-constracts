<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 * - BotCommandScopeDefault
 * - BotCommandScopeAllPrivateChats
 * - BotCommandScopeAllGroupChats
 * - BotCommandScopeAllChatAdministrators
 * - BotCommandScopeChat
 * - BotCommandScopeChatAdministrators
 * - BotCommandScopeChatMember
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'default' => BotCommandScopeDefault::class,
        'all_private_chats' => BotCommandScopeAllPrivateChats::class,
        'all_group_chats' => BotCommandScopeAllGroupChats::class,
        'all_chat_administrators' => BotCommandScopeAllChatAdministrators::class,
        'chat' => BotCommandScopeChat::class,
        'chat_administrators' => BotCommandScopeChatAdministrators::class,
        'chat_member' => BotCommandScopeChatMember::class,
    ],
)]
interface BotCommandScope
{
}
