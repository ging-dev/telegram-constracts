<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents an incoming update.
 * At most one of the optional parameters can be present in any given update.
 */
class Update
{
    /**
     * @param int                              $update_id                 The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     * @param Message|null                     $message                   Optional. New incoming message of any kind - text, photo, sticker, etc.
     * @param Message|null                     $edited_message            Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param Message|null                     $channel_post              Optional. New incoming channel post of any kind - text, photo, sticker, etc.
     * @param Message|null                     $edited_channel_post       Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param BusinessConnection|null          $business_connection       Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
     * @param Message|null                     $business_message          Optional. New message from a connected business account
     * @param Message|null                     $edited_business_message   Optional. New version of a message from a connected business account
     * @param BusinessMessagesDeleted|null     $deleted_business_messages Optional. Messages were deleted from a connected business account
     * @param MessageReactionUpdated|null      $message_reaction          Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
     * @param MessageReactionCountUpdated|null $message_reaction_count    Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
     * @param InlineQuery|null                 $inline_query              Optional. New incoming inline query
     * @param ChosenInlineResult|null          $chosen_inline_result      Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     * @param CallbackQuery|null               $callback_query            Optional. New incoming callback query
     * @param ShippingQuery|null               $shipping_query            Optional. New incoming shipping query. Only for invoices with flexible price
     * @param PreCheckoutQuery|null            $pre_checkout_query        Optional. New incoming pre-checkout query. Contains full information about checkout
     * @param PaidMediaPurchased|null          $purchased_paid_media      Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
     * @param Poll|null                        $poll                      Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
     * @param PollAnswer|null                  $poll_answer               Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     * @param ChatMemberUpdated|null           $my_chat_member            Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     * @param ChatMemberUpdated|null           $chat_member               Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
     * @param ChatJoinRequest|null             $chat_join_request         Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
     * @param ChatBoostUpdated|null            $chat_boost                Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
     * @param ChatBoostRemoved|null            $removed_chat_boost        Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
     */
    public function __construct(
        public int $update_id,
        public ?Message $message,
        public ?Message $edited_message,
        public ?Message $channel_post,
        public ?Message $edited_channel_post,
        public ?BusinessConnection $business_connection,
        public ?Message $business_message,
        public ?Message $edited_business_message,
        public ?BusinessMessagesDeleted $deleted_business_messages,
        public ?MessageReactionUpdated $message_reaction,
        public ?MessageReactionCountUpdated $message_reaction_count,
        public ?InlineQuery $inline_query,
        public ?ChosenInlineResult $chosen_inline_result,
        public ?CallbackQuery $callback_query,
        public ?ShippingQuery $shipping_query,
        public ?PreCheckoutQuery $pre_checkout_query,
        public ?PaidMediaPurchased $purchased_paid_media,
        public ?Poll $poll,
        public ?PollAnswer $poll_answer,
        public ?ChatMemberUpdated $my_chat_member,
        public ?ChatMemberUpdated $chat_member,
        public ?ChatJoinRequest $chat_join_request,
        public ?ChatBoostUpdated $chat_boost,
        public ?ChatBoostRemoved $removed_chat_boost,
    ) {
    }
}
