<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

// DEV Org
$metadata['https://dev.login.streamsets.com/api/security/saml2/entityId/e3c5fa54-d005-11ed-a69a-4b5afe72d51f'] = [
    'entityid' => 'https://dev.login.streamsets.com/api/security/saml2/entityId/e3c5fa54-d005-11ed-a69a-4b5afe72d51f',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://dev.login.streamsets.com/api/security/saml2/acs/e3c5fa54-d005-11ed-a69a-4b5afe72d51f',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIGbdWkbn9TowwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMB4XDTIzMDMzMTIwNTIwNFoXDTI2MDMzMDIwNTIwNFowLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhfe/mb/imN/+puWr8haL+uU/dxuTOxYFSKKRxoIDNl8pezmIsnwZLHspcU8PkCXxaG3gDZE26hNQdKR4AjA+xRXh1I7CnAvtyFETtGzu863yJLBNZ9Xq6beK/CCe3NhOEXHVuSRWpZuWajDFZ4XdMTtD31XViu7aHb592U9ukwNXSXx7zbb9yjsEncHv6xYqq7ivoC91+i7jRU1u54qCDpSnvJrJ28j8MBjpM9LdjzxSEnkFX3sdX83jdyqhB3XNhvxsXYfT4KOqcRJirvRKzh08gK9/bSbyQY36SJfersO+owE2hzUokoPLnPyr86Vu6YHwAP6WsFJ3Eh2J3m9wmQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAj9KWtCZ7FufCuShTTaAOpaY4Xo6WJYtymtfOuM38G8KfZj65J8y/9/rZWtf3ekPwZhsxxpN9TDRGdiKiMsAtdyzyB8QfrQ2DVpMJejB+vDRNVMTL8VVUVk6bTNDKkl/X3EhEFiPBX3NDnSqCSgBrkQJRGP/XVvxTn14vB0fs1a9hiTmD11JtWV5lPAnwnSeVR+5TrM5Vg5OKuIu3/e52pdBLU4P6/SfJ/vzSQcgWec7eD2q7E7ehLEOngBLzHZkipVCfgDKN13XNi4eC8JSWxDzdCNv+VLVW2AggP7gkeVw7Kg9StZyxoDBt5NOPgz3/sR7PXBBLkt/O4E9/D6juo',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIGbdWkbn9TowwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMB4XDTIzMDMzMTIwNTIwNFoXDTI2MDMzMDIwNTIwNFowLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhfe/mb/imN/+puWr8haL+uU/dxuTOxYFSKKRxoIDNl8pezmIsnwZLHspcU8PkCXxaG3gDZE26hNQdKR4AjA+xRXh1I7CnAvtyFETtGzu863yJLBNZ9Xq6beK/CCe3NhOEXHVuSRWpZuWajDFZ4XdMTtD31XViu7aHb592U9ukwNXSXx7zbb9yjsEncHv6xYqq7ivoC91+i7jRU1u54qCDpSnvJrJ28j8MBjpM9LdjzxSEnkFX3sdX83jdyqhB3XNhvxsXYfT4KOqcRJirvRKzh08gK9/bSbyQY36SJfersO+owE2hzUokoPLnPyr86Vu6YHwAP6WsFJ3Eh2J3m9wmQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAj9KWtCZ7FufCuShTTaAOpaY4Xo6WJYtymtfOuM38G8KfZj65J8y/9/rZWtf3ekPwZhsxxpN9TDRGdiKiMsAtdyzyB8QfrQ2DVpMJejB+vDRNVMTL8VVUVk6bTNDKkl/X3EhEFiPBX3NDnSqCSgBrkQJRGP/XVvxTn14vB0fs1a9hiTmD11JtWV5lPAnwnSeVR+5TrM5Vg5OKuIu3/e52pdBLU4P6/SfJ/vzSQcgWec7eD2q7E7ehLEOngBLzHZkipVCfgDKN13XNi4eC8JSWxDzdCNv+VLVW2AggP7gkeVw7Kg9StZyxoDBt5NOPgz3/sR7PXBBLkt/O4E9/D6juo',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'email',
    'saml20.sign.response' => true,
    'saml20.sign.assertion' => true,
];

// DEV MultiSAML Org
$metadata['https://dev.login.streamsets.com/api/security/saml2/entityId/60db2208-ccf9-11ed-aea7-81b71b44eb0e'] = [
    'entityid' => 'https://dev.login.streamsets.com/api/security/saml2/entityId/60db2208-ccf9-11ed-aea7-81b71b44eb0e',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://dev.login.streamsets.com/api/security/saml2/acs/60db2208-ccf9-11ed-aea7-81b71b44eb0e',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIC4dZQWNcSq8wDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkMmIyNDA3ODgtODA5NC0xMWVkLWI0OWMtNGQ2YmM2OGNmN2YyMB4XDTIzMDMyNzIzNDQ1N1oXDTI2MDMyNjIzNDQ1N1owLzEtMCsGA1UEAwwkMmIyNDA3ODgtODA5NC0xMWVkLWI0OWMtNGQ2YmM2OGNmN2YyMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0iHblSqyd/hY7/VpFYp/PPjgktY86n7W7jJBhBODklULr1KaH6Grvz15p87ev5Zx3inczJsULeJEj996fS3f2SldgP9nWd4i6e7hEO6gziu7v5tuAw3iQb0UscADCmrlpfCswpGt53YwvzxsZ/Cd3I2Fpxz0uxh2Bjoar55RL5oTtyzGwWT3SkLS16nrN1U0dxD8HGL/6ETj+XBaFyq8wrkj003+ZSAGSCxxqn2P46XkVS9evZRBZdcGIyVk/wn8P2mw86HxTZtoNvISrOha2wZrjszzzcU8xiqLwu4yo2fqLG+lzjUez/oJ9xzPOwsucHYRS4tvgc7QLqGFIG2/4QIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQCO1bepkEpu+S0Idr70y+wKRGwf0zOkTPkrbDiL165ZtX2vZVfp3PrdAv+Sz+vKH0uk4TGizcQuu8vIEMWyv/krmZnKmJM4wC5JnSNttq7wQACqyn44VhL+/bzrc5Z9H9BomWlIDGiaqeGhYr7zEtXaG+9lH9RHGkblGjbqWa9XMx4RoGcFzXWzKSSannrKwAsG1AyGpjur/QR4Ag4NKtHO1LqOeMA4khbKuOj6PiYP6S/uoj0QAvWVC88pe6Z1DHzauXQmJIQX4EkS8RPteIjriLZrQZjhbsysgmR5d3PNBiqe1YNgI1WJqlg/Im+okncnvupxjugiYC3aueS5X7hg',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIC4dZQWNcSq8wDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkMmIyNDA3ODgtODA5NC0xMWVkLWI0OWMtNGQ2YmM2OGNmN2YyMB4XDTIzMDMyNzIzNDQ1N1oXDTI2MDMyNjIzNDQ1N1owLzEtMCsGA1UEAwwkMmIyNDA3ODgtODA5NC0xMWVkLWI0OWMtNGQ2YmM2OGNmN2YyMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0iHblSqyd/hY7/VpFYp/PPjgktY86n7W7jJBhBODklULr1KaH6Grvz15p87ev5Zx3inczJsULeJEj996fS3f2SldgP9nWd4i6e7hEO6gziu7v5tuAw3iQb0UscADCmrlpfCswpGt53YwvzxsZ/Cd3I2Fpxz0uxh2Bjoar55RL5oTtyzGwWT3SkLS16nrN1U0dxD8HGL/6ETj+XBaFyq8wrkj003+ZSAGSCxxqn2P46XkVS9evZRBZdcGIyVk/wn8P2mw86HxTZtoNvISrOha2wZrjszzzcU8xiqLwu4yo2fqLG+lzjUez/oJ9xzPOwsucHYRS4tvgc7QLqGFIG2/4QIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQCO1bepkEpu+S0Idr70y+wKRGwf0zOkTPkrbDiL165ZtX2vZVfp3PrdAv+Sz+vKH0uk4TGizcQuu8vIEMWyv/krmZnKmJM4wC5JnSNttq7wQACqyn44VhL+/bzrc5Z9H9BomWlIDGiaqeGhYr7zEtXaG+9lH9RHGkblGjbqWa9XMx4RoGcFzXWzKSSannrKwAsG1AyGpjur/QR4Ag4NKtHO1LqOeMA4khbKuOj6PiYP6S/uoj0QAvWVC88pe6Z1DHzauXQmJIQX4EkS8RPteIjriLZrQZjhbsysgmR5d3PNBiqe1YNgI1WJqlg/Im+okncnvupxjugiYC3aueS5X7hg',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'email',
    'saml20.sign.response' => true,
    'saml20.sign.assertion' => true,
];

// CASCADE Org
$metadata['https://cascade.login.streamsets.com/api/security/saml2/entityId/913fd1ed-dfca-11ed-b857-e5b8791144d0'] = [
    'entityid' => 'https://cascade.login.streamsets.com/api/security/saml2/entityId/913fd1ed-dfca-11ed-b857-e5b8791144d0',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://cascade.login.streamsets.com/api/security/saml2/acs/913fd1ed-dfca-11ed-b857-e5b8791144d0',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIJM6Itsw+TIkwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkMGIzOWQzMDYtMTc3My0xMWVkLTg0YTQtYjkxMDQ0YTQ5MDkyMB4XDTIzMDQyMDIyMjc0NFoXDTI2MDQxOTIyMjc0NFowLzEtMCsGA1UEAwwkMGIzOWQzMDYtMTc3My0xMWVkLTg0YTQtYjkxMDQ0YTQ5MDkyMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArbYSDdnGUx3Y8o1RiVHIMpL03T+X4mhteWA4kNpRhshpK9XQSw9X27AYrP3h3XvYvGkSaJZ06M3Ze0oPqyJeUCveA9iaGiFmEaj2tdUJa2cKQrBp/UajUqj9SuPhx7g5qfe15oVx9ysZ0rK1uj6kFEJCwZ9VZhdpf1hof7qcxq/xvl8oZeHjukb7Q1Je5owBEf6LpKLB0AaPec/0e0A/3k6RYMHCt8qnJs8GSp08oZwbPivTt4Obwvu0a+mOTsIHQnlC7WzJDA23gTWRBWg88PprA50G0MR0DuVznRp0TEKNaAHxJC0OyoavfrRV3fox/ZxqyvM8sCYI79ZS+IA8mwIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAS5YhNeljdPul980ejudUGvHrDFZWJRfnIkOXClc7STiYpQP29aKrMBVk7xTZ5ltBhx3J+m86KfqAqTgR0TgR54StHo0B2zosgTvXRrUkbnDPgRtKTn7io+Glk9tlaIX1oe7YmszHhz/RoD1BclhnrOJnj9dTYaZY9gD/sJ4f8iZYfnCdKdYqbfv5Mf/yhB9fAZjxeDhLUUIZLV/ZCJQgmIFvFVr0Acxsh8gCicM2H1XaYF1Zw9eFLBCoIaX6DBvENj/d/DkV3JBSsoiUs7AkyYjQxPTRvQkY0tQEITAuLWhNzdKiYd7IVmGUM6vroBaM/38VVp8XT4d9VXoOJedns',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIJM6Itsw+TIkwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkMGIzOWQzMDYtMTc3My0xMWVkLTg0YTQtYjkxMDQ0YTQ5MDkyMB4XDTIzMDQyMDIyMjc0NFoXDTI2MDQxOTIyMjc0NFowLzEtMCsGA1UEAwwkMGIzOWQzMDYtMTc3My0xMWVkLTg0YTQtYjkxMDQ0YTQ5MDkyMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArbYSDdnGUx3Y8o1RiVHIMpL03T+X4mhteWA4kNpRhshpK9XQSw9X27AYrP3h3XvYvGkSaJZ06M3Ze0oPqyJeUCveA9iaGiFmEaj2tdUJa2cKQrBp/UajUqj9SuPhx7g5qfe15oVx9ysZ0rK1uj6kFEJCwZ9VZhdpf1hof7qcxq/xvl8oZeHjukb7Q1Je5owBEf6LpKLB0AaPec/0e0A/3k6RYMHCt8qnJs8GSp08oZwbPivTt4Obwvu0a+mOTsIHQnlC7WzJDA23gTWRBWg88PprA50G0MR0DuVznRp0TEKNaAHxJC0OyoavfrRV3fox/ZxqyvM8sCYI79ZS+IA8mwIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAS5YhNeljdPul980ejudUGvHrDFZWJRfnIkOXClc7STiYpQP29aKrMBVk7xTZ5ltBhx3J+m86KfqAqTgR0TgR54StHo0B2zosgTvXRrUkbnDPgRtKTn7io+Glk9tlaIX1oe7YmszHhz/RoD1BclhnrOJnj9dTYaZY9gD/sJ4f8iZYfnCdKdYqbfv5Mf/yhB9fAZjxeDhLUUIZLV/ZCJQgmIFvFVr0Acxsh8gCicM2H1XaYF1Zw9eFLBCoIaX6DBvENj/d/DkV3JBSsoiUs7AkyYjQxPTRvQkY0tQEITAuLWhNzdKiYd7IVmGUM6vroBaM/38VVp8XT4d9VXoOJedns',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'email',
    'saml20.sign.response' => true,
    'saml20.sign.assertion' => true,
];

// Cascade Multi-Org
$metadata['https://cascade.login.streamsets.com/api/security/saml2/entityId/f27ec03c-51b4-11ee-9743-134581243592'] = [
    'entityid' => 'https://cascade.login.streamsets.com/api/security/saml2/entityId/f27ec03c-51b4-11ee-9743-134581243592',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://cascade.login.streamsets.com/api/security/saml2/acs/f27ec03c-51b4-11ee-9743-134581243592',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIICz0A2pkaRnEwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkZTExNTVhNzctNTFiNC0xMWVlLTk3NDMtMWYwODhhNTU2ZDc4MB4XDTIzMDkxMjIxNDAxMVoXDTI2MDkxMTIxNDAxMVowLzEtMCsGA1UEAwwkZTExNTVhNzctNTFiNC0xMWVlLTk3NDMtMWYwODhhNTU2ZDc4MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAj5QSGRkuCZyBM7e2ftQr9CQGqArqPmvmd9UN5SHU77A2QHD6R5MivNvYNKI+AG95Te1RHAV6p7p0EaWc0cE3c8F/Tew412Ab53MtE9TpIm53nn/PX+q66Thy+7YgapdAi67jIAl0NiqYTdVluVM2Kb4yyZJpCQ+ox47iU7NbJ2fggxNVfxm4HbRd0bfYhHOZf9DVzDlPYR39XVXMZEdmmhdTQw25jdNlPONdBJaGehusvu9w+GiDU7moZmMQnEp67oDV0Wrh+D2PNkUrrfp2lkiZxHA5rMjD1NdTHWixoSyTsySyTsEpZ2lwcqZpIEYHVOYavNIKnjeJpWN6uunePwIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAzFULuoXr9kpTzf6idFd2YJjJMJ3UZLVS3nHc0W4QSmXIw8Md26n1yb312X36IqL+QawGElpXneqmlpNDWVnJVXJ3Pl24/n8BD9trj7SVPkSWH0iuNo2M8Mub5VXaR6I+DZ0Ofy9HaL8sf+QHgFmKqfTzI5efbwt5PLeBORbfckBc1sGcVONv4BnQdCGvjLaM8G7Z1TyzORGVBIedLPz/MxBRvgzvwUoThAcZq5N6bbtluCO/hI9vVCwZaatYA+9ZAlc89RiLqsWmkszf+YmNNtNgOSR2E+dT3M/X1iuLdvWsml5/WtRw45zBqhQaBvN6LnHMwJ2nDPbAEUUzeaHD2',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIICz0A2pkaRnEwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkZTExNTVhNzctNTFiNC0xMWVlLTk3NDMtMWYwODhhNTU2ZDc4MB4XDTIzMDkxMjIxNDAxMVoXDTI2MDkxMTIxNDAxMVowLzEtMCsGA1UEAwwkZTExNTVhNzctNTFiNC0xMWVlLTk3NDMtMWYwODhhNTU2ZDc4MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAj5QSGRkuCZyBM7e2ftQr9CQGqArqPmvmd9UN5SHU77A2QHD6R5MivNvYNKI+AG95Te1RHAV6p7p0EaWc0cE3c8F/Tew412Ab53MtE9TpIm53nn/PX+q66Thy+7YgapdAi67jIAl0NiqYTdVluVM2Kb4yyZJpCQ+ox47iU7NbJ2fggxNVfxm4HbRd0bfYhHOZf9DVzDlPYR39XVXMZEdmmhdTQw25jdNlPONdBJaGehusvu9w+GiDU7moZmMQnEp67oDV0Wrh+D2PNkUrrfp2lkiZxHA5rMjD1NdTHWixoSyTsySyTsEpZ2lwcqZpIEYHVOYavNIKnjeJpWN6uunePwIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAzFULuoXr9kpTzf6idFd2YJjJMJ3UZLVS3nHc0W4QSmXIw8Md26n1yb312X36IqL+QawGElpXneqmlpNDWVnJVXJ3Pl24/n8BD9trj7SVPkSWH0iuNo2M8Mub5VXaR6I+DZ0Ofy9HaL8sf+QHgFmKqfTzI5efbwt5PLeBORbfckBc1sGcVONv4BnQdCGvjLaM8G7Z1TyzORGVBIedLPz/MxBRvgzvwUoThAcZq5N6bbtluCO/hI9vVCwZaatYA+9ZAlc89RiLqsWmkszf+YmNNtNgOSR2E+dT3M/X1iuLdvWsml5/WtRw45zBqhQaBvN6LnHMwJ2nDPbAEUUzeaHD2',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'email',
    'saml20.sign.response' => true,
    'saml20.sign.assertion' => true,
];


// Local Org
$metadata['https://aster.streamsets.dev:20000/api/security/saml2/entityId/2b099edb-9ddc-11ed-8a61-97d260ac5249'] = [
    'entityid' => 'https://aster.streamsets.dev:20000/api/security/saml2/entityId/2b099edb-9ddc-11ed-8a61-97d260ac5249',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://aster.streamsets.dev:20000/api/security/saml2/acs/2b099edb-9ddc-11ed-8a61-97d260ac5249',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIXdPa831wTdUwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNjdmZjAxMDktOWMzOC0xMWVkLWFmMmQtNGQ0YTA4NTZlMDlhMB4XDTIzMDEyNzAwNDcyN1oXDTI2MDEyNjAwNDcyN1owLzEtMCsGA1UEAwwkNjdmZjAxMDktOWMzOC0xMWVkLWFmMmQtNGQ0YTA4NTZlMDlhMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgbwY8JyO2KcGEcDfJ8H2R4Y2jE5CtD3d9EWpFt5YGE710I+ork8IYbGYaqgm26b+2B7jEnP47GuSyozt+QYqnYc/tI62abV9HEfEv0ZR9Y/9iLRg6N8XoGTw6WF5dgCTjzDbTFQIoYvjDm7QQkcTGoE1mWATMBRs9VXSiS0kZ/9jqDEfklHcWhZC6Oal0cvEvV5unrl5XRCncXEKvbgPCGECDbz84ljumDRDrMA2lW6z6HTkZd0XGI9cFJ5EXZFGJvEcVO7oXcDTtgZPBAPngdNsX/8m7WHTPmqVYIxDslquq75Jv60XPyeLmm1YzmyjvjE5m0RKWVqfx9Ur3aF1dQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQBTSBewuG+asY5AwE9VbgYI+UIpSlHueS0gemB7zv8yS55GCKU8HoauK9HYRzDk2QDPRfPfuu52HiqZdphNkgmgeDvy1zOqIEgLPCHXGj6QNPTRQBP5l996cDneMhJNkAY5WG5Q+e31VE5GS5RERxq+g3/zTdrBsPvKREOxhJaljcr11XnFRC/mRLCBcqehEsiOjXxl1udHZgFVgjCFBlkciGG5t90fAzdup7LDquG29RYCeVBklcszCsZLsy1k+E8VAC/cK7eNZv8bGNofF4he5Vjru8huIKkRhiudWBaY/FWZLzz2mqYLhdcrZ3Q0jd6b7C4/VzWW1tAmXqsyHu+E',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIXdPa831wTdUwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNjdmZjAxMDktOWMzOC0xMWVkLWFmMmQtNGQ0YTA4NTZlMDlhMB4XDTIzMDEyNzAwNDcyN1oXDTI2MDEyNjAwNDcyN1owLzEtMCsGA1UEAwwkNjdmZjAxMDktOWMzOC0xMWVkLWFmMmQtNGQ0YTA4NTZlMDlhMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgbwY8JyO2KcGEcDfJ8H2R4Y2jE5CtD3d9EWpFt5YGE710I+ork8IYbGYaqgm26b+2B7jEnP47GuSyozt+QYqnYc/tI62abV9HEfEv0ZR9Y/9iLRg6N8XoGTw6WF5dgCTjzDbTFQIoYvjDm7QQkcTGoE1mWATMBRs9VXSiS0kZ/9jqDEfklHcWhZC6Oal0cvEvV5unrl5XRCncXEKvbgPCGECDbz84ljumDRDrMA2lW6z6HTkZd0XGI9cFJ5EXZFGJvEcVO7oXcDTtgZPBAPngdNsX/8m7WHTPmqVYIxDslquq75Jv60XPyeLmm1YzmyjvjE5m0RKWVqfx9Ur3aF1dQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQBTSBewuG+asY5AwE9VbgYI+UIpSlHueS0gemB7zv8yS55GCKU8HoauK9HYRzDk2QDPRfPfuu52HiqZdphNkgmgeDvy1zOqIEgLPCHXGj6QNPTRQBP5l996cDneMhJNkAY5WG5Q+e31VE5GS5RERxq+g3/zTdrBsPvKREOxhJaljcr11XnFRC/mRLCBcqehEsiOjXxl1udHZgFVgjCFBlkciGG5t90fAzdup7LDquG29RYCeVBklcszCsZLsy1k+E8VAC/cK7eNZv8bGNofF4he5Vjru8huIKkRhiudWBaY/FWZLzz2mqYLhdcrZ3Q0jd6b7C4/VzWW1tAmXqsyHu+E',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'email',
    'saml20.sign.response' => true,
    'saml20.sign.assertion' => true,
];
