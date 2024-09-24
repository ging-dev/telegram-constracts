<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions
{
    /**
     * @param bool|null $can_send_messages         Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     * @param bool|null $can_send_audios           Optional. True, if the user is allowed to send audios
     * @param bool|null $can_send_documents        Optional. True, if the user is allowed to send documents
     * @param bool|null $can_send_photos           Optional. True, if the user is allowed to send photos
     * @param bool|null $can_send_videos           Optional. True, if the user is allowed to send videos
     * @param bool|null $can_send_video_notes      Optional. True, if the user is allowed to send video notes
     * @param bool|null $can_send_voice_notes      Optional. True, if the user is allowed to send voice notes
     * @param bool|null $can_send_polls            Optional. True, if the user is allowed to send polls
     * @param bool|null $can_send_other_messages   Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
     * @param bool|null $can_add_web_page_previews Optional. True, if the user is allowed to add web page previews to their messages
     * @param bool|null $can_change_info           Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
     * @param bool|null $can_invite_users          Optional. True, if the user is allowed to invite new users to the chat
     * @param bool|null $can_pin_messages          Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     * @param bool|null $can_manage_topics         Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
     */
    public function __construct(
        public ?bool $can_send_messages,
        public ?bool $can_send_audios,
        public ?bool $can_send_documents,
        public ?bool $can_send_photos,
        public ?bool $can_send_videos,
        public ?bool $can_send_video_notes,
        public ?bool $can_send_voice_notes,
        public ?bool $can_send_polls,
        public ?bool $can_send_other_messages,
        public ?bool $can_add_web_page_previews,
        public ?bool $can_change_info,
        public ?bool $can_invite_users,
        public ?bool $can_pin_messages,
        public ?bool $can_manage_topics,
    ) {
    }
}
