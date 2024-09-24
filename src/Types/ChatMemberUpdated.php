<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated
{
    /**
     * @param Chat                $chat                        Chat the user belongs to
     * @param User                $from                        Performer of the action, which resulted in the change
     * @param int                 $date                        Date the change was done in Unix time
     * @param ChatMember          $old_chat_member             Previous information about the chat member
     * @param ChatMember          $new_chat_member             New information about the chat member
     * @param ChatInviteLink|null $invite_link                 Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     * @param bool|null           $via_join_request            Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
     * @param bool|null           $via_chat_folder_invite_link Optional. True, if the user joined the chat via a chat folder invite link
     */
    public function __construct(
        public Chat $chat,
        public User $from,
        public int $date,
        public ChatMember $old_chat_member,
        public ChatMember $new_chat_member,
        public ?ChatInviteLink $invite_link,
        public ?bool $via_join_request,
        public ?bool $via_chat_folder_invite_link,
    ) {
    }
}
