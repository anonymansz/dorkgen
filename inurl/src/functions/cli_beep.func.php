<?php
################################################################################
#BEEP ##########################################################################
################################################################################
function __cli_beep() {

    echo ($_SESSION['config']['beep']) ? "\x07" : NULL;
}