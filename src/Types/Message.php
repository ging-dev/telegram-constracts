<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a message.
 */
class Message
{
    /**
     * @param int                                $message_id                        Unique message identifier inside this chat
     * @param int|null                           $message_thread_id                 Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
     * @param User|null                          $from                              Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats
     * @param Chat|null                          $sender_chat                       Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
     * @param int|null                           $sender_boost_count                Optional. If the sender of the message boosted the chat, the number of boosts added by the user
     * @param User|null                          $sender_business_bot               Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
     * @param int                                $date                              Date the message was sent in Unix time. It is always a positive number, representing a valid date.
     * @param string|null                        $business_connection_id            Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
     * @param Chat                               $chat                              Chat the message belongs to
     * @param MessageOrigin|null                 $forward_origin                    Optional. Information about the original message for forwarded messages
     * @param bool|null                          $is_topic_message                  Optional. True, if the message is sent to a forum topic
     * @param bool|null                          $is_automatic_forward              Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
     * @param Message|null                       $reply_to_message                  Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param ExternalReplyInfo|null             $external_reply                    Optional. Information about the message that is being replied to, which may come from another chat or forum topic
     * @param TextQuote|null                     $quote                             Optional. For replies that quote part of the original message, the quoted part of the message
     * @param Story|null                         $reply_to_story                    Optional. For replies to a story, the original story
     * @param User|null                          $via_bot                           Optional. Bot through which the message was sent
     * @param int|null                           $edit_date                         Optional. Date the message was last edited in Unix time
     * @param bool|null                          $has_protected_content             Optional. True, if the message can't be forwarded
     * @param bool|null                          $is_from_offline                   Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
     * @param string|null                        $media_group_id                    Optional. The unique identifier of a media message group this message belongs to
     * @param string|null                        $author_signature                  Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     * @param string|null                        $text                              Optional. For text messages, the actual UTF-8 text of the message
     * @param MessageEntity[]|null               $entities                          Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @param LinkPreviewOptions|null            $link_preview_options              Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
     * @param string|null                        $effect_id                         Optional. Unique identifier of the message effect added to the message
     * @param Animation|null                     $animation                         Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
     * @param Audio|null                         $audio                             Optional. Message is an audio file, information about the file
     * @param Document|null                      $document                          Optional. Message is a general file, information about the file
     * @param PaidMediaInfo|null                 $paid_media                        Optional. Message contains paid media; information about the paid media
     * @param PhotoSize[]|null                   $photo                             Optional. Message is a photo, available sizes of the photo
     * @param Sticker|null                       $sticker                           Optional. Message is a sticker, information about the sticker
     * @param Story|null                         $story                             Optional. Message is a forwarded story
     * @param Video|null                         $video                             Optional. Message is a video, information about the video
     * @param VideoNote|null                     $video_note                        Optional. Message is a video note, information about the video message
     * @param Voice|null                         $voice                             Optional. Message is a voice message, information about the file
     * @param string|null                        $caption                           Optional. Caption for the animation, audio, document, paid media, photo, video or voice
     * @param MessageEntity[]|null               $caption_entities                  Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     * @param bool|null                          $show_caption_above_media          Optional. True, if the caption must be shown above the message media
     * @param bool|null                          $has_media_spoiler                 Optional. True, if the message media is covered by a spoiler animation
     * @param Contact|null                       $contact                           Optional. Message is a shared contact, information about the contact
     * @param Dice|null                          $dice                              Optional. Message is a dice with random value
     * @param Game|null                          $game                              Optional. Message is a game, information about the game. More about games: https://core.telegram.org/bots/api#games
     * @param Poll|null                          $poll                              Optional. Message is a native poll, information about the poll
     * @param Venue|null                         $venue                             Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
     * @param Location|null                      $location                          Optional. Message is a shared location, information about the location
     * @param User[]|null                        $new_chat_members                  Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     * @param User|null                          $left_chat_member                  Optional. A member was removed from the group, information about them (this member may be the bot itself)
     * @param string|null                        $new_chat_title                    Optional. A chat title was changed to this value
     * @param PhotoSize[]|null                   $new_chat_photo                    Optional. A chat photo was change to this value
     * @param bool|null                          $delete_chat_photo                 Optional. Service message: the chat photo was deleted
     * @param bool|null                          $group_chat_created                Optional. Service message: the group has been created
     * @param bool|null                          $supergroup_chat_created           Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     * @param bool|null                          $channel_chat_created              Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     * @param MessageAutoDeleteTimerChanged|null $message_auto_delete_timer_changed Optional. Service message: auto-delete timer settings changed in the chat
     * @param int|null                           $migrate_to_chat_id                Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int|null                           $migrate_from_chat_id              Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param MaybeInaccessibleMessage|null      $pinned_message                    Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param Invoice|null                       $invoice                           Optional. Message is an invoice for a payment, information about the invoice. More about payments: https://core.telegram.org/bots/api#payments
     * @param SuccessfulPayment|null             $successful_payment                Optional. Message is a service message about a successful payment, information about the payment. More about payments: https://core.telegram.org/bots/api#payments
     * @param RefundedPayment|null               $refunded_payment                  Optional. Message is a service message about a refunded payment, information about the payment. More about payments: https://core.telegram.org/bots/api#payments
     * @param UsersShared|null                   $users_shared                      Optional. Service message: users were shared with the bot
     * @param ChatShared|null                    $chat_shared                       Optional. Service message: a chat was shared with the bot
     * @param string|null                        $connected_website                 Optional. The domain name of the website on which the user has logged in. More about Telegram Login: https://core.telegram.org/widgets/login
     * @param WriteAccessAllowed|null            $write_access_allowed              Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
     * @param PassportData|null                  $passport_data                     Optional. Telegram Passport data
     * @param ProximityAlertTriggered|null       $proximity_alert_triggered         Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     * @param ChatBoostAdded|null                $boost_added                       Optional. Service message: user boosted the chat
     * @param ChatBackground|null                $chat_background_set               Optional. Service message: chat background set
     * @param ForumTopicCreated|null             $forum_topic_created               Optional. Service message: forum topic created
     * @param ForumTopicEdited|null              $forum_topic_edited                Optional. Service message: forum topic edited
     * @param ForumTopicClosed|null              $forum_topic_closed                Optional. Service message: forum topic closed
     * @param ForumTopicReopened|null            $forum_topic_reopened              Optional. Service message: forum topic reopened
     * @param GeneralForumTopicHidden|null       $general_forum_topic_hidden        Optional. Service message: the 'General' forum topic hidden
     * @param GeneralForumTopicUnhidden|null     $general_forum_topic_unhidden      Optional. Service message: the 'General' forum topic unhidden
     * @param GiveawayCreated|null               $giveaway_created                  Optional. Service message: a scheduled giveaway was created
     * @param Giveaway|null                      $giveaway                          Optional. The message is a scheduled giveaway message
     * @param GiveawayWinners|null               $giveaway_winners                  Optional. A giveaway with public winners was completed
     * @param GiveawayCompleted|null             $giveaway_completed                Optional. Service message: a giveaway without public winners was completed
     * @param VideoChatScheduled|null            $video_chat_scheduled              Optional. Service message: video chat scheduled
     * @param VideoChatStarted|null              $video_chat_started                Optional. Service message: video chat started
     * @param VideoChatEnded|null                $video_chat_ended                  Optional. Service message: video chat ended
     * @param VideoChatParticipantsInvited|null  $video_chat_participants_invited   Optional. Service message: new participants invited to a video chat
     * @param WebAppData|null                    $web_app_data                      Optional. Service message: data sent by a Web App
     * @param InlineKeyboardMarkup|null          $reply_markup                      Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public function __construct(
        public int $message_id,
        public ?int $message_thread_id,
        public ?User $from,
        public ?Chat $sender_chat,
        public ?int $sender_boost_count,
        public ?User $sender_business_bot,
        public int $date,
        public ?string $business_connection_id,
        public Chat $chat,
        public ?MessageOrigin $forward_origin,
        public ?bool $is_topic_message,
        public ?bool $is_automatic_forward,
        public ?Message $reply_to_message,
        public ?ExternalReplyInfo $external_reply,
        public ?TextQuote $quote,
        public ?Story $reply_to_story,
        public ?User $via_bot,
        public ?int $edit_date,
        public ?bool $has_protected_content,
        public ?bool $is_from_offline,
        public ?string $media_group_id,
        public ?string $author_signature,
        public ?string $text,
        public ?array $entities,
        public ?LinkPreviewOptions $link_preview_options,
        public ?string $effect_id,
        public ?Animation $animation,
        public ?Audio $audio,
        public ?Document $document,
        public ?PaidMediaInfo $paid_media,
        public ?array $photo,
        public ?Sticker $sticker,
        public ?Story $story,
        public ?Video $video,
        public ?VideoNote $video_note,
        public ?Voice $voice,
        public ?string $caption,
        public ?array $caption_entities,
        public ?bool $show_caption_above_media,
        public ?bool $has_media_spoiler,
        public ?Contact $contact,
        public ?Dice $dice,
        public ?Game $game,
        public ?Poll $poll,
        public ?Venue $venue,
        public ?Location $location,
        public ?array $new_chat_members,
        public ?User $left_chat_member,
        public ?string $new_chat_title,
        public ?array $new_chat_photo,
        public ?bool $delete_chat_photo,
        public ?bool $group_chat_created,
        public ?bool $supergroup_chat_created,
        public ?bool $channel_chat_created,
        public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed,
        public ?int $migrate_to_chat_id,
        public ?int $migrate_from_chat_id,
        public ?MaybeInaccessibleMessage $pinned_message,
        public ?Invoice $invoice,
        public ?SuccessfulPayment $successful_payment,
        public ?RefundedPayment $refunded_payment,
        public ?UsersShared $users_shared,
        public ?ChatShared $chat_shared,
        public ?string $connected_website,
        public ?WriteAccessAllowed $write_access_allowed,
        public ?PassportData $passport_data,
        public ?ProximityAlertTriggered $proximity_alert_triggered,
        public ?ChatBoostAdded $boost_added,
        public ?ChatBackground $chat_background_set,
        public ?ForumTopicCreated $forum_topic_created,
        public ?ForumTopicEdited $forum_topic_edited,
        public ?ForumTopicClosed $forum_topic_closed,
        public ?ForumTopicReopened $forum_topic_reopened,
        public ?GeneralForumTopicHidden $general_forum_topic_hidden,
        public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden,
        public ?GiveawayCreated $giveaway_created,
        public ?Giveaway $giveaway,
        public ?GiveawayWinners $giveaway_winners,
        public ?GiveawayCompleted $giveaway_completed,
        public ?VideoChatScheduled $video_chat_scheduled,
        public ?VideoChatStarted $video_chat_started,
        public ?VideoChatEnded $video_chat_ended,
        public ?VideoChatParticipantsInvited $video_chat_participants_invited,
        public ?WebAppData $web_app_data,
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
