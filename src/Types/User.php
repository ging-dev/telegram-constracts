<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a Telegram user or bot.
 */
class User
{
    /**
     * @param int         $id                          Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param bool        $is_bot                      True, if this user is a bot
     * @param string      $first_name                  User's or bot's first name
     * @param string|null $last_name                   Optional. User's or bot's last name
     * @param string|null $username                    Optional. User's or bot's username
     * @param string|null $language_code               Optional. IETF language tag of the user's language
     * @param bool|null   $is_premium                  Optional. True, if this user is a Telegram Premium user
     * @param bool|null   $added_to_attachment_menu    Optional. True, if this user added the bot to the attachment menu
     * @param bool|null   $can_join_groups             Optional. True, if the bot can be invited to groups. Returned only in getMe.
     * @param bool|null   $can_read_all_group_messages Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     * @param bool|null   $supports_inline_queries     Optional. True, if the bot supports inline queries. Returned only in getMe.
     * @param bool|null   $can_connect_to_business     Optional. True, if the bot can be connected to a Telegram Business account to receive its messages. Returned only in getMe.
     * @param bool|null   $has_main_web_app            Optional. True, if the bot has a main Web App. Returned only in getMe.
     */
    public function __construct(
        public int $id,
        public bool $is_bot,
        public string $first_name,
        public ?string $last_name,
        public ?string $username,
        public ?string $language_code,
        public ?bool $is_premium,
        public ?bool $added_to_attachment_menu,
        public ?bool $can_join_groups,
        public ?bool $can_read_all_group_messages,
        public ?bool $supports_inline_queries,
        public ?bool $can_connect_to_business,
        public ?bool $has_main_web_app,
    ) {
    }
}
