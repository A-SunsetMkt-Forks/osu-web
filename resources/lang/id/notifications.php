<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'all_read' => 'Seluruh notifikasi telah dibaca!',
    'delete' => 'Hapus :type',
    'loading' => 'Memuat notifikasi yang belum dibaca...',
    'mark_read' => 'Hapus :type',
    'none' => 'Tidak ada notifikasi',
    'see_all' => 'Lihat riwayat notifikasi',
    'see_channel' => 'Buka jendela chat',
    'verifying' => 'Silakan verifikasi sesi untuk melihat notifikasi',

    'action_type' => [
        '_' => 'semua',
        'beatmapset' => 'beatmap',
        'build' => 'versi rilis',
        'channel' => 'percakapan',
        'forum_topic' => 'forum',
        'news_post' => 'berita',
        'team' => 'tim',
        'user' => 'profil',
    ],

    'filters' => [
        '_' => 'semua',
        'beatmapset' => 'beatmap',
        'build' => 'build',
        'channel' => 'chat',
        'forum_topic' => 'forum',
        'news_post' => 'berita',
        'team' => 'tim',
        'user' => 'profil',
    ],

    'item' => [
        'beatmapset' => [
            '_' => 'Beatmap',

            'beatmap_owner_change' => [
                '_' => 'Guest difficulty',
                'beatmap_owner_change' => 'Kamu telah terdaftar sebagai pemilik tingkat kesulitan ":beatmap" pada beatmap ":title"',
                'beatmap_owner_change_compact' => 'Kamu telah terdaftar sebagai pemilik dari tingkat kesulitan ":beatmap"',
            ],

            'beatmapset_discussion' => [
                '_' => 'Diskusi beatmap',
                'beatmapset_discussion_lock' => 'Diskusi pada ":title" telah dikunci',
                'beatmapset_discussion_lock_compact' => 'Diskusi beatmap telah dikunci',
                'beatmapset_discussion_post_new' => 'Postingan baru pada ":title" oleh :username: ":content"',
                'beatmapset_discussion_post_new_empty' => 'Postingan baru pada ":title" oleh :username',
                'beatmapset_discussion_post_new_compact' => 'Postingan baru oleh :username: ":content"',
                'beatmapset_discussion_post_new_compact_empty' => 'Postingan baru oleh :username',
                'beatmapset_discussion_review_new' => 'Kajian baru pada ":title" oleh :username yang mengandung :review_counts',
                'beatmapset_discussion_review_new_compact' => 'Kajian baru oleh :username yang mengandung :review_counts',
                'beatmapset_discussion_unlock' => 'Diskusi pada beatmap ":title" telah kembali dibuka',
                'beatmapset_discussion_unlock_compact' => 'Diskusi beatmap telah dibuka',

                'review_count' => [
                    'praises' => ':count_delimited pujian|:count_delimited pujian',
                    'problems' => ':count_delimited masalah|:count_delimited masalah',
                    'suggestions' => ':count_delimited saran|:count_delimited saran',
                ],
            ],

            'beatmapset_problem' => [
                '_' => 'Masalah pada Beatmap Qualified',
                'beatmapset_discussion_qualified_problem' => 'Dilaporkan oleh :username pada ":title": ":content"',
                'beatmapset_discussion_qualified_problem_empty' => 'Dilaporkan oleh :username pada ":title"',
                'beatmapset_discussion_qualified_problem_compact' => 'Dilaporkan oleh :username: ":content"',
                'beatmapset_discussion_qualified_problem_compact_empty' => 'Dilaporkan oleh :username',
            ],

            'beatmapset_state' => [
                '_' => 'Perubahan status beatmap',
                'beatmapset_disqualify' => '":title" telah didiskualifikasi',
                'beatmapset_disqualify_compact' => 'Beatmap telah didiskualifikasi',
                'beatmapset_love' => '":title" telah dipromosikan ke kategori Loved',
                'beatmapset_love_compact' => 'Beatmap telah dipromosikan ke kategori Loved',
                'beatmapset_nominate' => '":title" telah dinominasikan',
                'beatmapset_nominate_compact' => 'Beatmap telah dinominasikan',
                'beatmapset_qualify' => '":title" telah memperoleh jumlah nominasi yang dibutuhkan untuk dapat memasuki antrean ranking',
                'beatmapset_qualify_compact' => 'Beatmap memasuki antrean ranking',
                'beatmapset_rank' => '":title" telah berstatus Ranked',
                'beatmapset_rank_compact' => 'Beatmap telah berstatus Ranked',
                'beatmapset_remove_from_loved' => '":title" telah dilepas dari Loved',
                'beatmapset_remove_from_loved_compact' => 'Beatmap telah dilepas dari Loved',
                'beatmapset_reset_nominations' => 'Nominasi pada ":title" telah dianulir',
                'beatmapset_reset_nominations_compact' => 'Nominasi beatmap dianulir',
            ],

            'comment' => [
                '_' => 'Komentar baru',

                'comment_new' => ':username berkomentar ":content" pada ":title"',
                'comment_new_compact' => ':username berkomentar ":content"',
                'comment_reply' => ':username membalas komentar yang kamu tulis pada ":title" dengan ":content"',
                'comment_reply_compact' => ':username membalas komentarmu dengan ":content"',
            ],
        ],

        'channel' => [
            '_' => 'Chat',

            'announcement' => [
                '_' => 'Pengumuman baru',

                'announce' => [
                    'channel_announcement' => ':username mengatakan ":title"',
                    'channel_announcement_compact' => ':title',
                    'channel_announcement_group' => 'Pengumuman dari :username',
                ],
            ],

            'channel' => [
                '_' => 'Pesan baru',

                'pm' => [
                    'channel_message' => ':username mengatakan ":title"',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => 'dari :username',
                ],
            ],

            'channel_team' => [
                '_' => 'Pesan tim baru',

                'team' => [
                    'channel_team' => ':username mengatakan ":title"',
                    'channel_team_compact' => ':username mengatakan ":title"',
                    'channel_team_group' => ':username mengatakan ":title"',
                ],
            ],
        ],

        'build' => [
            '_' => 'Riwayat Perubahan',

            'comment' => [
                '_' => 'Komentar baru',

                'comment_new' => ':username berkomentar ":content" pada ":title"',
                'comment_new_compact' => ':username berkomentar ":content"',
                'comment_reply' => ':username membalas komentar yang kamu tulis pada ":title" dengan ":content"',
                'comment_reply_compact' => ':username membalas komentarmu dengan ":content"',
            ],
        ],

        'news_post' => [
            '_' => 'Berita',

            'comment' => [
                '_' => 'Komentar baru',

                'comment_new' => ':username berkomentar ":content" pada ":title"',
                'comment_new_compact' => ':username berkomentar ":content"',
                'comment_reply' => ':username membalas komentar yang kamu tulis pada ":title" dengan ":content"',
                'comment_reply_compact' => ':username membalas komentarmu dengan ":content"',
            ],
        ],

        'forum_topic' => [
            '_' => 'Topik forum',

            'forum_topic_reply' => [
                '_' => 'Balasan forum baru',
                'forum_topic_reply' => ':username membalas postinganmu pada utas forum ":title"',
                'forum_topic_reply_compact' => ':username membalas postinganmu',
            ],
        ],

        'team' => [
            'team_application' => [
                '_' => 'Permintaan gabung tim',

                'team_application_accept' => "Kamu kini merupakan anggota dari tim :title",
                'team_application_accept_compact' => "Kamu kini merupakan anggota dari tim :title",

                'team_application_group' => 'Pembaruan permintaan gabung tim',

                'team_application_reject' => 'Permintaan kamu untuk bergabung ke tim :title telah ditolak',
                'team_application_reject_compact' => 'Permintaan kamu untuk bergabung ke tim :title telah ditolak',
                'team_application_store' => ':title meminta untuk bergabung ke tim kamu',
                'team_application_store_compact' => ':title meminta untuk bergabung ke tim kamu',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                '_' => 'Beatmap baru',

                'user_beatmapset_new' => 'Beatmap baru ":title" oleh :username',
                'user_beatmapset_new_compact' => 'Beatmap baru ":title"',
                'user_beatmapset_new_group' => 'Beatmap baru oleh :username',

                'user_beatmapset_revive' => 'Beatmap ":title" telah dipulihkan dari Graveyard oleh :username',
                'user_beatmapset_revive_compact' => 'Beatmap ":title" dipulihkan',
            ],
        ],

        'user_achievement' => [
            '_' => 'Medali',

            'user_achievement_unlock' => [
                '_' => 'Medali baru',
                'user_achievement_unlock' => '":title" terbuka!',
                'user_achievement_unlock_compact' => 'Medali ":title" terbuka!',
                'user_achievement_unlock_group' => 'Medali terbuka!',
            ],
        ],
    ],

    'mail' => [
        'beatmapset' => [
            'beatmap_owner_change' => [
                'beatmap_owner_change' => 'Kamu telah terdaftar sebagai pemilik guest difficulty pada beatmap ":title"',
            ],

            'beatmapset_discussion' => [
                'beatmapset_discussion_lock' => 'Topik diskusi ":title" telah dikunci',
                'beatmapset_discussion_post_new' => 'Terdapat pembaruan baru pada topik diskusi ":title"',
                'beatmapset_discussion_unlock' => 'Topik diskusi ":title" telah kembali dibuka',
            ],

            'beatmapset_problem' => [
                'beatmapset_discussion_qualified_problem' => 'Terdapat masalah baru yang dilaporkan pada ":title"',
            ],

            'beatmapset_state' => [
                'beatmapset_disqualify' => '":title" telah didiskualifikasi',
                'beatmapset_love' => '":title" telah dipromosikan ke kategori Loved',
                'beatmapset_nominate' => '":title" telah dinominasikan',
                'beatmapset_qualify' => '":title" telah memperoleh jumlah nominasi yang dibutuhkan untuk dapat memasuki antrean ranking',
                'beatmapset_rank' => '":title" telah berstatus Ranked',
                'beatmapset_remove_from_loved' => ':title telah dilepas dari Loved',
                'beatmapset_reset_nominations' => 'Nominasi pada beatmap ":title" telah dianulir',
            ],

            'comment' => [
                'comment_new' => 'Terdapat komentar baru pada beatmap ":title"',
            ],
        ],

        'channel' => [
            'announcement' => [
                'channel_announcement' => 'Terdapat pengumuman baru pada ":name"',
            ],
            'channel' => [
                'channel_message' => 'Kamu menerima pesan baru dari :username',
            ],
            'channel_team' => [
                'channel_team' => 'Terdapat pesan baru pada tim ":name"',
            ],
        ],

        'build' => [
            'comment' => [
                'comment_new' => 'Terdapat komentar baru pada riwayat perubahan ":title"',
            ],
        ],

        'news_post' => [
            'comment' => [
                'comment_new' => 'Terdapat komentar baru pada topik berita ":title"',
            ],
        ],

        'forum_topic' => [
            'forum_topic_reply' => [
                'forum_topic_reply' => 'Terdapat balasan baru pada ":title"',
            ],
        ],

        'team' => [
            'team_application' => [
                'team_application_accept' => "Kamu kini merupakan anggota dari tim :title",
                'team_application_reject' => 'Permintaan kamu untuk bergabung ke tim :title telah ditolak',
                'team_application_store' => ':title meminta untuk bergabung ke tim kamu',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                'user_beatmapset_new' => ':username telah mengunggah beatmap baru',
                'user_beatmapset_revive' => ':username memiliki beatmap yang dipulihkan dari Graveyard',
            ],
        ],
    ],
];
