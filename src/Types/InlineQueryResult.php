<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 * - InlineQueryResultCachedAudio
 * - InlineQueryResultCachedDocument
 * - InlineQueryResultCachedGif
 * - InlineQueryResultCachedMpeg4Gif
 * - InlineQueryResultCachedPhoto
 * - InlineQueryResultCachedSticker
 * - InlineQueryResultCachedVideo
 * - InlineQueryResultCachedVoice
 * - InlineQueryResultArticle
 * - InlineQueryResultAudio
 * - InlineQueryResultContact
 * - InlineQueryResultGame
 * - InlineQueryResultDocument
 * - InlineQueryResultGif
 * - InlineQueryResultLocation
 * - InlineQueryResultMpeg4Gif
 * - InlineQueryResultPhoto
 * - InlineQueryResultVenue
 * - InlineQueryResultVideo
 * - InlineQueryResultVoice
 * Note: All URLs passed in inline query results will be available to end users and therefore must be assumed to be public.
 */
#[\Symfony\Component\Serializer\Attribute\DiscriminatorMap(
    typeProperty: 'type',
    mapping: [
        'article' => InlineQueryResultArticle::class,
        'photo' => InlineQueryResultCachedPhoto::class,
        'gif' => InlineQueryResultCachedGif::class,
        'mpeg4_gif' => InlineQueryResultCachedMpeg4Gif::class,
        'video' => InlineQueryResultCachedVideo::class,
        'audio' => InlineQueryResultCachedAudio::class,
        'voice' => InlineQueryResultCachedVoice::class,
        'document' => InlineQueryResultCachedDocument::class,
        'location' => InlineQueryResultLocation::class,
        'venue' => InlineQueryResultVenue::class,
        'contact' => InlineQueryResultContact::class,
        'game' => InlineQueryResultGame::class,
        'sticker' => InlineQueryResultCachedSticker::class,
    ],
)]
interface InlineQueryResult
{
}
