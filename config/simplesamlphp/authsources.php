<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-static' => array(
        /* This maps to modules/exampleauth/lib/Auth/Source/StaticSource.php */
        'exampleauth:StaticSource',

        /* The following is configuration which is passed on to
         * the exampleauth:StaticSource authentication source. */
        'uid' => '1',
        'eduPersonAffiliation' => ['group1'],
        'email' => ['jon.aaron@streamsets.com'],
    ),

);
