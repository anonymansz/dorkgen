<?php

#################################################################################
#SECURITIES VALIDATION DOUBLE####################################################
#################################################################################
function __not_empty($valor = NULL) {

    RETURN !is_null($valor) && !empty($valor) ? TRUE : FALSE;
}