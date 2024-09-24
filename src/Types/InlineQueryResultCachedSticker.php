<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 */
class InlineQueryResultCachedSticker implements InlineQueryResult
{
    /**
     * @param string                    $type                  Type of the result, must be sticker
     * @param string                    $id                    Unique identifier for this result, 1-64 bytes
     * @param string                    $sticker_file_id       A valid file identifier of the sticker
     * @param InlineKeyboardMarkup|null $reply_markup          Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $input_message_content Optional. Content of the message to be sent instead of the sticker
     */
    public function __construct(
        public string $type,
        public string $id,
        public string $sticker_file_id,
        public ?InlineKeyboardMarkup $reply_markup,
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
