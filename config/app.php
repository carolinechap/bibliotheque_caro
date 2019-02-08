<?php

/**
 * Aliases : raccourcis pour les noms de classes
 */
class_alias('\Bramus\Router\Router', 'Router');

/**
 * Constantes : éléments de configuration propres au système
 */
const WEBSITE_TITLE = "La bibliothèque de Caro";
const BASE_URL = "http://localhost/examenblanc2";

/**
 * Liste des dossiers source pour l'autoload des classes
 */
const CLASSES_SOURCES = [
    'controllers',
    'config',
    'models',
];