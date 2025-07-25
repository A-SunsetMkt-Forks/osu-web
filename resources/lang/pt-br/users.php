<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'deleted' => '[usuário deletado]',

    'beatmapset_activities' => [
        'title' => "Histórico de modding de :user",
        'title_compact' => 'Modding',

        'discussions' => [
            'title_recent' => 'Discussões começadas recentemente',
        ],

        'events' => [
            'title_recent' => 'Eventos recentes',
        ],

        'posts' => [
            'title_recent' => 'Postagens recentes',
        ],

        'votes_received' => [
            'title_most' => 'Mais votado por (últimos 3 meses)',
        ],

        'votes_made' => [
            'title_most' => 'Mais votado (últimos 3 meses)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'Você bloqueou este usuário.',
        'comment_text' => 'Este comentário está oculto.',
        'blocked_count' => 'usuários bloqueados: (:count)',
        'hide_profile' => 'Ocultar perfil',
        'hide_comment' => 'ocultar',
        'forum_post_text' => 'Essa publicação está oculta.',
        'not_blocked' => 'Este usuário não está bloqueado.',
        'show_profile' => 'Exibir perfil',
        'show_comment' => 'exibir',
        'too_many' => 'Limite de bloqueios atingido.',
        'button' => [
            'block' => 'Bloquear',
            'unblock' => 'Desbloquear',
        ],
    ],

    'card' => [
        'gift_supporter' => 'Presentear supporter tag',
        'loading' => 'Carregando...',
        'send_message' => 'enviar mensagem',
    ],

    'create' => [
        'form' => [
            'password' => 'senha',
            'password_confirmation' => 'confirmar senha',
            'submit' => 'criar conta',
            'user_email' => 'email',
            'user_email_confirmation' => 'confirmar email',
            'username' => 'nome de usuário',

            'tos_notice' => [
                '_' => 'ao criar a conta você concorda com :link',
                'link' => 'termos de serviço',
            ],
        ],
    ],

    'disabled' => [
        'title' => 'Oh não! Parece que a sua conta foi desativada.',
        'warning' => "No caso de você ter infringido uma regra, observe que geralmente há um período de espera de um mês durante o qual não consideraremos nenhum pedido de anistia. Após esse período, você pode entrar em contato conosco caso julgue necessário. Observe que a criação de novas contas após a desativação de uma conta resultará em uma <strong> extensão desse período de espera de um mês </strong>. Observe também que, para <strong> todas as contas criadas, você está violando ainda mais as regras </strong>. É altamente recomendável que você não siga esse caminho!",

        'if_mistake' => [
            '_' => 'Se você acha que isso é um erro, você pode entrar em contato conosco (através de :email ou clicando no "?" no canto inferior direito desta página). Por favor observe que estamos sempre totalmente confiantes com nossas ações, uma vez que se baseiam em dados muito sólidos. Nós nos reservamos o direito de ignorar o seu pedido se sentirmos que você está sendo intencionalmente desonesto.',
            'email' => 'email',
        ],

        'reasons' => [
            'compromised' => 'Sua conta foi considerada comprometida. Ela pode estar desativada temporariamente enquanto sua identidade está sendo confirmada.',
            'opening' => 'Há vários motivos que podem resultar na desativação da sua conta:',

            'tos' => [
                '_' => 'Você quebrou uma ou mais das nossas :community_rules ou :tos.',
                'community_rules' => 'regras da comunidade',
                'tos' => 'termos de serviço',
            ],
        ],
    ],

    'filtering' => [
        'by_game_mode' => 'Membros por modo de jogo',
    ],

    'force_reactivation' => [
        'reason' => [
            'inactive' => "Sua conta não foi utilizada por um bom tempo.",
            'inactive_different_country' => "Sua conta não foi usada há muito tempo.",
        ],
    ],

    'login' => [
        '_' => 'Conectar-se',
        'button' => 'Conectar',
        'button_posting' => 'Conectando...',
        'email_login_disabled' => 'O login com email está desativado no momento. Por favor use o nome de usuário.',
        'failed' => 'Login incorreto',
        'forgot' => 'Esqueceu sua senha?',
        'info' => 'Por favor, conecte-se para continuar',
        'invalid_captcha' => 'Captcha inválido, atualize a página e tente novamente.',
        'locked_ip' => 'seu endereço IP está bloqueado. Por favor, espere alguns minutos.',
        'password' => 'Senha',
        'register' => "Você não tem uma conta no osu!? Faça uma!",
        'remember' => 'Lembrar deste computador',
        'title' => 'Por favor, conecte-se para prosseguir',
        'username' => 'Nome de Usuário',

        'beta' => [
            'main' => 'Acesso Beta está restrito apenas para usuários privilegiados.',
            'small' => '(osu!supporters terão acesso em breve)',
        ],
    ],

    'ogp' => [
        'modding_description' => 'Beatmaps: :counts',
        'modding_description_empty' => 'O usuário não possui nenhum beatmap...',

        'description' => [
            '_' => 'Rank (:ruleset): :global | :country',
            'country' => 'País :rank',
            'global' => 'Global :rank',
        ],
    ],

    'posts' => [
        'title' => 'postagens de :username',
    ],

    'anonymous' => [
        'login_link' => 'clique para conectar-se',
        'login_text' => 'conectar-se',
        'username' => 'Visitante',
        'error' => 'Você precisa estar conectado para fazer isso.',
    ],
    'logout_confirm' => 'Tem certeza de que deseja sair? :(',
    'report' => [
        'button_text' => 'Denunciar',
        'comments' => 'Comentários Adicionais',
        'placeholder' => 'Por favor, forneça qualquer informação que você acredite ser útil.',
        'reason' => 'Motivo',
        'thanks' => 'Obrigado por sua denúncia!',
        'title' => 'Denunciar :username?',

        'actions' => [
            'send' => 'Enviar Denúncia',
            'cancel' => 'Cancelar',
        ],

        'options' => [
            'cheating' => 'Jogando sujo / Trapaceando',
            'inappropriate_chat' => 'Comportamento inadequado em conversa',
            'insults' => 'Me insultando / outros',
            'multiple_accounts' => 'Usando diversas contas',
            'nonsense' => 'Sem sentido',
            'other' => 'Outro (escreva abaixo)',
            'spam' => 'Spam',
            'unwanted_content' => 'Enviando links com conteúdo inapropriado',
        ],
    ],
    'restricted_banner' => [
        'title' => 'Sua conta foi restrita!',
        'message' => 'Enquanto restrito, você será impossibilitado de interagir com outros jogadores e suas pontuações serão visíveis apenas para você. Isso é geralmente causado por um processo automático e provavelmente será resolvido em até 24 horas. Caso tenha interesse em recorrer contra sua restrição, por favor, <a href="mailto:accounts@ppy.sh">entre em contato com o suporte</a>.',
        'message_link' => 'Veja esta página para saber mais.',
    ],
    'show' => [
        'age' => ':age anos',
        'change_avatar' => 'mude seu avatar!',
        'first_members' => 'Aqui desde o começo',
        'is_developer' => 'osu!developer',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'Entrou em :date',
        'lastvisit' => 'Visto por último :date',
        'lastvisit_online' => 'Atualmente online',
        'missingtext' => 'Talvez você tenha feito um erro de digitação! (ou o usuário está banido)',
        'origin_country' => 'Morando em :country',
        'previous_usernames' => 'anteriormente conhecido como',
        'plays_with' => 'Joga com :devices',

        'comments_count' => [
            '_' => 'Publicado :link',
            'count' => ':count_delimited comentário|:count_delimited comentários',
        ],
        'cover' => [
            'to_0' => 'Ocultar capa',
            'to_1' => 'Mostrar capa',
        ],
        'daily_challenge' => [
            'daily' => 'Sequência diária',
            'daily_streak_best' => 'Melhor sequência diária',
            'daily_streak_current' => 'Sequência diária atual',
            'playcount' => 'Participação total',
            'title' => 'Desafio\ndiário',
            'top_10p_placements' => 'Melhores 10% nos colocados',
            'top_50p_placements' => 'Melhores 50% nos colocados',
            'weekly' => 'Sequência semanal',
            'weekly_streak_best' => 'Melhor sequência semanal',
            'weekly_streak_current' => 'Sequência semanal atual',

            'unit' => [
                'day' => ':valued',
                'week' => ':valuew',
            ],
        ],
        'edit' => [
            'cover' => [
                'button' => 'Mudar Capa de Perfil',
                'defaults_info' => 'Mais opções de capa virão no futuro',
                'holdover_remove_confirm' => "Esta capa selecionada anteriormente não está disponível para seleção. Você não pode selecionar ela após alterar para outra. Trocar?",
                'title' => 'Capa',

                'upload' => [
                    'broken_file' => 'Falha ao processar imagem. Verifique a imagem enviada e tente novamente.',
                    'button' => 'Enviar imagem',
                    'dropzone' => 'Solte aqui para enviar',
                    'dropzone_info' => 'Você também pode soltar sua imagem aqui para enviar',
                    'size_info' => 'O tamanho da capa deve ser 2400x640',
                    'too_large' => 'O arquivo enviado é muito grande.',
                    'unsupported_format' => 'Formato não suportado.',

                    'restriction_info' => [
                        '_' => 'Upload disponível apenas para :link',
                        'link' => 'osu!supporters',
                    ],
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'modo de jogo padrão',
                'set' => 'definir :mode como modo de jogo padrão',
            ],

            'hue' => [
                'reset_no_supporter' => 'Redefinir cor para padrão? A etiqueta de apoiador será necessário para alterar a cor.',
                'title' => 'Cor',

                'supporter' => [
                    '_' => 'Temas de cores personalizados disponíveis apenas para :link',
                    'link' => 'osu!supporters',
                ],
            ],
        ],

        'extra' => [
            'none' => 'nenhum',
            'unranked' => 'Nada jogado recentemente',

            'achievements' => [
                'achieved-on' => 'Conquistado em :date',
                'locked' => 'Trancado',
                'title' => 'Conquistas',
            ],
            'beatmaps' => [
                'by_artist' => 'por :artist',
                'title' => 'Beatmaps',

                'favourite' => [
                    'title' => 'Beatmaps Favoritos',
                ],
                'graveyard' => [
                    'title' => 'Beatmaps no Cemitério',
                ],
                'guest' => [
                    'title' => 'Beatmaps de Participação de Visitantes',
                ],
                'loved' => [
                    'title' => 'Beatmaps Loved',
                ],
                'nominated' => [
                    'title' => 'Beatmaps Ranqueados Nominados',
                ],
                'pending' => [
                    'title' => 'Beatmaps Pendentes',
                ],
                'ranked' => [
                    'title' => 'Beatmaps Ranqueados & Aprovados',
                ],
            ],
            'discussions' => [
                'title' => 'Discussões',
                'title_longer' => 'Discussões Recentes',
                'show_more' => 'ver mais discussões',
            ],
            'events' => [
                'title' => 'Eventos',
                'title_longer' => 'Eventos Recentes',
                'show_more' => 'ver mais eventos',
            ],
            'historical' => [
                'title' => 'Histórico',

                'monthly_playcounts' => [
                    'title' => 'Histórico de Jogo',
                    'count_label' => 'Vezes jogadas',
                ],
                'most_played' => [
                    'count' => 'vezes jogadas',
                    'title' => 'Beatmaps Mais Jogados',
                ],
                'recent_plays' => [
                    'accuracy' => 'precisão: :percentage',
                    'title' => 'Jogados Recentemente (24h)',
                ],
                'replays_watched_counts' => [
                    'title' => 'Histórico de Replays Assistidos',
                    'count_label' => 'Replays Assistidos',
                ],
            ],
            'kudosu' => [
                'recent_entries' => 'Histórico de kudosu recente',
                'title' => 'Kudosu!',
                'total' => 'Total de Kudosu Adquirido',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "Esse usuário ainda não recebeu nenhum kudosu!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Recebeu :amount por negação de kudosu na publicação :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Negou :amount na publicação :post',
                        ],

                        'delete' => [
                            'reset' => 'Perdeu :amount por postagem deletada em :post',
                        ],

                        'restore' => [
                            'give' => 'Recebeu :amount pela publicação restaurada em :post',
                        ],

                        'vote' => [
                            'give' => 'Recebeu :amount por obter votos na publicação :post',
                            'reset' => 'Perdeu :amount por perder votos na publicação :post',
                        ],

                        'recalculate' => [
                            'give' => 'Recebeu :amount por votos recalculados na publicação :post',
                            'reset' => 'Perdeu :amount por votos recalculados na publicação :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'Recebeu :amount de :giver por uma publicação em :post',
                        'reset' => 'Kudosu reiniciado por :giver na publicação :post',
                        'revoke' => 'Kudosu negado por :giver na publicação :post',
                    ],
                ],

                'total_info' => [
                    '_' => 'Baseado na quantidade de contribuições realizadas pelo usuário em moderações de beatmaps. Veja :link para mais informações.',
                    'link' => 'esta página',
                ],
            ],
            'me' => [
                'title' => 'eu!',
            ],
            'medals' => [
                'empty' => "Esse usuário não conseguiu nenhuma recentemente. ;_;",
                'recent' => 'Recente',
                'title' => 'Medalhas',
            ],
            'playlists' => [
                'title' => 'Jogos da Seleção de Música',
            ],
            'posts' => [
                'title' => 'Publicações',
                'title_longer' => 'Publicações Recentes',
                'show_more' => 'ver mais publicações',
            ],
            'recent_activity' => [
                'title' => 'Recente',
            ],
            'realtime' => [
                'title' => 'Jogos em Multiplayer',
            ],
            'top_ranks' => [
                'download_replay' => 'Baixar Replay',
                'not_ranked' => 'Apenas beatmaps ranqueados dão pp.',
                'pp_weight' => 'ajustado :percentage',
                'view_details' => 'Ver Detalhes',
                'title' => 'Classificações',

                'best' => [
                    'title' => 'Melhor Performance',
                ],
                'first' => [
                    'title' => 'Primeiros Lugares',
                ],
                'pin' => [
                    'to_0' => 'Desafixar',
                    'to_0_done' => 'Pontuação desafixada',
                    'to_1' => 'Fixar',
                    'to_1_done' => 'Pontuação fixada',
                ],
                'pinned' => [
                    'title' => 'Pontuações fixadas',
                ],
            ],
            'votes' => [
                'given' => 'Votos Dados (últimos 3 meses)',
                'received' => 'Votos Recebidos (últimos 3 meses)',
                'title' => 'Votos',
                'title_longer' => 'Votos Recentes',
                'vote_count' => ':count_delimited voto|:count_delimited votos',
            ],
            'account_standing' => [
                'title' => 'Estado da Conta',
                'bad_standing' => "A conta de <strong>:username</strong> não está num estado muito bom :(",
                'remaining_silence' => '<strong>:username</strong> vai poder falar novamente em :duration.',

                'recent_infringements' => [
                    'title' => 'Infrações Recentes',
                    'date' => 'data',
                    'action' => 'ação',
                    'length' => 'duração',
                    'length_indefinite' => 'Indefinido',
                    'description' => 'descrição',
                    'actor' => 'por :username',

                    'actions' => [
                        'restriction' => 'Banimento',
                        'silence' => 'Silenciamento',
                        'tournament_ban' => 'Ban do torneio',
                        'note' => 'Nota',
                    ],
                ],
            ],
        ],

        'info' => [
            'discord' => '',
            'interests' => 'Interesses',
            'location' => 'Local Atual',
            'occupation' => 'Ocupação',
            'twitter' => '',
            'website' => 'Website',
        ],
        'not_found' => [
            'reason_1' => 'Talvez o usuário tenha mudado seu nome.',
            'reason_2' => 'A conta pode estar temporariamente indisponível devido a problemas de abuso ou de segurança.',
            'reason_3' => 'Você pode ter feito um erro de digitação!',
            'reason_header' => 'Há algumas possíveis razões para isso:',
            'title' => 'Usuário não encontrado! ;_;',
        ],
        'page' => [
            'button' => 'Editar página do perfil',
            'description' => '<strong>eu!</strong> é uma área pessoal customizável na sua página de perfil.',
            'edit_big' => 'Me edite!',
            'placeholder' => 'Digite o conteúdo da página aqui',

            'restriction_info' => [
                '_' => 'Você precisa ser um :link para desbloquear esta funcionalidade.',
                'link' => 'osu!supporter',
            ],
        ],
        'post_count' => [
            '_' => 'Contribuiu com :link',
            'count' => ':count publicação no fórum|:count publicações no fórum',
        ],
        'rank' => [
            'country' => 'Ranking nacional de :mode',
            'country_simple' => 'Ranking Nacional',
            'global' => 'Ranking global de :mode',
            'global_simple' => 'Ranking Global',
            'highest' => 'Maior classificação: :rank em :date',
        ],
        'season_stats' => [
            'division_top_percentage' => 'Top :value',
            'total_score' => 'Pontuação total',
        ],
        'stats' => [
            'hit_accuracy' => 'Precisão',
            'hits_per_play' => '',
            'level' => 'Nível :level',
            'level_progress' => 'Progresso para o próximo nível',
            'maximum_combo' => 'Combo Máximo',
            'medals' => 'Medalhas',
            'play_count' => 'Vezes Jogadas',
            'play_time' => 'Tempo de Jogo',
            'ranked_score' => 'Pontuação Ranqueada',
            'replays_watched_by_others' => 'Replays Assistidos por Outros',
            'score_ranks' => 'Ranque em Pontuação',
            'total_hits' => 'Acertos Totais',
            'total_score' => 'Pontuação Total',
            // modding stats
            'graveyard_beatmapset_count' => 'Beatmaps no Cemitério',
            'loved_beatmapset_count' => 'Beatmaps Loved',
            'pending_beatmapset_count' => 'Beatmaps Pendentes',
            'ranked_beatmapset_count' => 'Beatmaps Ranqueados e Aprovados',
        ],
    ],

    'silenced_banner' => [
        'title' => 'Você está silenciado no momento.',
        'message' => 'Algumas ações podem estar indisponíveis.',
    ],

    'status' => [
        'all' => 'Todos',
        'online' => 'Online',
        'offline' => 'Offline',
    ],
    'store' => [
        'from_client' => 'por favor registre-se através do cliente do jogo!',
        'from_web' => 'por favor registre-se através do site',
        'saved' => 'Usuário criado',
    ],
    'verify' => [
        'title' => 'Verificação de Conta',
    ],

    'view_mode' => [
        'brick' => 'Visualização em blocos',
        'card' => 'Visualizar em card',
        'list' => 'Visualizar em lista',
    ],
];
