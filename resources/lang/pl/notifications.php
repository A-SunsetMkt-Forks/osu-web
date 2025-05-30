<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'all_read' => 'Wszystkie powiadomienia przeczytane!',
    'delete' => 'Usuń :type',
    'loading' => 'Ładowanie nieodczytanych powiadomień...',
    'mark_read' => 'Wyczyść :type',
    'none' => 'Brak powiadomień',
    'see_all' => 'zobacz wszystkie powiadomienia',
    'see_channel' => 'przejdź do czatu',
    'verifying' => 'Zweryfikuj sesję, by wyświetlić powiadomienia',

    'action_type' => [
        '_' => 'wszystkie',
        'beatmapset' => 'beatmapy',
        'build' => 'zmiany',
        'channel' => 'czat',
        'forum_topic' => 'forum',
        'news_post' => 'aktualności',
        'team' => 'drużyna',
        'user' => 'profil',
    ],

    'filters' => [
        '_' => 'wszystkie',
        'beatmapset' => 'beatmapy',
        'build' => 'kompilacje',
        'channel' => 'czat',
        'forum_topic' => 'forum',
        'news_post' => 'aktualności',
        'team' => 'drużyna',
        'user' => 'profil',
    ],

    'item' => [
        'beatmapset' => [
            '_' => 'Beatmapa',

            'beatmap_owner_change' => [
                '_' => 'Gościnny poziom trudności',
                'beatmap_owner_change' => 'Od teraz jesteś twórcą poziomu trudności „:beatmap” dla beatmapy „:title”',
                'beatmap_owner_change_compact' => 'Od teraz jesteś twórcą poziomu trudności „:beatmap”',
            ],

            'beatmapset_discussion' => [
                '_' => 'Dyskusja beatmapy',
                'beatmapset_discussion_lock' => 'Tworzenie dyskusji dla beatmapy „:title” zostało zablokowane.',
                'beatmapset_discussion_lock_compact' => 'Dyskusja została zablokowana',
                'beatmapset_discussion_post_new' => 'Nowy post w dyskusji „:title” od użytkownika :username: „:content”',
                'beatmapset_discussion_post_new_empty' => 'Nowy post od użytkownika :username dla beatmapy „:title”',
                'beatmapset_discussion_post_new_compact' => 'Nowy post od użytkownika :username',
                'beatmapset_discussion_post_new_compact_empty' => 'Nowy post od użytkownika :username',
                'beatmapset_discussion_review_new' => 'Nowa recenzja od :username pod beatmapą „:title” zawierająca :review_counts',
                'beatmapset_discussion_review_new_compact' => 'Nowa recenzja od :username zawierająca :review_counts',
                'beatmapset_discussion_unlock' => 'Tworzenie dyskusji dla beatmapy „:title” zostało odblokowane.',
                'beatmapset_discussion_unlock_compact' => 'Dyskusja została odblokowana',

                'review_count' => [
                    'praises' => ':count_delimited pochwała|:count_delimited pochwały|:count_delimited pochwał',
                    'problems' => ':count_delimited problem|:count_delimited problemy|:count_delimited problemów',
                    'suggestions' => ':count_delimited sugestia|:count_delimited sugestie|:count_delimited sugestii',
                ],
            ],

            'beatmapset_problem' => [
                '_' => 'Problem z zakwalifikowaną beatmapą',
                'beatmapset_discussion_qualified_problem' => 'Problem zgłoszony przez użytkownika :username dla beatmapy „:title”: „:content”',
                'beatmapset_discussion_qualified_problem_empty' => 'Problem zgłoszony przez użytkownika :username dla beatmapy „:title”',
                'beatmapset_discussion_qualified_problem_compact' => 'Problem zgłoszony przez użytkownika :username: „:content”',
                'beatmapset_discussion_qualified_problem_compact_empty' => 'Problem zgłoszony przez użytkownika :username',
            ],

            'beatmapset_state' => [
                '_' => 'Status beatmapy został zmieniony',
                'beatmapset_disqualify' => 'Beatmapa „:title” została zdyskwalifikowana przez użytkownika :username.',
                'beatmapset_disqualify_compact' => 'Beatmapa została zdyskwalifikowana',
                'beatmapset_love' => 'Beatmapa „:title” uzyskała status ulubionej społeczności od użytkownika :username.',
                'beatmapset_love_compact' => 'Beatmapa uzyskała status ulubionej społeczności',
                'beatmapset_nominate' => 'Beatmapa „:title” została nominowana przez użytkownika :username.',
                'beatmapset_nominate_compact' => 'Beatmapa została nominowana',
                'beatmapset_qualify' => 'Beatmapa „:title” uzyskała wystarczającą liczbę nominacji i została zakwalifikowana.',
                'beatmapset_qualify_compact' => 'Beatmapa została zakwalifikowana',
                'beatmapset_rank' => 'Beatmapa „:title” uzyskała status rankingowy',
                'beatmapset_rank_compact' => 'Beatmapa uzyskała status rankingowy',
                'beatmapset_remove_from_loved' => 'Beatmapa „:title” została usunięta z kategorii ulubionych społeczności',
                'beatmapset_remove_from_loved_compact' => 'Beatmapa została usunięta z kategorii ulubionych społeczności',
                'beatmapset_reset_nominations' => 'Nominacja beatmapy „:title” została zresetowana',
                'beatmapset_reset_nominations_compact' => 'Nominacja została zresetowana',
            ],

            'comment' => [
                '_' => 'Nowy komentarz',

                'comment_new' => 'Użytkownik :username napisał komentarz pod „:title”: „:content”',
                'comment_new_compact' => 'Użytkownik :username napisał komentarz: „:content”',
                'comment_reply' => 'Użytkownik :username odpowiedział: „:content” na „:title”',
                'comment_reply_compact' => 'Użytkownik :username odpowiedział: „:content”',
            ],
        ],

        'channel' => [
            '_' => 'Czat',

            'announcement' => [
                '_' => 'Nowe ogłoszenie',

                'announce' => [
                    'channel_announcement' => ':username pisze: „:title”',
                    'channel_announcement_compact' => ':title',
                    'channel_announcement_group' => 'Ogłoszenie od użytkownika :username',
                ],
            ],

            'channel' => [
                '_' => 'Nowa wiadomość',

                'pm' => [
                    'channel_message' => ':username pisze: „:title”',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => 'od użytkownika :username',
                ],
            ],

            'channel_team' => [
                '_' => '',

                'team' => [
                    'channel_team' => '',
                    'channel_team_compact' => '',
                    'channel_team_group' => '',
                ],
            ],
        ],

        'build' => [
            '_' => 'Zmiany',

            'comment' => [
                '_' => 'Nowy komentarz',

                'comment_new' => 'Użytkownik :username napisał komentarz pod „:title”: „:content”',
                'comment_new_compact' => 'Użytkownik :username napisał komentarz: „:content”',
                'comment_reply' => 'Użytkownik :username odpowiedział: „:content” na „:title”',
                'comment_reply_compact' => 'Użytkownik :username odpowiedział: „:content”',
            ],
        ],

        'news_post' => [
            '_' => 'Aktualności',

            'comment' => [
                '_' => 'Nowy komentarz',

                'comment_new' => 'Użytkownik :username napisał komentarz pod „:title”: „:content”',
                'comment_new_compact' => 'Użytkownik :username napisał komentarz: „:content”',
                'comment_reply' => 'Użytkownik :username odpowiedział: „:content” na „:title”',
                'comment_reply_compact' => 'Użytkownik :username odpowiedział: „:content”',
            ],
        ],

        'forum_topic' => [
            '_' => 'Wątek na forum',

            'forum_topic_reply' => [
                '_' => 'Nowa odpowiedź na forum',
                'forum_topic_reply' => 'Użytkownik :username odpowiedział w wątku „:title”',
                'forum_topic_reply_compact' => 'Użytkownik :username odpowiedział',
            ],
        ],

        'team' => [
            'team_application' => [
                '_' => 'Prośba o dołączenie do drużyny',

                'team_application_accept' => "Jesteś teraz członkiem drużyny :title",
                'team_application_accept_compact' => "Jesteś teraz członkiem drużyny :title",

                'team_application_group' => '',

                'team_application_reject' => 'Twoja prośba o dołączenie do drużyny :title została odrzucona',
                'team_application_reject_compact' => 'Twoja prośba o dołączenie do drużyny :title została odrzucona',
                'team_application_store' => '',
                'team_application_store_compact' => '',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                '_' => 'Nowa beatmapa',

                'user_beatmapset_new' => 'Nowa beatmapa od użytkownika :username: „:title”',
                'user_beatmapset_new_compact' => 'Nowa beatmapa: „:title”',
                'user_beatmapset_new_group' => 'Nowe beatmapy od użytkownika :username',

                'user_beatmapset_revive' => 'Beatmapa „:title” została ożywiona przez użytkownika :username',
                'user_beatmapset_revive_compact' => 'Beatmapa „:title” została ożywiona',
            ],
        ],

        'user_achievement' => [
            '_' => 'Medale',

            'user_achievement_unlock' => [
                '_' => 'Nowy medal',
                'user_achievement_unlock' => 'Odblokowano medal „:title”!',
                'user_achievement_unlock_compact' => 'Odblokowano medal „:title”!',
                'user_achievement_unlock_group' => 'Odblokowano medale!',
            ],
        ],
    ],

    'mail' => [
        'beatmapset' => [
            'beatmap_owner_change' => [
                'beatmap_owner_change' => 'Od teraz jesteś gościem dla beatmapy „:title”',
            ],

            'beatmapset_discussion' => [
                'beatmapset_discussion_lock' => 'Dyskusja do beatmapy „:title” została zamknięta',
                'beatmapset_discussion_post_new' => 'W dyskusji do beatmapy „:title” pojawiły się nowe aktualizacje',
                'beatmapset_discussion_unlock' => 'Dyskusja do beatmapy „:title” została otwarta',
            ],

            'beatmapset_problem' => [
                'beatmapset_discussion_qualified_problem' => 'Zgłoszono nowy problem z beatmapą „:title”',
            ],

            'beatmapset_state' => [
                'beatmapset_disqualify' => 'Beatmapa „:title” została zdyskwalifikowana',
                'beatmapset_love' => 'Beatmapa „:title” uzyskała status ulubionej społeczności',
                'beatmapset_nominate' => 'Beatmapa „:title” została nominowana',
                'beatmapset_qualify' => 'Beatmapa „:title” uzyskała wystarczającą liczbę nominacji i została zakwalifikowana',
                'beatmapset_rank' => 'Beatmapa „:title” uzyskała status rankingowy',
                'beatmapset_remove_from_loved' => 'Beatmapa „:title” została usunięta z kategorii ulubionych społeczności',
                'beatmapset_reset_nominations' => 'Nominacja beatmapy „:title” została zresetowana',
            ],

            'comment' => [
                'comment_new' => 'W beatmapie „:title” pojawiły się nowe komentarze',
            ],
        ],

        'channel' => [
            'announcement' => [
                'channel_announcement' => '',
            ],
            'channel' => [
                'channel_message' => '',
            ],
            'channel_team' => [
                'channel_team' => '',
            ],
        ],

        'build' => [
            'comment' => [
                'comment_new' => 'W liście zmian „:title” pojawiły się nowe komentarze',
            ],
        ],

        'news_post' => [
            'comment' => [
                'comment_new' => 'W wiadomości „:title” pojawiły się nowe komentarze',
            ],
        ],

        'forum_topic' => [
            'forum_topic_reply' => [
                'forum_topic_reply' => 'W wątku „:title” pojawiły się nowe odpowiedzi',
            ],
        ],

        'team' => [
            'team_application' => [
                'team_application_accept' => "Jesteś teraz członkiem drużyny :title",
                'team_application_reject' => 'Jesteś teraz członkiem drużyny :title',
                'team_application_store' => '',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                'user_beatmapset_new' => 'Użytkownik :username przesłał nowe beatmapy',
                'user_beatmapset_revive' => 'Użytkownik :username ożywił beatmapy',
            ],
        ],
    ],
];
