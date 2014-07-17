<?php

/* Registriert ein Menu (Position, Description) */
/* http://codex.wordpress.org/Function_Reference/register_nav_menu */
register_nav_menu('primary', 'Mein Hauptmenü');
register_nav_menu('secondary', 'Mein Zweitmenü');

/* Registriert eine Sidebar (Array with "id", "name", "description", ...)
/* http://codex.wordpress.org/Function_Reference/register_sidebar */
register_sidebar(array(
    'id' => 'sidebar_main', 
    'name' => 'Haupt-Sidebar', 
    'description' => 'Erscheint rechts neben dem Inhalt'
));
register_sidebar(array(
    'id' => 'sidebar_footer', 
    'name' => 'Footer-Sidebar', 
    'description' => 'Erscheint im Footer'
));