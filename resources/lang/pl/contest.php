<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'header' => [
        'small' => 'Rywalizacja na więcej sposobów niż tylko klikanie w kółka.',
        'large' => 'Konkursy społeczności',
    ],

    'index' => [
        'nav_title' => 'lista',
    ],

    'judge' => [
        'comments' => 'komentarze',
        'hide_judged' => 'ukryj ocenione zgłoszenia',
        'nav_title' => 'oceniać',
        'no_current_vote' => 'jeszcze nie zagłosowałeś.',
        'update' => 'aktualizacja',
        'validation' => [
            'missing_score' => 'brakujący wynik',
            'contest_vote_judged' => 'nie można głosować w ocenianych konkursach',
        ],
        'voted' => 'Już zagłosowałeś w tym wpisie.',
    ],

    'judge_results' => [
        '_' => 'Wyniki oceniania',
        'creator' => 'twórca',
        'score' => 'Wynik',
        'total_score' => 'wynik całkowity',
    ],

    'voting' => [
        'judge_link' => 'Jesteś sędzią tego konkursu. Oceń wpisy tutaj!',
        'judged_notice' => 'Ten konkurs używa systemu oceniania, sędziowie obecnie sprawdzają wpisy.',
        'login_required' => 'Zaloguj się, aby zagłosować.',
        'over' => 'Głosowanie dla tego konkursu zostało zakończone',
        'show_voted_only' => 'Pokaż prace z moimi głosami',

        'best_of' => [
            'none_played' => "Wygląda na to, że żadna z beatmap kwalifikujących się do tego konkursu nie została przez ciebie zagrana.",
        ],

        'button' => [
            'add' => 'Zagłosuj',
            'remove' => 'Cofnij głos',
            'used_up' => 'Nie masz już więcej głosów',
        ],

        'progress' => [
            '_' => 'oddano :used z :max głosów',
        ],

        'requirement' => [
            'playlist_beatmapsets' => [
                'incomplete_play' => 'Musisz zagrać wszystkie beatmapy w określonych grach asynchronicznych, by zagłosować',
            ],
        ],
    ],

    'entry' => [
        '_' => 'zgłoszenie',
        'login_required' => 'Zaloguj się, aby wziąć udział w konkursie.',
        'silenced_or_restricted' => 'Nie możesz uczestniczyć w konkursach po tym, jak twoje konto zostało ograniczone lub uciszone.',
        'preparation' => 'Ten konkurs jest obecnie przygotowywany. Czekaj cierpliwie!',
        'drop_here' => 'Tutaj umieść swoje zgłoszenie',
        'download' => 'Pobierz plik .osz',

        'wrong_type' => [
            'art' => 'W tym konkursie dozwolone są wyłącznie pliki o rozszerzeniach .jpg i .png.',
            'beatmap' => 'W tym konkursie dozwolone są wyłącznie pliki o rozszerzeniu .osu.',
            'music' => 'W tym konkursie dozwolone są wyłącznie pliki o rozszerzeniu .mp3.',
        ],

        'wrong_dimensions' => 'Zgłoszenia do tego konkursu muszą mieć rozdzielczość :widthx:height',
        'too_big' => 'Maksymalny rozmiar pliku ze zgłoszeniem dla tego konkursu to :limit.',
    ],

    'beatmaps' => [
        'download' => 'Pobierz zgłoszenie',
    ],

    'vote' => [
        'list' => 'głosy',
        'count' => ':count_delimited głos|:count_delimited głosy|:count_delimited głosów',
        'points' => ':count_delimited punkt|:count_delimited punkty|:count_delimited punktów',
    ],

    'dates' => [
        'ended' => 'Zakończony :date',
        'ended_no_date' => 'Zakończony',

        'starts' => [
            '_' => 'Data rozpoczęcia: :date',
            'soon' => 'wkrótce™',
        ],
    ],

    'states' => [
        'entry' => 'Otwarty na zgłoszenia',
        'voting' => 'Głosowanie',
        'results' => 'Wyniki',
    ],
];
