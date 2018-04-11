<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
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
            'error' => 'Impossible de sauvegarder le post',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Impossible de modifier le vote',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'accorder le kudosu',
        'delete' => 'supprimer',
        'deleted' => 'supprimé par :editor :delete_time',
        'deny_kudosu' => 'refuser le kudosu',
        'edit' => 'éditer',
        'edited' => 'Dernière modification par :editor :update_time',
        'kudosu_denied' => 'Le kudosu a été refusé pour ceci.',
        'message_placeholder' => 'Écrivez ici pour poster',
        'message_placeholder_deleted_beatmap' => 'Cette difficulté a été supprimée, impossible de discuter de celle-ci.',
        'message_type_select' => 'Sélectionnez un type de commentaire',
        'reply_notice' => 'Appuyez sur Entrée pour répondre.',
        'reply_placeholder' => 'Écrivez votre réponse ici',
        'require-login' => 'Veuillez vous connecter pour poster ou répondre', // Base text changed from "log" to "sign"
        'resolved' => 'Résolu',
        'restore' => 'restaurer',
        'title' => 'Discussions',

        'collapse' => [
            'all-collapse' => 'Tout replier',
            'all-expand' => 'Tout déplier',
        ],

        'empty' => [
            'empty' => 'Pas de discussion !',
            'hidden' => 'Aucune discussion ne correspond à vos critères.',
        ],

        'message_hint' => [
            'in_general' => 'Ce post va aller dans la discussion générale du beatmapset. Pour modder cette beatmap, précisez le temps (ex. 00:12:345).',
            'in_timeline' => 'Pour modder plusieurs temps, faites plusieurs posts (un post par temps).',
        ],

        'message_type' => [
            'hype' => 'Hype!',
            'mapper_note' => 'Note',
            'praise' => 'Hommage',
            'problem' => 'Problème',
            'suggestion' => 'Suggestion',
        ],

        'mode' => [
            'events' => 'Historique',
            'general' => 'General :scope',
            'timeline' => 'Chronologie',
            'scopes' => [
                'general' => 'Cette difficulté',
                'generalAll' => 'Toutes les difficultés',
            ],
        ],

        'new' => [
            'timestamp' => 'Horodatage',
            'timestamp_missing' => 'ctrl-c en mode édition et collez votre message pour ajouter un horodatage !',
            'title' => 'Nouvelle Discussion',
        ],

        'show' => [
            'title' => 'Discussion de la beatmap',
        ],

        'sort' => [
            '_' => 'Trié par:',
            'created_at' => 'Date de création',
            'timeline' => 'chronologie',
            'updated_at' => 'Dernière mise à jour',
        ],

        'stats' => [
            'deleted' => 'Supprimé',
            'mapper_notes' => 'Notes',
            'mine' => 'Moi',
            'pending' => 'En attente',
            'praises' => 'Hommages',
            'resolved' => 'Résolu',
            'total' => 'Tout',
        ],

        'status-messages' => [
            'approved' => 'Cette beatmap a été approuvée le :date!',
            'graveyard' => "Cette beatmap n'a pas été modifiée depuis :date et a été sûrement abandonée par son créateur...",
            'loved' => 'Cette beatmap a été ajoutée pour être loved le :date!',
            'ranked' => 'Cette beatmap a été clasée le :date!',
            'wip' => 'Note: Cette beatmap a été marquée comme en cours par son créateur.',
        ],

    ],

    'hype' => [
        'button' => 'Hyper la Beatmap !',
        'button_done' => 'Déjà hypée !',
        'confirm' => "Vous êtes sûr ? Ceci va utiliser un de vos :n hypes restants et l'action ne peut être annulé.",
        'explanation' => 'Hyper cette beatmap sert à la rendre plus visible pour sa nomination et son classement !',
        'explanation_guest' => 'Connectez-vous et hypez cette beatmap pour la rendre plus visible pour sa nomination et son classement !',
        'new_time' => 'Vous obtiendrez un point de hype :new_time.',
        'remaining' => 'Vous avez :remaining hypes restants.',
        'required_text' => 'Hype: :current/:required',
        'section_title' => 'Train de la hype',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Laisser un avis',
    ],

    'nominations' => [
        'disqualification_prompt' => 'Raison de la disqualification?',
        'disqualified_at' => 'disqualifiée :time_ago (:reason).',
        'disqualified_no_reason' => 'aucune raison spécifiée',
        'disqualify' => 'Disqualifier',
        'incorrect_state' => "Erreur lors de l'action, merci de réesayer.",
        'nominate' => 'Nominer',
        'nominate_confirm' => 'Nominer cette beatmap?',
        'nominated_by' => 'nominé par :users',
        'qualified' => "Map classée environ le :date, si aucun problème n'est trouvé.",
        'qualified_soon' => "Beatmap bientôt classée, si aucun problème n'est trouvé.",
        'required_text' => 'Nominations: :current/:required',
        'reset_at' => 'Les nominations sont réinitialisés :time_ago par le nouveau problème :discussion.',
        'reset_confirm' => 'Vous êtes sûr ? Poster un nouveau problème va réinitialiser les nominations.',
        'title' => 'Statut de la nomination',
        'unresolved_issues' => 'There are still unresolved issues that must be addressed first.',
    ],

    'listing' => [
        'search' => [
            'prompt' => 'Tapez des mots-clés...',
            'options' => 'Plus de critères de recherche',
            'not-found' => 'Aucun résultat',
            'not-found-quote' => '... non, rien trouvé.',
            'filters' => [
                'general' => 'Géneral',
                'mode' => 'Mode',
                'status' => 'Statut du Classement',
                'genre' => 'Genre',
                'language' => 'Langue',
                'extra' => 'supplément',
                'rank' => 'Rang Atteint',
            ],
        ],
        'mode' => 'Mode',
        'status' => 'Classification',
        'mapped-by' => 'mappé par :mapper',
        'source' => 'de :source',
        'load-more' => 'Charger plus',
    ],
    'general' => [
        'recommended' => 'Difficulté recommandée',
        'converts' => 'Inclure les beatmaps converties',
    ],
    'mode' => [
        'any' => 'Tous',
        'osu' => 'osu!',
        'taiko' => 'osu!taiko',
        'fruits' => 'osu!catch',
        'mania' => 'osu!mania',
    ],
    'status' => [
        'any' => 'Tous',
        'ranked-approved' => 'Classifiée & approuvée',
        'approved' => 'Approuvée',
        'qualified' => 'Qualifiée',
        'loved' => 'Loved',
        'faves' => 'Favoris',
        'pending' => 'En attente',
        'graveyard' => 'Cimetière',
        'my-maps' => 'Mes maps',
    ],
    'genre' => [
        'any' => 'Tous',
        'unspecified' => 'Non spécifié',
        'video-game' => 'Jeu vidéo',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Autre',
        'novelty' => 'Novelty',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Electronic',
    ],
    'mods' => [
        '4K' => '4K',
        '5K' => '5K',
        '6K' => '6K',
        '7K' => '7K',
        '8K' => '8K',
        '9K' => '9K',
        'AP' => 'Auto Pilot',
        'DT' => 'Double Time',
        'EZ' => 'Easy Mode',
        'FI' => 'Fade In',
        'FL' => 'Flashlight',
        'HD' => 'Hidden',
        'HR' => 'Hard Rock',
        'HT' => 'Half Time',
        'NC' => 'Nightcore',
        'NF' => 'No Fail',
        'NM' => 'Sans mods',
        'PF' => 'Perfect',
        'Relax' => 'Relax',
        'SD' => 'Sudden Death',
        'SO' => 'Spun Out',
        'TD' => 'Appareil tactile',
    ],
    'language' => [
        'any' => 'Tous',
        'english' => 'Anglais',
        'chinese' => 'Chinois',
        'french' => 'Français',
        'german' => 'Allemand',
        'italian' => 'Italien',
        'japanese' => 'Japonais',
        'korean' => 'Coréen',
        'spanish' => 'Espagnol',
        'swedish' => 'Suédois',
        'instrumental' => 'Instrumentale',
        'other' => 'Autre',
    ],
    'extra' => [
        'video' => 'Avec vidéo',
        'storyboard' => 'Avec storyboard',
    ],
    'rank' => [
        'any' => "N'importe",
        'XH' => 'SS argenté',
        'X' => 'SS',
        'SH' => 'S argenté',
        'S' => 'S',
        'A' => 'A',
        'B' => 'B',
        'C' => 'C',
        'D' => 'D',
    ],
];
