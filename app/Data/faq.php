<?php

return [
    'titles' => [
        'main_Title' =>  "Des questions vous taraudent ?",
        'sub_Title1' => "FAQ KENKO-WEB",
        'sub_Title2' => "FAQ KENKO-HO",
    ],
    'kenkoHo' => [
        [
            'question' => "Comment accéder à la plateforme Kenko-Ho ?",
            'answer' => "L'accès est réservé aux clients suivis par <strong>Christel Rodriguez Perez</strong>, conseillère dōTERRA. Vous pouvez me contacter via le formulaire de contact ou par email/téléphone (coordonnées en bas de page)."
        ],
        [
            'question' => "Que propose la plateforme Kenko-Ho ?",
            'answer' => "Kenko-Ho propose des ressources téléchargeables pour aider les clients à devenir autonomes dans leur bien-être : huiles essentielles, nutriments, alimentation, Reiki, etc."
        ],
        [
            'question' => "Est-ce que l'accès est payant ?",
            'answer' => "L'accès est gratuit, à condition d'être client dōTERRA auprès de <strong>Christel Rodriguez Perez</strong>."
        ],
        [
            'question' => "Que vous propose votre conseillère ?",
            'answer' => "Mon but est de vous aider à retrouver votre bien-être grâce aux huiles essentielles et à d'autres outils naturels."
        ],
        [
            'question' => "Quelles huiles essentielles utilisez-vous ?",
            'answer' => "J'utilise les huiles essentielles dōTERRA : 100% pures, de grade thérapeutique et certifiées CPTG."
        ],
    ],
   'contact' => [
        'title' => "N'hésitez pas à me contacter",
        'illustration' => [
            'src' => '/assets/img/FAQ/contactUs.svg',
            'alt' => "Picto représentant un personnage au téléphone",
        ],
        'methods' => [
            [
                'label' => "Contactez-moi via le formulaire",
                'type' => 'button',
                'action' => '/contact',
                'text' => "Contactez-moi",
            ],
            [
                'label' => "Contactez-moi par email en cliquant sur l'enveloppe ci-dessous",
                'type' => 'email',
                'value' => 'info@kenko-web.be',
                'icon' => [
                    'src' => '/assets/img/FAQ/email.svg',
                    'alt' => 'Icône email',
                    'height' => '10rem',
                ],
            ],
            [
                'label' => "Contactez-moi par téléphone",
                'type' => 'phone',
                'value' => '0470 / 35.05.87',
                'icon' => [
                    'src' => '/assets/img/FAQ/telephone.svg',
                    'alt' => 'Icône téléphone',
                    'height' => '5rem',
                ],
            ],
        ],
    ],
];
