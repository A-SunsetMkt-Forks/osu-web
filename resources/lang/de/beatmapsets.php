<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => 'Diese Beatmap steht momentan nicht zum Herunterladen zur Verfügung.',
        'parts-removed' => 'Teile dieser Beatmap wurden auf Anfrage des Erstellers oder eines Rechteinhabers entfernt.',
        'more-info' => 'Siehe hier für mehr Informationen.',
        'rule_violation' => 'Einige in dieser Beatmap enthaltene Assets wurden entfernt, nachdem sie als nicht für die Verwendung in osu! geeignet eingestuft worden waren.',
    ],

    'cover' => [
        'deleted' => 'Gelöschte Beatmap',
    ],

    'download' => [
        'limit_exceeded' => 'Nur langsam, spiel mehr.',
        'no_mirrors' => 'Keine Download-Server verfügbar.',
    ],

    'featured_artist_badge' => [
        'label' => 'Featured Artist',
    ],

    'index' => [
        'title' => 'Beatmap-Auflistung',
        'guest_title' => 'Beatmaps',
    ],

    'panel' => [
        'empty' => 'keine Beatmaps',

        'download' => [
            'all' => 'herunterladen',
            'video' => 'mit Video herunterladen',
            'no_video' => 'ohne Video herunterladen',
            'direct' => 'in osu!direct öffnen',
        ],
    ],

    'nominate' => [
        'bng_limited_too_many_rulesets' => 'Probationäre Ernenner können nicht mehrere Regelsätze nominieren.',
        'full_nomination_required' => 'Du musst ein Vollberechtigter Ernenner sein um die finale nomination eines Regelsatzes durchzuführen.',
        'hybrid_requires_modes' => 'Für ein Hybrid-Beatmapset musst du mindestens einen Spielmodus auswählen, den du nominieren möchtest.',
        'incorrect_mode' => 'Du hast keine Berechtigung diesen Modus zu nominieren: :mode',
        'invalid_limited_nomination' => 'Diese Beatmap hat invalide Nominationen und kann in diesem Zustand nicht qualifiziert werden.',
        'invalid_ruleset' => 'Diese Nominierung hat inkompatible Spielmodi.',
        'too_many' => 'Nominierungsvoraussetzung bereits erfüllt.',
        'too_many_non_main_ruleset' => 'Nomininierungsanforderungen für nicht-Hauptspielmodi sind schon erfüllt.',

        'dialog' => [
            'confirmation' => 'Bist du sicher, dass du diese Beatmap nominieren möchtest?',
            'different_nominator_warning' => 'Das Qualifizieren dieser Beatmap mit anderen Nominatoren wird dessen Position in der Qualifikationswarteschlange zurücksetzen.',
            'header' => 'Beatmap nominieren',
            'hybrid_warning' => 'Hinweis: du kannst nur einmalig nominieren, also stelle bitte sicher, dass du für alle Spielmodi nominierst, die du beabsichtigst',
            'current_main_ruleset' => 'Der Hauptspielmodus ist derzeit: :ruleset',
            'which_modes' => 'Für welche Modi willst du nominieren?',
        ],
    ],

    'nsfw_badge' => [
        'label' => 'Explizit',
    ],

    'show' => [
        'discussion' => 'Diskussion',

        'admin' => [
            'full_size_cover' => 'Titelbild in Originalgröße anzeigen',
        ],

        'deleted_banner' => [
            'title' => 'Diese Beatmap wurde gelöscht.',
            'message' => '(nur Moderatoren können dies sehen)',
        ],

        'details' => [
            'by_artist' => 'von :artist',
            'favourite' => 'Diese Beatmap zu deinen Favoriten hinzufügen',
            'favourite_login' => 'Melde dich an, um diese Beatmap zu favorisieren',
            'logged-out' => 'Du musst eingeloggt sein, bevor du Beatmaps herunterladen kannst!',
            'mapped_by' => 'erstellt von :mapper',
            'mapped_by_guest' => 'Guest-Difficulty von :mapper',
            'unfavourite' => 'Diese Beatmap von deinen Favoriten entfernen',
            'updated_timeago' => ':timeago zuletzt aktualisiert',

            'download' => [
                '_' => 'Herunterladen',
                'direct' => '',
                'no-video' => 'ohne Video',
                'video' => 'mit Video',
            ],

            'login_required' => [
                'bottom' => 'für Zugriff auf mehr Features',
                'top' => 'Einloggen',
            ],
        ],

        'details_date' => [
            'approved' => ':timeago approved',
            'loved' => ':timeago loved',
            'qualified' => ':timeago qualifiziert',
            'ranked' => ':timeago ranked',
            'submitted' => ':timeago hochgeladen',
            'updated' => ':timeago zuletzt aktualisiert',
        ],

        'favourites' => [
            'limit_reached' => 'Du hast zu viele Beatmaps favorisiert! Bitte entferne welche, bevor du es nochmal versuchst.',
        ],

        'hype' => [
            'action' => 'Hat dir die Map Spaß gemacht? Hype sie, um bei ihrem Fortschritt zum <strong>Ranked</strong>-Status zu helfen.',

            'current' => [
                '_' => 'Die Map ist zurzeit :status.',

                'status' => [
                    'pending' => 'ausstehend',
                    'qualified' => 'qualifiziert',
                    'wip' => 'Work-in-Progress',
                ],
            ],

            'disqualify' => [
                '_' => 'Bitte disqualifizieren, falls du ein Problem in dieser Beatmap findest :link.',
            ],

            'report' => [
                '_' => 'Wenn du ein Problem in dieser Beatmap findest, melde es bitte :link, um das Team zu informieren.',
                'button' => 'Problem melden',
                'link' => 'hier',
            ],
        ],

        'info' => [
            'description' => 'Beschreibung',
            'genre' => 'Genre',
            'language' => 'Sprache',
            'mapper_tags' => 'Mappertags',
            'no_scores' => 'Die Daten werden noch verarbeitet...',
            'nominators' => 'Nominatoren',
            'nsfw' => 'Expliziter Inhalt',
            'offset' => 'Online-Offset',
            'points-of-failure' => 'Stellen, an denen Spieler gescheitert sind',
            'source' => 'Quelle',
            'storyboard' => 'Diese Beatmap enthält ein Storyboard',
            'success-rate' => 'Erfolgsrate',
            'user_tags' => 'Nutzertags',
            'video' => 'Diese Beatmap enthält ein Video',
        ],

        'nsfw_warning' => [
            'details' => 'Diese Beatmap enthält explizite, anstößige oder verstörende Inhalte. Möchtest du sie trotzdem sehen?',
            'title' => 'Expliziter Inhalt',

            'buttons' => [
                'disable' => 'Warnung deaktivieren',
                'listing' => 'Beatmap-Auflistung',
                'show' => 'Anzeigen',
            ],
        ],

        'scoreboard' => [
            'achieved' => 'erreicht :when',
            'country' => 'Länder-Rangliste',
            'error' => 'Die Rangliste konnte nicht geladen werden',
            'friend' => 'Freundes-Rangliste',
            'global' => 'Globale Rangliste',
            'supporter-link' => '<a href=":link">Hier</a> klicken, um all die tollen Features zu entdecken!',
            'supporter-only' => 'Du musst osu!supporter sein, um Freundes-, Länder-, oder Mod-Ranglisten zu sehen!',
            'team' => 'Team-Rangliste',
            'title' => 'Punkte-Anzeige',

            'headers' => [
                'accuracy' => 'Präzision',
                'combo' => 'Maximale Combo',
                'miss' => 'Miss',
                'mods' => 'Mods',
                'pin' => 'Anpinnen',
                'player' => 'Spieler',
                'pp' => '',
                'rank' => 'Rang',
                'score' => 'Punktzahl',
                'score_total' => 'Gesamtpunktzahl',
                'time' => 'Zeit',
            ],

            'no_scores' => [
                'country' => 'Niemand in deinem Land hat einen Rang auf dieser Beatmap!',
                'friend' => 'Keiner deiner Freunde hat einen Rang auf dieser Beatmap!',
                'global' => 'Noch niemand auf der Rangliste. Wie wärs?',
                'loading' => 'Lade Scores...',
                'team' => 'Keiner aus deinem Team hat bisher einen Score auf dieser Beatmap erzielt!',
                'unranked' => 'Unranked Beatmap.',
            ],
            'score' => [
                'first' => 'An der Spitze',
                'own' => 'Deine Bestleistung',
            ],
            'supporter_link' => [
                '_' => 'Klicke :here, um all die tollen Features zu entdecken, die du bekommst!',
                'here' => 'hier',
            ],
        ],

        'stats' => [
            'cs' => 'Circle-Size',
            'cs-mania' => 'Tasten-Anzahl',
            'drain' => 'HP-Drain',
            'accuracy' => 'Präzision',
            'ar' => 'Approach-Rate',
            'stars' => 'Sterne',
            'total_length' => 'Länge (Drain length: :hit_length)',
            'bpm' => 'BPM',
            'count_circles' => 'Anzahl der Circles',
            'count_sliders' => 'Anzahl der Slider',
            'offset' => 'Online-Offset: :offset',
            'user-rating' => 'User-Bewertungen',
            'rating-spread' => 'Bewertungsverteilung',
            'nominations' => 'Nominierungen',
            'playcount' => 'Playcount',
        ],

        'status' => [
            'ranked' => 'Ranked',
            'approved' => 'Approved',
            'loved' => 'Loved',
            'qualified' => 'Qualifiziert',
            'wip' => 'WIP',
            'pending' => 'Ausstehend',
            'graveyard' => 'Graveyard',
        ],
    ],

    'spotlight_badge' => [
        'label' => 'Spotlight',
    ],
];
