<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'edit' => [
        'title_compact' => 'การตั้งค่า',
        'username' => 'ชื่อผู้ใช้',

        'avatar' => [
            'title' => 'รูปโปรไฟล์',
            'reset' => 'รีเซ็ต',
            'rules' => 'โปรดตรวจสอบให้แน่ใจว่า avatar ของคุณเป็นไปตาม :link.<br/> ซึ่งหมายความว่ามันจะต้องเป็น <strong> เหมาะสำหรับทุกวัย </strong> เช่น ไม่มีภาพลามกหยาบคายหรือเนื้อหาที่มีการชักจูง',
            'rules_link' => 'กฎของชุมชน',
        ],

        'email' => [
            'new' => 'อีเมลใหม่',
            'new_confirmation' => 'ยืนยันอีเมล',
            'title' => 'อีเมล',
            'locked' => [
                '_' => 'โปรดติดต่อ :accounts หากคุณต้องการอัปเดตอีเมลของคุณ',
                'accounts' => 'ทีมสนับสนุนบัญชี',
            ],
        ],

        'legacy_api' => [
            'api' => 'api',
            'irc' => 'irc',
            'title' => 'API เดิม',
        ],

        'password' => [
            'current' => 'รหัสผ่านปัจจุบัน',
            'new' => 'รหัสผ่านใหม่',
            'new_confirmation' => 'ยืนยันรหัสผ่าน',
            'title' => 'รหัสผ่าน',
        ],

        'profile' => [
            'country' => 'ประเทศ',
            'title' => 'โปรไฟล์',

            'country_change' => [
                '_' => "ดูเหมือนว่าประเทศในบัญชีของคุณไม่ตรงกับประเทศที่คุณอาศัยอยู่ :update_link.",
                'update_link' => 'อัปเดตเป็น :country',
            ],

            'user' => [
                'user_discord' => '',
                'user_from' => 'ที่อยู่ปัจจุบัน',
                'user_interests' => 'สิ่งที่สนใจ',
                'user_occ' => 'อาชีพ',
                'user_twitter' => '',
                'user_website' => 'เว็บไซต์',
            ],
        ],

        'signature' => [
            'title' => 'ลายเซ็น',
            'update' => 'อัพเดต',
        ],
    ],

    'github_user' => [
        'info' => "หากคุณเป็นผู้มีส่วนร่วมในพื้นที่เก็บข้อมูลโอเพ่นซอร์สของ osu! การเชื่อมโยงบัญชี GitHub ของคุณที่นี่จะเชื่อมโยงรายการบันทึกการเปลี่ยนแปลงของคุณกับ osu! ประวัติโดยย่อ. บัญชี GitHub ที่ไม่มีประวัติการมีส่วนร่วมกับ osu! ไม่สามารถเชื่อมโยงได้",
        'link' => 'เชื่อมโยงบัญชี GitHub',
        'title' => 'GitHub',
        'unlink' => 'ยกเลิกการเชื่อมโยงบัญชี GitHub',

        'error' => [
            'already_linked' => 'บัญชี GitHub นี้เชื่อมโยงกับผู้ใช้รายอื่นแล้ว',
            'no_contribution' => 'ไม่สามารถเชื่อมโยงบัญชี GitHub โดยไม่มีประวัติการมีส่วนร่วมใน osu! ที่เก็บ',
            'unverified_email' => 'โปรดยืนยันอีเมลหลักของคุณบน GitHub จากนั้นลองเชื่อมโยงบัญชีของคุณอีกครั้ง',
        ],
    ],

    'notifications' => [
        'beatmapset_discussion_qualified_problem' => 'ได้รับการแจ้งเตือนเกียวกับปัญหาของบีทแมพที่ผ่านการรับรองกับโหมดต่อไปนี้',
        'beatmapset_disqualify' => 'ได้รับการแจ้งเตือนเมื่อบีทแมพในโหมดที่ท่านเลือกถูกตัดสิทธิ์',
        'comment_reply' => 'รับการแจ้งเตือนสำหรับการตอบกลับความคิดเห็นของคุณ',
        'title' => 'การแจ้งเตือน',
        'topic_auto_subscribe' => 'เปิดการแจ้งเตือนอัตโนมัติในกระทู้ที่คุณสร้างขึ้น',

        'options' => [
            '_' => 'วิธีการรับการแจ้งเตือน',
            'beatmap_owner_change' => 'ระดับความยากของแขก',
            'beatmapset:modding' => 'การวิจารณ์บีทแมพ',
            'channel_message' => 'ข้อความส่วนตัว',
            'channel_team' => '',
            'comment_new' => 'ความคิดเห็นใหม่',
            'forum_topic_reply' => 'ข้อความตอบกลับในกระทู้',
            'mail' => 'อีเมล',
            'mapping' => 'ผู้ทำบีทแมพ',
            'push' => 'ส่งการแจ้งเตือน',
        ],
    ],

    'oauth' => [
        'authorized_clients' => 'ไคลเอนต์ที่ได้รับการยืนยัน',
        'own_clients' => 'ไคลเอนต์ของตนเอง',
        'title' => 'OAuth',
    ],

    'options' => [
        'beatmapset_show_nsfw' => 'ซ่อนคำเตือนเกี่ยวกับเนื้อหาที่ล่อแหลมในบีทแมพ',
        'beatmapset_title_show_original' => 'แสดงข้อมูลของ บีทแมพ ในภาษาดั้งเดิม',
        'title' => 'ตัวเลือก',

        'beatmapset_download' => [
            '_' => 'ประเภทการดาวน์โหลดบีทแมพเริ่มต้น',
            'all' => 'พร้อมวิดีโอ ถ้าใช้ได้',
            'direct' => 'เปิดใน osu!direct',
            'no_video' => 'โดยที่ไม่มีวิดีโอ',
        ],
    ],

    'playstyles' => [
        'keyboard' => 'คีย์บอร์ด',
        'mouse' => 'เมาส์',
        'tablet' => 'แท็บเล็ต',
        'title' => 'รูปแบบการเล่น',
        'touch' => 'จอสัมผัส',
    ],

    'privacy' => [
        'friends_only' => 'บล็อกข้อความส่วนตัวจากคนที่ไม่ได้อยู่ในรายชื่อเพื่อน',
        'hide_online' => 'ซ่อนสถานะออนไลน์ของคุณ',
        'title' => 'ความเป็นส่วนตัว',
    ],

    'security' => [
        'current_session' => 'ปัจจุบัน',
        'end_session' => 'สิ้นสุดเซสชัน',
        'end_session_confirmation' => 'ขั้นตอนนี้จะสิ้นสุดเซสชันของคุณในอุปกรณ์นั้นทันที คุณแน่ใจไหม?',
        'last_active' => 'ใช้งานล่าสุด:',
        'title' => 'ความปลอดภัย',
        'web_sessions' => 'เซสชั่นของเว็บ',
    ],

    'update_email' => [
        'update' => 'อัปเดต',
    ],

    'update_password' => [
        'update' => 'อัปเดต',
    ],

    'verification_completed' => [
        'text' => 'ตอนนี้คุณสามารถปิดแท็บ/หน้าต่างนี้ได้',
        'title' => 'การยืนยันตัวตนสำเร็จ',
    ],

    'verification_invalid' => [
        'title' => 'ลิงก์ยืนยันตนไม่ถูกต้องหรือหมดอายุแล้ว',
    ],
];
