<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'index' => [
        'description' => '共通のテーマを有するビートマップを集めたパックです。',
        'empty' => '近日公開！',
        'nav_title' => '一覧',
        'title' => 'ビートマップパック',

        'blurb' => [
            'important' => 'ダウンロード前に必ず読んでください',
            'install_instruction' => '読み込み方法: ビートマップパックをダウンロードしたら、アーカイブの中身をosu!のSongsディレクトリに抽出するとosu!が残りの作業を行います。',
        ],
    ],

    'show' => [
        'created_by' => '作成者: :author',
        'download' => 'ダウンロード',
        'item' => [
            'cleared' => '削除済み',
            'not_cleared' => '未クリア',
        ],
        'no_diff_reduction' => [
            '_' => ':link はこのパックをクリアするのに使用できません。',
            'link' => '難易度低下mod',
        ],
    ],

    'mode' => [
        'artist' => 'アーティスト/アルバム',
        'chart' => 'スポットライト',
        'featured' => '注目アーティスト',
        'loved' => 'Project Loved',
        'standard' => 'スタンダードパック',
        'theme' => 'テーマ',
        'tournament' => 'トーナメント',
    ],

    'require_login' => [
        '_' => 'ダウンロードするには:linkが必要です',
        'link_text' => 'ログイン',
    ],
];
