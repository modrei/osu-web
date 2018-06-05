<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'discussion-posts' => [
        'store' => [
            'error' => 'Salvarea postării nu a reușit',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Actualizarea votului nu a reușit',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'permite kudosu',
        'delete' => 'șterge',
        'deleted' => 'Șters de :editor :delete_time.',
        'deny_kudosu' => 'refuză kudosu',
        'edit' => 'editează',
        'edited' => 'Ultima dată editat de :editor :update_time.',
        'kudosu_denied' => 'A refuzat să primească kudosu.',
        'message_placeholder' => 'Scrie aici pentru a posta',
        'message_placeholder_deleted_beatmap' => 'Această dificultate a fost ștearsă, deci e posibil să nu mai fie discutată.',
        'message_type_select' => 'Selectează tipul comentariului',
        'reply_notice' => 'Apasă enter pentru a răspunde.',
        'reply_placeholder' => 'Scrie-ți răspunsul aici',
        'require-login' => 'Te rugăm să te autentifici pentru a posta sau a răspunde',
        'resolved' => 'Rezolvat',
        'restore' => 'restabilește',
        'title' => 'Discuții',

        'collapse' => [
            'all-collapse' => 'Strânge tot',
            'all-expand' => 'Extinde tot',
        ],

        'empty' => [
            'empty' => 'Nicio discuție încă!',
            'hidden' => 'Nicio discuție nu se potrivește cu filtrul selectat.',
        ],

        'message_hint' => [
            'in_general' => 'Această postare va merge la discuția generală beatmapset. Pentru a modifica acest beatmap, începeți mesajul cu marca temporală (ex: 00:12:345).',
            'in_timeline' => 'Pentru a modifica mai multe marcaje de timp, postează de mai multe ori (o postare pe marcaj temporal).',
        ],

        'message_type' => [
            'disqualify' => 'Descalifică',
            'hype' => 'Entuziasm!',
            'mapper_note' => 'Notă',
            'nomination_reset' => 'Resetați nominalizarea',
            'praise' => 'Laudă',
            'problem' => 'Problemă',
            'suggestion' => 'Sugestie',
        ],

        'mode' => [
            'events' => 'Istoric',
            'general' => 'General :scope',
            'timeline' => 'Cronologie',
            'scopes' => [
                'general' => 'Această dificultate',
                'generalAll' => 'Toate dificultățile',
            ],
        ],

        'new' => [
            'timestamp' => 'Marcaj de timp',
            'timestamp_missing' => 'ctrl-c în modul de editare și lipește-ți mesajul pentru a adăuga un marcaj de timp!',
            'title' => 'Discuție nouă',
        ],

        'show' => [
            'title' => ':title mapat de :mapper',
        ],

        'sort' => [
            '_' => 'Ordonat după:',
            'created_at' => 'data creării',
            'timeline' => 'cronologie',
            'updated_at' => 'ultima actualizare',
        ],

        'stats' => [
            'deleted' => 'Șters',
            'mapper_notes' => 'Note',
            'mine' => 'Ale mele',
            'pending' => 'În așteptare',
            'praises' => 'Laude',
            'resolved' => 'Rezolvat',
            'total' => 'Tot',
        ],

        'status-messages' => [
            'approved' => 'Acest beatmap a fost aprobat pe :date!',
            'graveyard' => "Acest beatmap nu a fost actualizat din :date și este cel mai probabil abandonat de către creator...",
            'loved' => 'Acest beatmap a fost adăugat la \'loved\' pe :date!',
            'ranked' => 'Acest beatmap a fost clasat pe :date!',
            'wip' => 'Notă: Acest beatmap este marcat ca o lucrare în desfășurare de către creator.',
        ],

    ],

    'hype' => [
        'button' => 'Hype Beatmap!',
        'button_done' => 'Deja Hyped!',
        'confirm' => "Ești sigur? Acest lucru îți va folosi una din restul tău de :n hype rămase și nu poate fi anulat.",
        'explanation' => 'Hype acest beatmap pentru a-l face mai vizibil pentru nominalizare și clasament!',
        'explanation_guest' => 'Conectează-te și hype acest beatmap pentru a-l face mai vizibil pentru nominalizare și clasament!',
        'new_time' => "O să primești alt hype pe :new_time.",
        'remaining' => 'Tu mai ai :remaining hype rămase.',
        'required_text' => 'Hype: :current/:required',
        'section_title' => 'Trenul Hype',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Spune-ți părerea',
    ],

    'nominations' => [
        'disqualification_prompt' => 'Motiv pentru descalificare?',
        'disqualified_at' => 'Descalificat :time_ago (:reason).',
        'disqualified_no_reason' => 'niciun răspuns specificat',
        'disqualify' => 'Descalificare',
        'incorrect_state' => 'Eroare la efectuarea acestei acțiuni, încearcă să reîncarci pagina.',
        'nominate' => 'Nominalizează',
        'nominate_confirm' => 'Nominalizezi acest beatmap?',
        'nominated_by' => 'nominalizat de :users',
        'qualified' => 'Estimat pentru a fi clasat pe :date, dacă nu sunt găsite probleme.',
        'qualified_soon' => 'Estimat să fie clasat în curând, dacă nu sunt găsite probleme.',
        'required_text' => 'Nominalizări: :current/:required',
        'reset_message_deleted' => 'șters',
        'title' => 'Statutul de nominalizare',
        'unresolved_issues' => 'Încă există probleme nerezolvate care trebuie să fie abordate mai întâi.',

        'reset_at' => [
            'nomination_reset' => 'Procesul de nominalizare a fost resetat :time_ago de :user cu noua problemă :discussion (:message).',
            'disqualify' => 'Descalificat :time_ago de :user cu noua problemă :discussion (:message).',
        ],

        'reset_confirm' => [
            'nomination_reset' => 'Ești sigur? Postarea unei probleme noi va reseta procesul de nominalizare.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'scrieți cuvinte cheie...',
            'options' => 'Mai multe opțiuni de căutare',
            'not-found' => 'niciun rezultat',
            'not-found-quote' => '... nup, nimic găsit.',
            'filters' => [
                'general' => 'General',
                'mode' => 'Mod',
                'status' => 'Statut de clasificare',
                'genre' => 'Gen',
                'language' => 'Limbă',
                'extra' => 'extra',
                'rank' => 'Clasament atins',
                'played' => 'Jucat',
            ],
            'sorting' => [
                'title' => 'titlu',
                'artist' => 'artist',
                'difficulty' => 'dificultate',
                'updated' => 'actualizat',
                'ranked' => 'clasat',
                'rating' => 'evaluare',
                'plays' => 'numărul de jocuri',
                'relevance' => 'relevanță',
                'nominations' => 'nominalizări',
            ],
        ],
        'mode' => 'Mod',
        'status' => 'Statutul de clasament',
        'source' => 'de la :source',
        'load-more' => 'Încarcă mai multe...',
    ],
    'general' => [
        'recommended' => 'Dificultatea recomandată',
        'converts' => 'Include beatmaps convertite',
    ],
    'mode' => [
        'any' => 'Oricare',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
    ],
    'status' => [
        'any' => 'Oricare',
        'ranked-approved' => 'Clasate & Aprobate',
        'approved' => 'Aprobate',
        'qualified' => 'Calificate',
        'loved' => 'Loved',
        'faves' => 'Favorite',
        'pending' => 'În așteptare',
        'graveyard' => 'Cimitir',
        'my-maps' => 'Mapele mele',
    ],
    'genre' => [
        'any' => 'Oricare',
        'unspecified' => 'Nespecificat',
        'video-game' => 'Joc video',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Altul',
        'novelty' => 'Noutate',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Electronică',
    ],
    'mods' => [
        '4K' => '',
        '5K' => '',
        '6K' => '',
        '7K' => '',
        '8K' => '',
        '9K' => '',
        'AP' => '',
        'DT' => '',
        'EZ' => '',
        'FI' => '',
        'FL' => '',
        'HD' => '',
        'HR' => '',
        'HT' => '',
        'NC' => '',
        'NF' => '',
        'NM' => '',
        'PF' => '',
        'Relax' => '',
        'SD' => '',
        'SO' => '',
        'TD' => '',
    ],
    'language' => [
        'any' => '',
        'english' => 'Engleză',
        'chinese' => 'Chineză',
        'french' => 'Franceză',
        'german' => 'Germană',
        'italian' => 'Italiană',
        'japanese' => 'Japoneză',
        'korean' => 'Coreeană',
        'spanish' => 'Spaniolă',
        'swedish' => 'Suedeză',
        'instrumental' => 'Instrumentală',
        'other' => 'Altul',
    ],
    'played' => [
        'any' => 'Oricare',
        'played' => 'Jucat',
        'unplayed' => 'Nejucat',
    ],
    'extra' => [
        'video' => 'Are video',
        'storyboard' => 'Are stroyboard',
    ],
    'rank' => [
        'any' => 'Oricare',
        'XH' => 'SS de argint',
        'X' => '',
        'SH' => 'S de argint',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
];