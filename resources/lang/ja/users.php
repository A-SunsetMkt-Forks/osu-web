<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'deleted' => '[削除されたユーザー]',

    'beatmapset_activities' => [
        'title' => ":userのModding履歴",
        'title_compact' => 'Modding',

        'discussions' => [
            'title_recent' => '最近開始されたディスカッション',
        ],

        'events' => [
            'title_recent' => '最近のイベント',
        ],

        'posts' => [
            'title_recent' => '最近の投稿',
        ],

        'votes_received' => [
            'title_most' => '最も評価の高い（3ヶ月以内）',
        ],

        'votes_made' => [
            'title_most' => '最も評価した（3ヶ月以内）',
        ],
    ],

    'blocks' => [
        'banner_text' => 'このユーザーをブロックしています',
        'comment_text' => 'このコメントは非表示になっています。',
        'blocked_count' => 'ブロックしたユーザー(:count)',
        'hide_profile' => 'プロフィールを隠す',
        'hide_comment' => '隠す',
        'forum_post_text' => 'この投稿を隠す。',
        'not_blocked' => 'このユーザーはブロックされていません。',
        'show_profile' => 'プロフィールを表示',
        'show_comment' => '表示',
        'too_many' => 'ブロックできる上限に達しました。',
        'button' => [
            'block' => 'ブロック',
            'unblock' => 'ブロック解除',
        ],
    ],

    'card' => [
        'gift_supporter' => 'サポータータグを贈る',
        'loading' => '読み込み中・・・',
        'send_message' => 'メッセージの送信',
    ],

    'create' => [
        'form' => [
            'password' => 'パスワード',
            'password_confirmation' => 'パスワードの確認',
            'submit' => 'アカウント作成',
            'user_email' => 'メールアドレス',
            'user_email_confirmation' => 'メールアドレスの確認',
            'username' => 'ユーザー名',

            'tos_notice' => [
                '_' => 'アカウントを作成することにより、:link に同意したことになります',
                'link' => '利用規約',
            ],
        ],
    ],

    'disabled' => [
        'title' => 'ああ！アカウントが無効になっているようです。',
        'warning' => "ルールに違反した場合は、通常１か月のクールダウン期間があり、その間のリクエストは考慮されません。この期間の後、必要と思われる場合はお気軽にお問い合わせください。無効にしたアカウントを1つ作成した後に新しいアカウントを作成すると、<strong>１か月のクールダウンが延長される</strong>ことに注意してください。また、<strong>作成するすべてのアカウントが、さらなる規則に違反することに注意してください</strong>。この道をたどらないでください！",

        'if_mistake' => [
            '_' => 'これが間違いだと思われる場合は、お気軽にお問い合わせください（:email を使用するか、このページの右下にある[?]をクリックしてください）。これは非常に堅実なデータに基づいて行われています。意図的な不正であると判断した場合、私達はリクエストを無視する権利を留保します。',
            'email' => 'メールアドレス',
        ],

        'reasons' => [
            'compromised' => 'アカウントが侵害されたとみなされました。 IDが確認されるまでの間、一時的に無効にされる場合があります。',
            'opening' => 'アカウントが無効になる原因にはいくつかの理由があります:',

            'tos' => [
                '_' => 'あなたは一つ以上の:community_rules もしくは :tos に違反しています。',
                'community_rules' => 'コミュニティルール',
                'tos' => '利用規約',
            ],
        ],
    ],

    'filtering' => [
        'by_game_mode' => 'ゲームモードによるメンバー',
    ],

    'force_reactivation' => [
        'reason' => [
            'inactive' => "あなたのアカウントは長い間使用されていません。",
            'inactive_different_country' => "あなたのアカウントは長期間使用されていません。",
        ],
    ],

    'login' => [
        '_' => 'ログイン',
        'button' => 'ログイン',
        'button_posting' => 'ログイン中・・・',
        'email_login_disabled' => '現在、メールでのログインは無効になっています。代わりにユーザー名を使用してください。',
        'failed' => 'ログインに失敗しました',
        'forgot' => 'パスワードを忘れましたか？',
        'info' => 'ログインして続行してください',
        'invalid_captcha' => 'ログイン試行回数の上限に到達しました。
CAPTCHA認証を成功させてから再試行してください。
(表示されない場合はページを更新してください)',
        'locked_ip' => 'あなたのIPアドレスは規制されています。数分後もう一度お試しください。',
        'password' => 'パスワード',
        'register' => "osu!アカウントを持っていませんか？新しいアカウントを作るにはこちらから",
        'remember' => 'ログイン状態を保持する',
        'title' => '続行するにはログインが必要です',
        'username' => 'ユーザー名',

        'beta' => [
            'main' => 'ベータアクセスは権限があるユーザーのみに付与されます。',
            'small' => '(osu!サポーターはすぐ手に入ります)',
        ],
    ],

    'ogp' => [
        'modding_description' => 'ビートマップ: :counts',
        'modding_description_empty' => 'このユーザーにはビートマップがありません...',

        'description' => [
            '_' => 'ランク (:ruleset): :global | :country',
            'country' => '国 :rank',
            'global' => '世界 :rank',
        ],
    ],

    'posts' => [
        'title' => ':usernameの投稿',
    ],

    'anonymous' => [
        'login_link' => 'クリックしてログイン',
        'login_text' => 'ログイン',
        'username' => 'ゲスト',
        'error' => 'ログインが必要です。',
    ],
    'logout_confirm' => 'ログアウトしてもよろしいですか？',
    'report' => [
        'button_text' => '報告',
        'comments' => '追加のコメント',
        'placeholder' => 'あなたが役に立つと思う情報を書いて下さい。',
        'reason' => '理由',
        'thanks' => 'ご報告ありがとうございます！',
        'title' => ':usernameを報告しますか？',

        'actions' => [
            'send' => 'レポートの送信',
            'cancel' => 'キャンセル',
        ],

        'options' => [
            'cheating' => 'チート',
            'inappropriate_chat' => '不適切なチャット行為',
            'insults' => 'あなた/他の人への侮辱',
            'multiple_accounts' => '複数のアカウントを管理している',
            'nonsense' => 'ナンセンスな行為',
            'other' => 'その他（下記に入力）',
            'spam' => 'スパム',
            'unwanted_content' => '不適切なコンテンツ',
        ],
    ],
    'restricted_banner' => [
        'title' => 'アカウントが制限されました！',
        'message' => '制限中はプレイヤーとの交流が禁止され、スコアは自分以外に表示されなくなります。この制限は機械的な処理によるものですので、通常 24 時間以内に解除されます。
この対応に異議の申し立てを行いたい場合は、こちらのリンクまでお問い合せください。:link',
        'message_link' => '詳細については、こちらのページをご覧ください。',
    ],
    'show' => [
        'age' => ':age歳',
        'change_avatar' => 'プロフィール画像の変更',
        'first_members' => '創設時からのメンバー',
        'is_developer' => 'osu!開発者',
        'is_supporter' => 'osu!サポーター',
        'joined_at' => '登録日 :date',
        'lastvisit' => '最終ログイン :date',
        'lastvisit_online' => '現在オンライン',
        'missingtext' => '打ち間違いがないか確認してください！（ユーザーが削除されている可能性もあります）',
        'origin_country' => '所在国 :country',
        'previous_usernames' => '以前の名前',
        'plays_with' => '使用デバイス :devices',

        'comments_count' => [
            '_' => '投稿 :link',
            'count' => ':count_delimited コメント',
        ],
        'cover' => [
            'to_0' => 'カバー画像を隠す',
            'to_1' => 'カバー画像を表示',
        ],
        'daily_challenge' => [
            'daily' => '連続記録',
            'daily_streak_best' => '最高連続記録',
            'daily_streak_current' => '現在の連続記録',
            'playcount' => '参加合計',
            'title' => 'デイリー\nチャレンジ',
            'top_10p_placements' => '上位10%',
            'top_50p_placements' => '上位50%',
            'weekly' => '週間連続記録',
            'weekly_streak_best' => '最高週間連続記録',
            'weekly_streak_current' => '現在の週間連続記録',

            'unit' => [
                'day' => ':valued',
                'week' => ':valuew',
            ],
        ],
        'edit' => [
            'cover' => [
                'button' => 'カバー画像の変更',
                'defaults_info' => 'カバー画像の選択肢は増える予定です',
                'holdover_remove_confirm' => "以前に選択したカバーは選択できなくなります。別のカバーに切り替えた後、再び選択することはできません。続行しますか？",
                'title' => 'カバー画像',

                'upload' => [
                    'broken_file' => '画像の処理に失敗しました。アップロードした画像を確認してもう一度やり直して下さい。',
                    'button' => '画像のアップロード',
                    'dropzone' => 'ここにドロップしてアップロード',
                    'dropzone_info' => 'ここにドラッグ＆ドロップでアップロードが可能です。',
                    'size_info' => '推奨の画像サイズは2000x500です',
                    'too_large' => 'アップロードファイルが大きすぎます。',
                    'unsupported_format' => 'サポートされていないフォーマットです。',

                    'restriction_info' => [
                        '_' => 'アップロードは :link でのみ可能です',
                        'link' => 'osu!サポーター',
                    ],
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'メインのゲームモード',
                'set' => ':modeをメインのゲームモードに設定する',
            ],

            'hue' => [
                'reset_no_supporter' => 'カラーをデフォルトに戻しますか？別の色に変更するにはサポータータグが必要です。',
                'title' => 'カラー',

                'supporter' => [
                    '_' => 'カラーテーマをカスタムできるのは :link のみです',
                    'link' => 'osu!supporters',
                ],
            ],
        ],

        'extra' => [
            'none' => 'なし',
            'unranked' => '最近のプレイはありません',

            'achievements' => [
                'achieved-on' => '達成日 :date',
                'locked' => 'ロック',
                'title' => '実績',
            ],
            'beatmaps' => [
                'by_artist' => 'by :artist',
                'title' => 'ビートマップ',

                'favourite' => [
                    'title' => 'お気に入りのビートマップ',
                ],
                'graveyard' => [
                    'title' => 'Graveyardのビートマップ',
                ],
                'guest' => [
                    'title' => 'ゲスト難易度のビートマップ',
                ],
                'loved' => [
                    'title' => 'Lovedされたビートマップ',
                ],
                'nominated' => [
                    'title' => 'ノミネートしたRankedビートマップ',
                ],
                'pending' => [
                    'title' => 'Pendingビートマップ',
                ],
                'ranked' => [
                    'title' => 'Ranked & Approvedのビートマップ',
                ],
            ],
            'discussions' => [
                'title' => 'ディスカッション',
                'title_longer' => '最近のディスカッション',
                'show_more' => '他のディスカッションを見る',
            ],
            'events' => [
                'title' => 'イベント',
                'title_longer' => '最近のイベント',
                'show_more' => '他のイベントを見る',
            ],
            'historical' => [
                'title' => '履歴',

                'monthly_playcounts' => [
                    'title' => 'プレイ回数の履歴',
                    'count_label' => 'プレイ数',
                ],
                'most_played' => [
                    'count' => 'プレイ回数',
                    'title' => 'プレイ回数の多いビートマップ',
                ],
                'recent_plays' => [
                    'accuracy' => '精度: :percentage',
                    'title' => '最近のプレイ（24時間以内）',
                ],
                'replays_watched_counts' => [
                    'title' => 'リプレイの再生回数',
                    'count_label' => 'リプレイ再生回数',
                ],
            ],
            'kudosu' => [
                'recent_entries' => '最近のKudosu履歴',
                'title' => 'Kudosu!',
                'total' => 'Kudosuの累計獲得数',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "このユーザーはまだkudosu!を獲得していません！",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Modding投稿:post のkudosu獲得拒否の取り消しにより :amount 獲得',
                        ],

                        'deny_kudosu' => [
                            'reset' => ':postの :amount 獲得を拒否',
                        ],

                        'delete' => [
                            'reset' => ':post の削除により :amount 取り消し',
                        ],

                        'restore' => [
                            'give' => ':post の復元により :amount 獲得',
                        ],

                        'vote' => [
                            'give' => ':post での投票により :amount 獲得',
                            'reset' => ':post の投票損失により :amount 取り消し',
                        ],

                        'recalculate' => [
                            'give' => ':post の投票再計算により :amount 獲得',
                            'reset' => ':post の投票再計算により :amount 取り消し',
                        ],
                    ],

                    'forum_post' => [
                        'give' => ':post の投稿で:giverから :amount 獲得',
                        'reset' => ':postの:giverによるkudosuリセット',
                        'revoke' => ':postの:giverによるkudosu拒否',
                    ],
                ],

                'total_info' => [
                    '_' => 'ユーザーのビートマップモデレーションへの貢献度に基いています。詳細は :link を確認して下さい。',
                    'link' => 'このページ',
                ],
            ],
            'me' => [
                'title' => 'me!',
            ],
            'medals' => [
                'empty' => "このユーザーはまだメダルを取得していません。",
                'recent' => '最新',
                'title' => 'メダル',
            ],
            'playlists' => [
                'title' => 'プレイリスト',
            ],
            'posts' => [
                'title' => '投稿',
                'title_longer' => '最近の投稿',
                'show_more' => '他の投稿を見る',
            ],
            'recent_activity' => [
                'title' => '最近のアクティビティ',
            ],
            'realtime' => [
                'title' => 'マルチプレイ',
            ],
            'top_ranks' => [
                'download_replay' => 'リプレイをダウンロード',
                'not_ranked' => 'Rankedビートマップのみがppを与えます。',
                'pp_weight' => '割合 :percentage',
                'view_details' => '詳細を表示',
                'title' => 'ランク',

                'best' => [
                    'title' => 'ベストパフォーマンス',
                ],
                'first' => [
                    'title' => '1位の記録',
                ],
                'pin' => [
                    'to_0' => 'ピン留め解除',
                    'to_0_done' => 'スコアのピン留めを解除しました',
                    'to_1' => 'ピン留め',
                    'to_1_done' => 'スコアをピン留めしました',
                ],
                'pinned' => [
                    'title' => 'ピン留めされたスコア',
                ],
            ],
            'votes' => [
                'given' => '与えた投票（３ヶ月）',
                'received' => '受け取った投票（３ヶ月）',
                'title' => '投票',
                'title_longer' => '最近の投票',
                'vote_count' => ':count_delimited 投票',
            ],
            'account_standing' => [
                'title' => 'アカウントの状態',
                'bad_standing' => "<strong>:username</strong>のアカウントはルール違反の記録があります。",
                'remaining_silence' => '<strong>:username</strong>は:durationで再び発言ができるようになります。',

                'recent_infringements' => [
                    'title' => '最近の違反',
                    'date' => '発生日',
                    'action' => 'アクション',
                    'length' => '期間',
                    'length_indefinite' => '無期限',
                    'description' => '詳細',
                    'actor' => 'by :username',

                    'actions' => [
                        'restriction' => 'BAN',
                        'silence' => 'サイレンス',
                        'tournament_ban' => 'トーナメントBAN',
                        'note' => 'メモ',
                    ],
                ],
            ],
        ],

        'info' => [
            'discord' => '',
            'interests' => '趣味',
            'location' => '現在地',
            'occupation' => '職業',
            'twitter' => '',
            'website' => 'ウェブサイト',
        ],
        'not_found' => [
            'reason_1' => 'ユーザー名を変更した可能性があります。',
            'reason_2' => 'セキュリティの問題や不正利用の可能性によりアカウントが一時的に利用できなくなる可能性があります。',
            'reason_3' => '打ち間違いがないか確認してください！',
            'reason_header' => '考えられる理由：',
            'title' => 'ユーザーが見つかりませんでした。 ｡･ﾟ･(ﾉД` )･ﾟ･｡',
        ],
        'page' => [
            'button' => 'プロフィールページを編集する',
            'description' => '<strong>me!</strong>はプロフィール上で自由に編集できる領域です。',
            'edit_big' => 'me!を編集',
            'placeholder' => 'ここにページの内容を入力',

            'restriction_info' => [
                '_' => 'この機能を解除するには:linkする必要があります。',
                'link' => 'osu!サポーター',
            ],
        ],
        'post_count' => [
            '_' => 'フォーラム投稿数 :link',
            'count' => ':count_delimited個',
        ],
        'rank' => [
            'country' => ':modeの国別ランク',
            'country_simple' => '国別ランキング',
            'global' => ':modeの世界ランク',
            'global_simple' => '世界ランキング',
            'highest' => '最高ランク: :rank (:dateに取得)',
        ],
        'season_stats' => [
            'division_top_percentage' => 'トップ :value',
            'total_score' => '合計スコア',
        ],
        'stats' => [
            'hit_accuracy' => '精度',
            'hits_per_play' => '',
            'level' => 'レベル :level',
            'level_progress' => '次のレベルまで',
            'maximum_combo' => '最大コンボ',
            'medals' => 'メダル',
            'play_count' => 'プレイ回数',
            'play_time' => 'プレイ時間',
            'ranked_score' => '合計Rankedスコア',
            'replays_watched_by_others' => 'リプレイが再生された回数',
            'score_ranks' => 'スコアランク',
            'total_hits' => '合計ヒット数',
            'total_score' => '合計スコア',
            // modding stats
            'graveyard_beatmapset_count' => 'Graveyardのビートマップ',
            'loved_beatmapset_count' => 'Lovedされたビートマップ',
            'pending_beatmapset_count' => 'Pendingビートマップ',
            'ranked_beatmapset_count' => 'Ranked & Approvedのビートマップ',
        ],
    ],

    'silenced_banner' => [
        'title' => 'あなたは現在サイレンス中です。',
        'message' => 'いくつかの機能が利用できない可能性があります。',
    ],

    'status' => [
        'all' => '全て',
        'online' => 'オンライン',
        'offline' => 'オフライン',
    ],
    'store' => [
        'from_client' => '代わりにゲームクライアントから登録してください！',
        'from_web' => 'osu!のウェブサイトで登録を完了してください',
        'saved' => 'ユーザーが作成されました',
    ],
    'verify' => [
        'title' => 'アカウントの認証',
    ],

    'view_mode' => [
        'brick' => '簡易表示',
        'card' => 'カードビュー',
        'list' => '一覧表示',
    ],
];
