<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
class InlineQueryResultContact implements InlineQueryResult
{
    /**
     * @param string                    $type                  Type of the result, must be contact
     * @param string                    $id                    Unique identifier for this result, 1-64 Bytes
     * @param string                    $phone_number          Contact's phone number
     * @param string                    $first_name            Contact's first name
     * @param string|null               $last_name             Optional. Contact's last name
     * @param string|null               $vcard                 Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     * @param InlineKeyboardMarkup|null $reply_markup          Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content Optional. Content of the message to be sent instead of the contact
     * @param string|null               $thumbnail_url         Optional. Url of the thumbnail for the result
     * @param int|null                  $thumbnail_width       Optional. Thumbnail width
     * @param int|null                  $thumbnail_height      Optional. Thumbnail height
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $phone_number,
        public string $first_name,
        public ?string $last_name,
        public ?string $vcard,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
        public ?string $thumbnail_url,
        public ?int $thumbnail_width,
        public ?int $thumbnail_height,
    ) {
    }
}
