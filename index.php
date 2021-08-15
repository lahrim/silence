<?php
/*
Plugin Name: Silence
Description: Désactiver les mails des mises à jours.
Version: 1.0
Author: Lahrim
Author URI: https://github.com/lahrim/silence
License: carticiel
License URI: https://fr.wikipedia.org/wiki/Carticiel
*/

add_filter('auto_plugin_update_send_email', '__return_false');