<?php

################################################################################
#This function will validate emails#############################################
#This function will validate URLS###############################################
################################################################################

function __validateEmail($email) {

    preg_match_all('/([\w\d\.\-\_]+)@([\w\d\.\_\-]+)/', $email, $matches);
    return $matches;
}

################################################################################
#This function will validate URLS###############################################
################################################################################

function __validateURL($url) {

    if (preg_match("#\b(http[s]?://|ftp[s]?://){1,}?([-a-zA-Z0-9\.]+)([-a-zA-Z0-9\.]){1,}([-a-zA-Z0-9_\.\#\@\:%_/\?\=\~\-\//\!\'\(\)\s\^\:blank:\:punct:\:xdigit:\:space:\$]+)#si", $url)) {
        return TRUE;
    } else {
        return FALSE;
    }
}