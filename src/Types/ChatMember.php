<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 * - ChatMemberOwner
 * - ChatMemberAdministrator
 * - ChatMemberMember
 * - ChatMemberRestricted
 * - ChatMemberLeft
 * - ChatMemberBanned
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'status',
    mapping: [
        'creator' => ChatMemberOwner::class,
        'administrator' => ChatMemberAdministrator::class,
        'member' => ChatMemberMember::class,
        'restricted' => ChatMemberRestricted::class,
        'left' => ChatMemberLeft::class,
        'kicked' => ChatMemberBanned::class,
    ],
)]
interface ChatMember
{
}
