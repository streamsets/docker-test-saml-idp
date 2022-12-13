<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

//    'example-static' => array(
//        /* This maps to modules/exampleauth/lib/Auth/Source/StaticSource.php */
//        'exampleauth:StaticSource',
//
//        /* The following is configuration which is passed on to
//         * the exampleauth:StaticSource authentication source. */
//        'uid' => '1',
//        'eduPersonAffiliation' => ['group1'],
//        'email' => ['jon.aaron+autosaml@streamsets.com'],
//    ),

    /*
     * Username and Password Login users will be stored here.  I'll have to figure out if we can do a fixed static login
     *  along with username+password setup, or if I can only do one or the other (in that case we'll just do username+
     *  password only)
     *
     * When SAML Login happens, they'll be redirected to a login page for SimpleSAMLPhp, and we'll have to login with
     *  credentials specific to the type of user we'll login with.
     *
     * This also means we'll have to add all users needed into our fixed SAML Test Org.
     */

    'example-userpass' => [
        // Default Login
        'exampleauth:UserPass',
        'autoSamlUser:autoSamlUser' => [
            'uid' => 'testUser1',
            'email' => ['jon.aaron+autosaml@streamsets.com']
        ],

        // Login for seeing multiple orgs
        'multiSamlUser:multiSamlUser' => [
            'uid' => 'testUser2',
            'email' => ['jon.aaron+multisaml@streamsets.com']
        ],

        // User that doesn't exist in org
        'invalidUser:invalidUser' => [
            'uid' => 'testUser3',
            'email' => ['doesnotexist@streamsets.com']
        ],

        // Expired Invitee
        'expiredUser:expiredUser' => [
            'uid' => 'testUser4',
            'email' => ['jon.aaron+expired@streamsets.com']
        ]
    ]

);
