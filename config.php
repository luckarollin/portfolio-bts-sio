<?php
$nom       = 'Lucka ROLLIN';
$promo     = 2026;
$email     = 'lucka.rollin@gmail.com';
$tel       = '06 35 50 98 16';
$ville     = 'Saint-Cyr-sur-Loire (37540)';
$formation = 'BTS SIO — option SISR';

$competences = [
    ['n' => 'Gestion de parc',  'd' => 'Inventaire, déploiement, supervision et support utilisateurs.'],
    ['n' => 'Windows Server',   'd' => 'Active Directory, DHCP, gestion d\'utilisateurs et de domaines.'],
    ['n' => 'VirtualBox',       'd' => 'Création et gestion de machines virtuelles, réseaux virtuels.'],
    ['n' => 'Git / GitHub',     'd' => 'Hébergement, versionnement, pull requests, collaboration.'],
    ['n' => 'GLPI',             'd' => 'Ticketing, inventaire, base de connaissances, suivi d\'interventions.'],
    ['n' => 'Cisco',            'd' => 'Configuration réseau, VLANs, routage de base (Packet Tracer).'],
    ['n' => 'C#',               'd' => 'Bases appliquées à de petits outils et automations.'],
    ['n' => 'HTML / CSS',       'd' => 'Intégration web responsive, mise en page moderne.'],
];

$soft = ['Autonomie', 'Curiosité', 'Rigueur', 'Esprit d\'équipe',  'Français (natif)', 'Anglais (B1)'];

$experiences = [
    [
        'p' => 'Équipier polyvalent',
        'l' => 'McDonald\'s, Saint-Cyr-sur-Loire',
        't' => 'févr. 2025 – juil. 2025',
        'd' => 'Travail en équipe, préparation et gestion des commandes.',
    ],
    [
        'p' => 'Bénévole',
        'l' => 'Villa Rabelais / IEHCA, Tours',
        't' => 'févr. 2021',
        'd' => 'Aide à l\'organisation des collections, appui à la mise en place de conférences et ateliers.',
    ],
    [
        'p' => 'Arbitre bénévole',
        'l' => 'Club de handball, Saint-Cyr-sur-Loire',
        't' => '2018 – 2020',
        'd' => 'Arbitrage au sein du club local.',
    ],
];

$formations = [
    [
        'dip' => 'BTS SIO — Services Informatiques aux Organisations',
        'men' => 'Option SISR — Lycée Paul Louis Courrier, Tours',
        'a'   => 'depuis 09/2025',
    ],
    [
        'dip' => 'Licence — Sciences de la Vie (1ère année)',
        'men' => 'Université de Tours',
        'a'   => '09/2024 – 01/2025',
    ],
    [
        'dip' => 'Baccalauréat général — Spécialités SVT & Mathématiques',
        'men' => 'Lycée Choiseul, Tours',
        'a'   => '09/2021 – 06/2024',
    ],
];

$projets = [
    [
        't'    => 'Réseau VirtualBox',
        'd'    => 'Mise en place d\'un réseau virtuel avec Windows Server (AD, DHCP) et Linux.',
        'tags' => ['VirtualBox', 'Windows Server', 'Linux'],
        'ok'   => true,
        'lien' => '#',
    ],
    [
        't'    => 'Simulation Réseau Cisco',
        'd'    => 'Création d\'une topologie réseau et configuration dans Cisco Packet Tracer.',
        'tags' => ['Cisco', 'Packet Tracer', 'VLAN'],
        'ok'   => true,
        'lien' => '#',
    ],
    [
        't'    => 'Portfolio BTS SIO',
        'd'    => 'Développement d\'un portfolio web dynamique en PHP avec architecture multi-pages.',
        'tags' => ['PHP', 'HTML/CSS', 'XAMPP'],
        'ok'   => true,
        'lien' => '#',
    ],
    [
        't'    => 'Projet confidentiel (stage)',
        'd'    => 'Projet réalisé en stage — accès réservé.',
        'tags' => ['Confidentiel'],
        'ok'   => false,
        'lien' => '#',
    ],
];

if (!isset($page_active)) $page_active = 'home';
if (!isset($asset_path))  $asset_path  = '';
