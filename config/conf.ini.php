<?php
//! @file smarty.inc.php
//! @author Caro Noyer-Giron - Creabox
//! @date 2011-05-31

$config['website']['title'] = 'Caroline Noyer-Giron';
$config['website']['description'] = 'Caroline Noyer-Giron Website';
$config['website']['keywords'] = 'Caroline Noyer-Giron : CV, projets, photos, creations';

$config['website']['pagedir'] = 'pages/';
$config['website']['pagedft'] = 'home';

$config['menu'] = array (
    'home' => array (
        'title' => 'Home',
        'link' => 'index.php?page=home',
        'show' => 'yes'
    ),
    'formation' => array (
        'title' => 'Formation',
        'link' => 'index.php?page=formation',
        'show' => 'yes'
    ),
    'experience' => array (
        'title' => 'Expérience',
        'link' => 'index.php?page=experience',
        'show' => 'yes'
    ),
    'projets' => array (
        'title' => 'Projets',
        'link' => 'index.php?page=projets',
        'show' => 'yes'
    ),
    'photos' => array (
        'title' => 'Photos',
        'link' => 'index.php?page=photos',
        'show' => 'yes'
    ),
    'creations' => array (
        'title' => 'Créations',
        'link' => 'index.php?page=creations',
        'show' => 'yes'
    ),
    'contact' => array (
        'title' => 'Contact',
        'link' => 'index.php?page=contact',
        'show' => 'yes'
    )
);
?>
