<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */
$metadata['https://dev.login.streamsets.com/api/security/saml2/entityId/277f3042-fd5f-11ec-8682-fd24e752afd4'] = [
    'entityid' => 'https://dev.login.streamsets.com/api/security/saml2/entityId/277f3042-fd5f-11ec-8682-fd24e752afd4',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://dev.login.streamsets.com/api/security/saml2/acs/277f3042-fd5f-11ec-8682-fd24e752afd4',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIXBKsyl94Rc0wDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMB4XDTIyMDcwNjE5MDkyN1oXDTI1MDcwNTE5MDkyN1owLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgBPVpgHcC90T5Hvy0z17OvTCutaHx52CFjGVHJHzJk9L7VrdjyQGE8ZE6RQ7XPIMXxkYNkYmfHc4zsB1KGpSfd4k9PPBHr6ALze9zGwC/j/7tDq+CZMNKWG6oDPXUzm95OIv+rEAnne32YDGYr3pLEK2Epu/AXNoS+92RhduVzM0cKVXbpwPKk2P8/A2l8A53dE08qicINlsiqYR7qOFdccjb6SVAKlcBZAwFPXYD8dvkubIDRq+hs5548Yn0KqqxnKVRF4Lqjt/z2XiMu+/H/3HiLAWVGlRmHPMP+1mpn/TFmmPB0nta+8R1r4WM2ygNjuXskBpGDH+pb578TVknQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQBtbXkrcXH1MOmw238c9VEQvOvtxHfzcX3eoaVk1dqn7fSu0g5ORczJbluH8T0eImxq8v/irAHDaNlofKbC5QavdAD5xXm/fIJmJ0xFSYWXh5qSzgD5DW1YOV5lTk3qAhc6wYPnbtkbBPlXI+9EFuIVCJs8n0RCn3AzOr0Wzwuy2QM7rfVv4+k7dNkALLY2XyEhDTqcoGTImvp3lEHQa1lP0m0rhbWLibPZsQ3g6gwrN/alsJ69mc2UR8OAZH2g8RqjBKxjaB7hzAAtDLXm8uNqr+oYeONSp8oycWjtk9TGsHn6tyTUFVOx1yUbwFC3EHmF9LQoiJtI1hP+w8Sc6a1r',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIXBKsyl94Rc0wDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMB4XDTIyMDcwNjE5MDkyN1oXDTI1MDcwNTE5MDkyN1owLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgBPVpgHcC90T5Hvy0z17OvTCutaHx52CFjGVHJHzJk9L7VrdjyQGE8ZE6RQ7XPIMXxkYNkYmfHc4zsB1KGpSfd4k9PPBHr6ALze9zGwC/j/7tDq+CZMNKWG6oDPXUzm95OIv+rEAnne32YDGYr3pLEK2Epu/AXNoS+92RhduVzM0cKVXbpwPKk2P8/A2l8A53dE08qicINlsiqYR7qOFdccjb6SVAKlcBZAwFPXYD8dvkubIDRq+hs5548Yn0KqqxnKVRF4Lqjt/z2XiMu+/H/3HiLAWVGlRmHPMP+1mpn/TFmmPB0nta+8R1r4WM2ygNjuXskBpGDH+pb578TVknQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQBtbXkrcXH1MOmw238c9VEQvOvtxHfzcX3eoaVk1dqn7fSu0g5ORczJbluH8T0eImxq8v/irAHDaNlofKbC5QavdAD5xXm/fIJmJ0xFSYWXh5qSzgD5DW1YOV5lTk3qAhc6wYPnbtkbBPlXI+9EFuIVCJs8n0RCn3AzOr0Wzwuy2QM7rfVv4+k7dNkALLY2XyEhDTqcoGTImvp3lEHQa1lP0m0rhbWLibPZsQ3g6gwrN/alsJ69mc2UR8OAZH2g8RqjBKxjaB7hzAAtDLXm8uNqr+oYeONSp8oycWjtk9TGsHn6tyTUFVOx1yUbwFC3EHmF9LQoiJtI1hP+w8Sc6a1r',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'email',
    'saml20.sign.response' => true,
    'saml20.sign.assertion' => true,
];
