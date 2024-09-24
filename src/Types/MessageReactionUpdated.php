<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a change of a reaction on a message performed by a user.
 */
class MessageReactionUpdated
{
    /**
     * @param Chat           $chat         The chat containing the message the user reacted to
     * @param int            $message_id   Unique identifier of the message inside the chat
     * @param User|null      $user         Optional. The user that changed the reaction, if the user isn't anonymous
     * @param Chat|null      $actor_chat   Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
     * @param int            $date         Date of the change in Unix time
     * @param ReactionType[] $old_reaction Previous list of reaction types that were set by the user
     * @param ReactionType[] $new_reaction New list of reaction types that have been set by the user
     */
    public function __construct(
        public Chat $chat,
        public int $message_id,
        public ?User $user,
        public ?Chat $actor_chat,
        public int $date,
        public array $old_reaction,
        public array $new_reaction,
    ) {
    }
}
