<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 */
class ExternalReplyInfo
{
    /**
     * @param MessageOrigin           $origin               Origin of the message replied to by the given message
     * @param Chat|null               $chat                 Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     * @param int|null                $message_id           Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
     * @param LinkPreviewOptions|null $link_preview_options Optional. Options used for link preview generation for the original message, if it is a text message
     * @param Animation|null          $animation            Optional. Message is an animation, information about the animation
     * @param Audio|null              $audio                Optional. Message is an audio file, information about the file
     * @param Document|null           $document             Optional. Message is a general file, information about the file
     * @param PaidMediaInfo|null      $paid_media           Optional. Message contains paid media; information about the paid media
     * @param PhotoSize[]|null        $photo                Optional. Message is a photo, available sizes of the photo
     * @param Sticker|null            $sticker              Optional. Message is a sticker, information about the sticker
     * @param Story|null              $story                Optional. Message is a forwarded story
     * @param Video|null              $video                Optional. Message is a video, information about the video
     * @param VideoNote|null          $video_note           Optional. Message is a video note, information about the video message
     * @param Voice|null              $voice                Optional. Message is a voice message, information about the file
     * @param bool|null               $has_media_spoiler    Optional. True, if the message media is covered by a spoiler animation
     * @param Contact|null            $contact              Optional. Message is a shared contact, information about the contact
     * @param Dice|null               $dice                 Optional. Message is a dice with random value
     * @param Game|null               $game                 Optional. Message is a game, information about the game. More about games: https://core.telegram.org/bots/api#games
     * @param Giveaway|null           $giveaway             Optional. Message is a scheduled giveaway, information about the giveaway
     * @param GiveawayWinners|null    $giveaway_winners     Optional. A giveaway with public winners was completed
     * @param Invoice|null            $invoice              Optional. Message is an invoice for a payment, information about the invoice. More about payments: https://core.telegram.org/bots/api#payments
     * @param Location|null           $location             Optional. Message is a shared location, information about the location
     * @param Poll|null               $poll                 Optional. Message is a native poll, information about the poll
     * @param Venue|null              $venue                Optional. Message is a venue, information about the venue
     */
    public function __construct(
        public MessageOrigin $origin,
        public ?Chat $chat,
        public ?int $message_id,
        public ?LinkPreviewOptions $link_preview_options,
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
        public ?bool $has_media_spoiler,
        public ?Contact $contact,
        public ?Dice $dice,
        public ?Game $game,
        public ?Giveaway $giveaway,
        public ?GiveawayWinners $giveaway_winners,
        public ?Invoice $invoice,
        public ?Location $location,
        public ?Poll $poll,
        public ?Venue $venue,
    ) {
    }
}
