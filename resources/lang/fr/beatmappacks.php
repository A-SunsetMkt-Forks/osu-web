<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'index' => [
        'description' => 'Des collections pré-packagées de beatmaps autour d\'un thème commun.',
        'empty' => 'Arrive prochainement !',
        'nav_title' => 'liste',
        'title' => 'Beatmap packs',

        'blurb' => [
            'important' => 'LISEZ CECI AVANT DE TÉLÉCHARGER',
            'install_instruction' => 'Installation : Une fois qu\'un pack a été téléchargé, extrayez le contenu du pack dans le dossier Songs d\'osu! et le client s\'occupera du reste.',
        ],
    ],

    'show' => [
        'created_by' => 'par :author',
        'download' => 'Télécharger',
        'item' => [
            'cleared' => 'terminée',
            'not_cleared' => 'non terminée',
        ],
        'no_diff_reduction' => [
            '_' => ':link ne peuvent pas être utilisés pour ce pack.',
            'link' => 'Les mods réduisant la difficulté',
        ],
    ],

    'mode' => [
        'artist' => 'Artiste/Album',
        'chart' => 'Spotlights',
        'featured' => 'Featured Artist',
        'loved' => 'Project Loved',
        'standard' => 'Standard',
        'theme' => 'Thème',
        'tournament' => 'Tournoi',
    ],

    'require_login' => [
        '_' => 'Vous devez être :link pour télécharger',
        'link_text' => 'connecté',
    ],
];
