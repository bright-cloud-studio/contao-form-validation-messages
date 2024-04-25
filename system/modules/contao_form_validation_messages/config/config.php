<?php

/** Hooks */
$GLOBALS['TL_HOOKS']['validateFormField'][] 		= array('Bcs\Backend', 'addValidationMessages');
