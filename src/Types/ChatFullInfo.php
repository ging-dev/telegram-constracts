<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains full information about a chat.
 */
class ChatFullInfo
{
    /**
     * @param int                       $id                                      Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string                    $type                                    Type of the chat, can be either "private", "group", "supergroup" or "channel"
     * @param string|null               $title                                   Optional. Title, for supergroups, channels and group chats
     * @param string|null               $username                                Optional. Username, for private chats, supergroups and channels if available
     * @param string|null               $first_name                              Optional. First name of the other party in a private chat
     * @param string|null               $last_name                               Optional. Last name of the other party in a private chat
     * @param bool|null                 $is_forum                                Optional. True, if the supergroup chat is a forum (has topics enabled)
     * @param int                       $accent_color_id                         Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
     * @param int                       $max_reaction_count                      The maximum number of reactions that can be set on a message in the chat
     * @param ChatPhoto|null            $photo                                   Optional. Chat photo
     * @param string[]|null             $active_usernames                        Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
     * @param Birthdate|null            $birthdate                               Optional. For private chats, the date of birth of the user
     * @param BusinessIntro|null        $business_intro                          Optional. For private chats with business accounts, the intro of the business
     * @param BusinessLocation|null     $business_location                       Optional. For private chats with business accounts, the location of the business
     * @param BusinessOpeningHours|null $business_opening_hours                  Optional. For private chats with business accounts, the opening hours of the business
     * @param Chat|null                 $personal_chat                           Optional. For private chats, the personal channel of the user
     * @param ReactionType[]|null       $available_reactions                     Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
     * @param string|null               $background_custom_emoji_id              Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
     * @param int|null                  $profile_accent_color_id                 Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
     * @param string|null               $profile_background_custom_emoji_id      Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
     * @param string|null               $emoji_status_custom_emoji_id            Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
     * @param int|null                  $emoji_status_expiration_date            Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
     * @param string|null               $bio                                     Optional. Bio of the other party in a private chat
     * @param bool|null                 $has_private_forwards                    Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
     * @param bool|null                 $has_restricted_voice_and_video_messages Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
     * @param bool|null                 $join_to_send_messages                   Optional. True, if users need to join the supergroup before they can send messages
     * @param bool|null                 $join_by_request                         Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
     * @param string|null               $description                             Optional. Description, for groups, supergroups and channel chats
     * @param string|null               $invite_link                             Optional. Primary invite link, for groups, supergroups and channel chats
     * @param Message|null              $pinned_message                          Optional. The most recent pinned message (by sending date)
     * @param ChatPermissions|null      $permissions                             Optional. Default chat member permissions, for groups and supergroups
     * @param bool|null                 $can_send_paid_media                     Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
     * @param int|null                  $slow_mode_delay                         Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
     * @param int|null                  $unrestrict_boost_count                  Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
     * @param int|null                  $message_auto_delete_time                Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
     * @param bool|null                 $has_aggressive_anti_spam_enabled        Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
     * @param bool|null                 $has_hidden_members                      Optional. True, if non-administrators can only get the list of bots and administrators in the chat
     * @param bool|null                 $has_protected_content                   Optional. True, if messages from the chat can't be forwarded to other chats
     * @param bool|null                 $has_visible_history                     Optional. True, if new chat members will have access to old messages; available only to chat administrators
     * @param string|null               $sticker_set_name                        Optional. For supergroups, name of the group sticker set
     * @param bool|null                 $can_set_sticker_set                     Optional. True, if the bot can change the group sticker set
     * @param string|null               $custom_emoji_sticker_set_name           Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
     * @param int|null                  $linked_chat_id                          Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     * @param ChatLocation|null         $location                                Optional. For supergroups, the location to which the supergroup is connected
     */
    public function __construct(
        public int $id,
        public string $type,
        public ?string $title,
        public ?string $username,
        public ?string $first_name,
        public ?string $last_name,
        public ?bool $is_forum,
        public int $accent_color_id,
        public int $max_reaction_count,
        public ?ChatPhoto $photo,
        public ?array $active_usernames,
        public ?Birthdate $birthdate,
        public ?BusinessIntro $business_intro,
        public ?BusinessLocation $business_location,
        public ?BusinessOpeningHours $business_opening_hours,
        public ?Chat $personal_chat,
        public ?array $available_reactions,
        public ?string $background_custom_emoji_id,
        public ?int $profile_accent_color_id,
        public ?string $profile_background_custom_emoji_id,
        public ?string $emoji_status_custom_emoji_id,
        public ?int $emoji_status_expiration_date,
        public ?string $bio,
        public ?bool $has_private_forwards,
        public ?bool $has_restricted_voice_and_video_messages,
        public ?bool $join_to_send_messages,
        public ?bool $join_by_request,
        public ?string $description,
        public ?string $invite_link,
        public ?Message $pinned_message,
        public ?ChatPermissions $permissions,
        public ?bool $can_send_paid_media,
        public ?int $slow_mode_delay,
        public ?int $unrestrict_boost_count,
        public ?int $message_auto_delete_time,
        public ?bool $has_aggressive_anti_spam_enabled,
        public ?bool $has_hidden_members,
        public ?bool $has_protected_content,
        public ?bool $has_visible_history,
        public ?string $sticker_set_name,
        public ?bool $can_set_sticker_set,
        public ?string $custom_emoji_sticker_set_name,
        public ?int $linked_chat_id,
        public ?ChatLocation $location,
    ) {
    }
}
