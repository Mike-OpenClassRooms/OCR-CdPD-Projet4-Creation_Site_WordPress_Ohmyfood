<?php

/* Chargement des fichier css */

// Ajout du fichier reset.css plus d'explication dans le fichier
add_action('wp_enqueue_scripts', 'my_child_reset_styles', 21);
function my_child_reset_styles()
{
  wp_enqueue_style('child-reset', get_stylesheet_directory_uri() . '/reset.css', array(), '1.0');
}


// Ajout du fichier style.css
function theme_enqueue_styles()
{

  $file_name = '/style.css'; // Nom du fichier CSS
  $style_path =  get_stylesheet_directory() . $file_name; // Chemin vers votre fichier CSS
  wp_enqueue_style(
    'oh-my-food-style', // Identifiant unique pour votre style
    get_stylesheet_directory_uri() . $file_name,
    array(), // Dépendances, le cas échéant
    file_exists($style_path) ? filemtime($style_path) : false // Version du fichier basée sur la date de dernière modification ( pour les probleme de cache)
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 20);
// Désactivation des styles du thème parent (Twenty Twenty-One)
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('twenty-twenty-one-style');
  wp_deregister_style('twenty-twenty-one-style');
}, 20);

// Désactiver la barre d'administration pour tous les utilisateurs
add_filter('show_admin_bar', '__return_false');

function ohmyfood_enqueue_assets()
{
  // Fichier CSS principal
  wp_enqueue_style('ohmyfood-style', get_stylesheet_uri());

  // Fichier JS
  wp_enqueue_script(
    'ohmyfood-script',
    get_stylesheet_directory_uri() . '/script.js',
    array(), // Dépendances éventuelles (ex : array('jquery'))
    null,    // Version (null = pas de version)
    true     // Chargé dans le footer
  );
}
add_action('wp_enqueue_scripts', 'ohmyfood_enqueue_assets');
