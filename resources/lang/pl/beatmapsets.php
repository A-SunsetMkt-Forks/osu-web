<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => 'Nie możesz pobrać tej beatmapy.',
        'parts-removed' => 'Ta beatmapa została usunięta za prośbą twórcy materiałów w niej użytych.',
        'more-info' => 'Kliknij tutaj, aby dowiedzieć się więcej.',
        'rule_violation' => 'Część zawartości tej beatmapy została usunięta po uznaniu jej za nieodpowiednią do użycia w osu!.',
    ],

    'cover' => [
        'deleted' => 'Usunięta beatmapa',
    ],

    'download' => [
        'limit_exceeded' => 'Zwolnij, pograj więcej!',
        'no_mirrors' => 'Brak serwerów umożliwiających pobranie beatmapy.',
    ],

    'featured_artist_badge' => [
        'label' => 'Wyróżniony artysta',
    ],

    'index' => [
        'title' => 'Lista beatmap',
        'guest_title' => 'Beatmapy',
    ],

    'panel' => [
        'empty' => 'brak beatmap',

        'download' => [
            'all' => 'pobierz',
            'video' => 'pobierz z wideo',
            'no_video' => 'pobierz bez wideo',
            'direct' => 'otwórz w osu!direct',
        ],
    ],

    'nominate' => [
        'bng_limited_too_many_rulesets' => 'Nie możesz nominować dla wielu trybów gry jako nominator z niepełnymi uprawnieniami.',
        'full_nomination_required' => 'Do dokonania ostatecznej nominacji dla trybu gry wymagane są pełne uprawnienia nominatora.',
        'hybrid_requires_modes' => 'Beatmapa hybrydowa wymaga wybrania przynajmniej jednego trybu gry, dla którego chcesz ją nominować.',
        'incorrect_mode' => 'Nie posiadasz uprawnień do nominowania beatmap dla tych trybów (:mode)',
        'invalid_limited_nomination' => 'Ta beatmapa posiada nieprawidłowe nominacje i nie może zostać zakwalifikowana.',
        'invalid_ruleset' => 'Wybrano nieprawidłowe tryby gry w nominacji.',
        'too_many' => 'Osiągnięto już wystarczającą liczbę nominacji.',
        'too_many_non_main_ruleset' => 'Wymóg nominacji dla dodatkowych trybów gry został już spełniony.',

        'dialog' => [
            'confirmation' => 'Czy na pewno chcesz nominować tę beatmapę?',
            'different_nominator_warning' => 'Zakwalifikowanie tej beatmapy z inną grupą nominatorów zresetuje jej pozycję w kolejce kwalifikacji.',
            'header' => 'Nominuj beatmapę',
            'hybrid_warning' => 'Uwaga: możesz nominować tylko raz, więc upewnij się, że nominujesz ją dla wszystkich pożądanych trybów gry.',
            'current_main_ruleset' => 'Główny tryb gry beatmapy - :ruleset',
            'which_modes' => 'Dla jakich trybów chcesz nominować tę beatmapę?',
        ],
    ],

    'nsfw_badge' => [
        'label' => 'Dla pełnoletnich',
    ],

    'show' => [
        'discussion' => 'Dyskusja',

        'admin' => [
            'full_size_cover' => 'Wyświetl tło w pełnej rozdzielczości',
        ],

        'deleted_banner' => [
            'title' => 'Ta beatmapa została usunięta.',
            'message' => '(widoczne tylko dla moderatorów)',
        ],

        'details' => [
            'by_artist' => ':artist',
            'favourite' => 'dodaj do ulubionych',
            'favourite_login' => 'zaloguj się, by dodać tę beatmapę do ulubionych',
            'logged-out' => 'zaloguj się, aby zacząć pobierać beatmapy!',
            'mapped_by' => 'autorstwa :mapper',
            'mapped_by_guest' => 'gościnny poziom trudności autorstwa :mapper',
            'unfavourite' => 'usuń z ulubionych',
            'updated_timeago' => 'ostatnio zaktualizowana :timeago',

            'download' => [
                '_' => 'Pobierz',
                'direct' => '',
                'no-video' => 'bez wideo',
                'video' => 'z wideo',
            ],

            'login_required' => [
                'bottom' => 'aby uzyskać dostęp do pozostałych funkcji',
                'top' => 'Zaloguj się',
            ],
        ],

        'details_date' => [
            'approved' => 'zatwierdzona :timeago',
            'loved' => 'ulubiona społeczności :timeago',
            'qualified' => 'zakwalifikowana :timeago',
            'ranked' => 'rankingowa :timeago',
            'submitted' => 'przesłana :timeago',
            'updated' => 'ostatnio zaktualizowana :timeago',
        ],

        'favourites' => [
            'limit_reached' => 'Masz za dużo ulubionych beatmap! Usuń kilka, jeżeli chcesz kontynuować.',
        ],

        'hype' => [
            'action' => 'Nagłośnij tę beatmapę, aby pomóc jej w uzyskaniu statusu <strong>rankingowego</strong>.',

            'current' => [
                '_' => 'Ta beatmapa jest obecnie :status.',

                'status' => [
                    'pending' => 'oczekująca',
                    'qualified' => 'zakwalifikowana',
                    'wip' => 'rozwijana',
                ],
            ],

            'disqualify' => [
                '_' => 'Jeżeli znajdziesz problem z tą beatmapą, zdyskwalifikuj ją :link.',
            ],

            'report' => [
                '_' => 'Jeżeli znajdziesz problem z tą beatmapą, zgłoś go :link, aby powiadomić zespół.',
                'button' => 'Zgłoś problem',
                'link' => 'tutaj',
            ],
        ],

        'info' => [
            'description' => 'Opis',
            'genre' => 'Gatunek',
            'language' => 'Język',
            'mapper_tags' => 'Tagi twórcy',
            'no_scores' => 'Dane są nadal ładowane...',
            'nominators' => 'Nominatorzy',
            'nsfw' => 'Treść dla pełnoletnich',
            'offset' => 'Opóźnienie',
            'points-of-failure' => 'Wykres porażek',
            'source' => 'Źródło',
            'storyboard' => 'Ta beatmapa zawiera scenorys',
            'success-rate' => 'Wskaźnik ukończonych zagrań',
            'user_tags' => 'Tagi użytkowników',
            'video' => 'Ta beatmapa zawiera wideo w tle',
        ],

        'nsfw_warning' => [
            'details' => 'Ta beatmapa zawiera niedwuznaczne, obraźliwe lub niepokojące treści. Czy chcesz ją zobaczyć mimo to?',
            'title' => 'Treść dla pełnoletnich',

            'buttons' => [
                'disable' => 'Wyłącz ostrzeżenia',
                'listing' => 'Wróć do listy beatmap',
                'show' => 'Pokaż',
            ],
        ],

        'scoreboard' => [
            'achieved' => 'osiągnięty :when',
            'country' => 'Ranking krajowy',
            'error' => 'Nie udało się załadować rankingu',
            'friend' => 'Ranking znajomych',
            'global' => 'Ranking globalny',
            'supporter-link' => 'Kliknij <a href=":link">tutaj</a>, aby zobaczyć, jakie jeszcze funkcje otrzymasz w zamian za zakup statusu donatora!',
            'supporter-only' => 'Musisz posiadać status donatora, by uzyskać dostęp do rankingu krajowego, znajomych i odrębnych dla modyfikatorów!',
            'team' => 'Ranking zespołowy',
            'title' => 'Tabela wyników',

            'headers' => [
                'accuracy' => 'Celność',
                'combo' => 'Combo',
                'miss' => 'Pudła',
                'mods' => 'Modyfikatory',
                'pin' => 'Przypnij',
                'player' => 'Gracz',
                'pp' => '',
                'rank' => 'Pozycja',
                'score' => 'Wynik',
                'score_total' => 'Wynik',
                'time' => 'Data',
            ],

            'no_scores' => [
                'country' => 'Nikt z twojego kraju nie ustanowił jeszcze wyniku na tej beatmapie!',
                'friend' => 'Żaden z twoich znajomych nie ustanowił jeszcze wyniku na tej beatmapie!',
                'global' => 'Brak wyników. Może czas jakieś ustanowić?',
                'loading' => 'Ładowanie wyników...',
                'team' => 'Żaden z członków twojego zespołu nie ustanowił jeszcze wyniku na tej beatmapie!',
                'unranked' => 'Nierankingowa beatmapa.',
            ],
            'score' => [
                'first' => 'Najlepszy wynik',
                'own' => 'Twój wynik',
            ],
            'supporter_link' => [
                '_' => 'Kliknij :here, aby zobaczyć, jakie jeszcze funkcje otrzymasz!',
                'here' => 'tutaj',
            ],
        ],

        'stats' => [
            'cs' => 'Wielkość kółek',
            'cs-mania' => 'Liczba klawiszy',
            'drain' => 'Spadek HP',
            'accuracy' => 'Precyzja',
            'ar' => 'Prędkość otoczki',
            'stars' => 'Trudność',
            'total_length' => 'Długość (długość aktywnej gry: :hit_length)',
            'bpm' => 'BPM',
            'count_circles' => 'Liczba kółek',
            'count_sliders' => 'Liczba sliderów',
            'offset' => 'Opóźnienie: :offset',
            'user-rating' => 'Oceny użytkowników',
            'rating-spread' => 'Rozkład ocen',
            'nominations' => 'Nominacje',
            'playcount' => 'Liczba zagrań',
        ],

        'status' => [
            'ranked' => 'Rankingowa',
            'approved' => 'Zatwierdzona',
            'loved' => 'Ulubiona społeczności',
            'qualified' => 'Zakwalifikowana',
            'wip' => 'Obecnie rozwijana',
            'pending' => 'Oczekująca',
            'graveyard' => 'Porzucona',
        ],
    ],

    'spotlight_badge' => [
        'label' => 'Wyróżniona',
    ],
];
