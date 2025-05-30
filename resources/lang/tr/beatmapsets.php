<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => 'Bu beatmap henüz indirilmeye açık değil.',
        'parts-removed' => 'Bu beatmapin bazı bölümleri içerik oluşturucunun ya da üçüncü parti hak sahibinin isteği üzerine kaldırılmıştır.',
        'more-info' => 'Daha fazla bilgi için buraya göz atın.',
        'rule_violation' => 'Bu beatmap üzerinde yer alan bazı varlıklar osu!\'da kullanıma uygun olmadığına karar verildikten sonra kaldırıldı.',
    ],

    'cover' => [
        'deleted' => 'Silinmiş beatmap',
    ],

    'download' => [
        'limit_exceeded' => 'Yavaş ol, daha çok oyna.',
        'no_mirrors' => 'Herhangi bir indirme sunucusu mevcut değil.',
    ],

    'featured_artist_badge' => [
        'label' => 'Featured artist',
    ],

    'index' => [
        'title' => 'Beatmap Kataloğu',
        'guest_title' => 'Beatmapler',
    ],

    'panel' => [
        'empty' => 'beatmap yok',

        'download' => [
            'all' => 'indir',
            'video' => 'video ile indir',
            'no_video' => 'videosuz indir',
            'direct' => 'osu!direct\'de aç',
        ],
    ],

    'nominate' => [
        'bng_limited_too_many_rulesets' => 'Deneme sürecindeki aday göstericiler birden fazla kural seti aday gösteremez.',
        'full_nomination_required' => 'Bir kural setinin son adaylığını gerçekleştirmek için tam yetkili bir aday gösterici olmanız gerekir.',
        'hybrid_requires_modes' => 'Karma bir beatmap seti, adaylık için en az bir oyun modu seçmenizi gerektirir.',
        'incorrect_mode' => ':mode modunu aday göstermek için izniniz yok.',
        'invalid_limited_nomination' => 'Bu beatmap geçersiz adaylara sahip ve bu durumda onaylanamaz.',
        'invalid_ruleset' => 'Bu aday geçersiz kural setlerine sahip.',
        'too_many' => 'Adaylık şartı zaten yerine getirildi.',
        'too_many_non_main_ruleset' => 'Ana kural seti dışındaki adaylık gereksinimi zaten karşılandı.',

        'dialog' => [
            'confirmation' => 'Bu beatmapi aday göstermek istediğinize emin misiniz?',
            'different_nominator_warning' => 'Bu beatmapi farklı seçmenlerle nitelendirmek, nitelendirme sırası konumunu sıfırlayacaktır.',
            'header' => 'Beatmap aday gösterin',
            'hybrid_warning' => 'not: sadece bir kez aday gösterebilirsiniz, bu yüzden lütfen istediğiniz tüm oyun modlarını aday gösterdiğinizden emin olun',
            'current_main_ruleset' => 'Şu anki kural dizisi: :ruleset',
            'which_modes' => 'Hangi modlar için aday gösterilsin?',
        ],
    ],

    'nsfw_badge' => [
        'label' => 'Müstehcen',
    ],

    'show' => [
        'discussion' => 'Tartışma',

        'admin' => [
            'full_size_cover' => 'Kapak resmini tam boyutlu görüntüle',
        ],

        'deleted_banner' => [
            'title' => 'Bu beatmap silindi.',
            'message' => '(bunu sadece moderatörler görebilir)',
        ],

        'details' => [
            'by_artist' => ':artist tarafından',
            'favourite' => 'Beatmap setini favorilere ekle',
            'favourite_login' => 'Beatmapi favorilere eklemek için giriş yap',
            'logged-out' => 'Herhangi bir beatmapi indirmeden önce giriş yapmalısınız!',
            'mapped_by' => ':mapper tarafından yapıldı',
            'mapped_by_guest' => ':mapper tarafından konuk zorluk',
            'unfavourite' => 'Beatmap setini favorilerden çıkar',
            'updated_timeago' => 'son güncelleme: :timeago',

            'download' => [
                '_' => 'İndir',
                'direct' => '',
                'no-video' => 'Video olmadan',
                'video' => 'Video ile',
            ],

            'login_required' => [
                'bottom' => 'daha fazla özelliğe erişmek için',
                'top' => 'Giriş Yap',
            ],
        ],

        'details_date' => [
            'approved' => 'onaylandı: :timeago',
            'loved' => 'sevilenlere eklendi: :timeago',
            'qualified' => 'nitelikli oldu: :timeago',
            'ranked' => 'dereceli oldu: :timeago',
            'submitted' => 'gönderildi: :timeago',
            'updated' => 'son güncelleme: :timeago',
        ],

        'favourites' => [
            'limit_reached' => 'Favorilerinizde çok fazla beatmap\'iniz var! Lütfen devam etmeden önce birini çıkartın.',
        ],

        'hype' => [
            'action' => 'Eğer beğendiyseniz <strong>Dereceli</strong> statüsüne erişmesine yardımcı olmak için bu mapi gazlayın.',

            'current' => [
                '_' => 'Bu map şu anda :status.',

                'status' => [
                    'pending' => 'beklemede',
                    'qualified' => 'nitelikli',
                    'wip' => 'yapım aşamasında',
                ],
            ],

            'disqualify' => [
                '_' => 'Eğer bu beatmapte bir sorun bulduysanız, lütfen :link diskalifiye edin.',
            ],

            'report' => [
                '_' => 'Eğer bu beatmapte bir sorun bulduysanız, takımı uyarmak için lütfen :link bildirin.',
                'button' => 'Sorun Bildir',
                'link' => 'buradan',
            ],
        ],

        'info' => [
            'description' => 'Açıklama',
            'genre' => 'Tür',
            'language' => 'Dil',
            'mapper_tags' => 'Mapper Etiketleri',
            'no_scores' => 'Veriler hala hesaplanıyor...',
            'nominators' => 'Nominator\'ler',
            'nsfw' => 'Müstehcen içerik',
            'offset' => 'Çevrimiçi ofset',
            'points-of-failure' => 'Başarısız Olunan Kısımlar',
            'source' => 'Kaynak',
            'storyboard' => 'Bu beatmap storyboard içeriyor',
            'success-rate' => 'Başarı Oranı',
            'user_tags' => 'Kullanıcı Etiketleri',
            'video' => 'Bu beatmap video içeriyor',
        ],

        'nsfw_warning' => [
            'details' => 'Bu beatmap müstehcen, ofansif, veya rahatsız edici içerik içermektedir. Yine de görüntülemek istiyor musunuz?',
            'title' => 'Müstehcen İçerik',

            'buttons' => [
                'disable' => 'Uyarıyı devre dışı bırak',
                'listing' => 'Beatmap kataloğu',
                'show' => 'Göster',
            ],
        ],

        'scoreboard' => [
            'achieved' => ':when oynandı',
            'country' => 'Ülke Sıralaması',
            'error' => 'Sıralama yüklenemedi',
            'friend' => 'Arkadaş Sıralaması',
            'global' => 'Dünya Sıralaması',
            'supporter-link' => 'Aldığınız tüm süslü özellikleri görmek için buraya <a href=":link">tıklayın</a>!',
            'supporter-only' => 'Arkadaş ve ülke sıralamasına erişebilmek için osu!supporter olman gerekiyor!',
            'team' => 'Takım Sıralaması',
            'title' => 'Skor tahtası',

            'headers' => [
                'accuracy' => 'İsabetlilik',
                'combo' => 'Maks Kombo',
                'miss' => 'Iska',
                'mods' => 'Modlar',
                'pin' => 'Sabitle',
                'player' => 'Oyuncu',
                'pp' => '',
                'rank' => 'Sıralama',
                'score' => 'Skor',
                'score_total' => 'Toplam Skor',
                'time' => 'Zaman',
            ],

            'no_scores' => [
                'country' => 'Ülkenizde hiç kimse henüz bu mapte bir skora sahip değil!',
                'friend' => 'Hiçbir arkadaşın henüz bu mapte bir skora sahip değil!',
                'global' => 'Henüz skor yok. Biraz skor yapmaya ne dersin?',
                'loading' => 'Skorlar yükleniyor...',
                'team' => 'Takımınızdan hiç kimse henüz bu beatmapde bir skor elde etmedi!',
                'unranked' => 'Derecelendirilmemiş beatmap.',
            ],
            'score' => [
                'first' => 'Lider',
                'own' => 'En İyi Skorun',
            ],
            'supporter_link' => [
                '_' => 'Aldığınız tüm süslü özellikleri görmek için :here tıklayın!',
                'here' => 'burada',
            ],
        ],

        'stats' => [
            'cs' => 'Daire Boyutu',
            'cs-mania' => 'Tuş Sayısı',
            'drain' => 'HP Drain',
            'accuracy' => 'İsabetlilik',
            'ar' => 'Yaklaşım Oranı',
            'stars' => 'Zorluk',
            'total_length' => 'Uzunluk',
            'bpm' => 'BPM',
            'count_circles' => 'Daire Sayısı',
            'count_sliders' => 'Slider Sayısı',
            'offset' => 'Çevrimiçi ofset: :offset',
            'user-rating' => 'Kullanıcı Reytingi',
            'rating-spread' => 'Reyting Dağılımı',
            'nominations' => 'Adaylıklar',
            'playcount' => 'Oynama sayısı',
        ],

        'status' => [
            'ranked' => 'Dereceli',
            'approved' => 'Onaylı',
            'loved' => 'Sevilen',
            'qualified' => 'Nitelikli',
            'wip' => 'Yapım Aşamasında',
            'pending' => 'Beklemede',
            'graveyard' => 'Mezarlıkta',
        ],
    ],

    'spotlight_badge' => [
        'label' => 'Spotlight',
    ],
];
