<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a chat member that has some additional privileges.
 */
class ChatMemberAdministrator implements ChatMember
{
    /**
     * @param string      $status                 The member's status in the chat, always "administrator"
     * @param User        $user                   Information about the user
     * @param bool        $can_be_edited          True, if the bot is allowed to edit administrator privileges of that user
     * @param bool        $is_anonymous           True, if the user's presence in the chat is hidden
     * @param bool        $can_manage_chat        True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
     * @param bool        $can_delete_messages    True, if the administrator can delete messages of other users
     * @param bool        $can_manage_video_chats True, if the administrator can manage video chats
     * @param bool        $can_restrict_members   True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     * @param bool        $can_promote_members    True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     * @param bool        $can_change_info        True, if the user is allowed to change the chat title, photo and other settings
     * @param bool        $can_invite_users       True, if the user is allowed to invite new users to the chat
     * @param bool        $can_post_stories       True, if the administrator can post stories to the chat
     * @param bool        $can_edit_stories       True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     * @param bool        $can_delete_stories     True, if the administrator can delete stories posted by other users
     * @param bool|null   $can_post_messages      Optional. True, if the administrator can post messages in the channel, or access channel statistics; for channels only
     * @param bool|null   $can_edit_messages      Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
     * @param bool|null   $can_pin_messages       Optional. True, if the user is allowed to pin messages; for groups and supergroups only
     * @param bool|null   $can_manage_topics      Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     * @param string|null $custom_title           Optional. Custom title for this user
     */
    public function __construct(
        public string $status,
        public User $user,
        public bool $can_be_edited,
        public bool $is_anonymous,
        public bool $can_manage_chat,
        public bool $can_delete_messages,
        public bool $can_manage_video_chats,
        public bool $can_restrict_members,
        public bool $can_promote_members,
        public bool $can_change_info,
        public bool $can_invite_users,
        public bool $can_post_stories,
        public bool $can_edit_stories,
        public bool $can_delete_stories,
        public ?bool $can_post_messages,
        public ?bool $can_edit_messages,
        public ?bool $can_pin_messages,
        public ?bool $can_manage_topics,
        public ?string $custom_title,
    ) {
    }
}
