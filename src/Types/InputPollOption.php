<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object contains information about one answer option in a poll to be sent.
 */
class InputPollOption
{
    /**
     * @param string               $text            Option text, 1-100 characters
     * @param string|null          $text_parse_mode Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed
     * @param MessageEntity[]|null $text_entities   Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode
     */
    public function __construct(
        public string $text,
        public ?string $text_parse_mode,
        public ?array $text_entities,
    ) {
    }
}
