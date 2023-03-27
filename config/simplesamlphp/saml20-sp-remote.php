<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

// DEV Org
$metadata['https://dev.login.streamsets.com/api/security/saml2/entityId/aa7db20a-b7ae-11ed-97c9-2952d6b0b279'] = [
    'entityid' => 'https://dev.login.streamsets.com/api/security/saml2/entityId/aa7db20a-b7ae-11ed-97c9-2952d6b0b279',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://dev.login.streamsets.com/api/security/saml2/acs/aa7db20a-b7ae-11ed-97c9-2952d6b0b279',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIfR97gwd9SGEwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMB4XDTIzMDIyODIxMjcxNFoXDTI2MDIyNzIxMjcxNFowLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuXr/SyKhEndhG0jNVKtG24jiRYkN0Vw8WJaM/jmcdJvwoBHS2wR9KBjevWdGHoIZZRRIbG7g/6A3fg6Ls0yB6DgpXG+kspZxi/bPDMfRwnvSbtc6AsqkitVHZdBzsLrFCdDBUlE/Q8Nlu2LWsc6StOWMfRRDx+EKDTf9nIO94RMW9hgWosSkSMCvJo2b0ENBAbRf2SdttsKKggsKKjKMw1Txaiwa/AXURjpLg13e35O34YF/376ek0QpfSICSJQ8UxYU1IG4oVPrQrk6dtQf/8lpspWsiKIY1lQj5nY7/mT/i9jGP3vE4xKg0EjwlzvEYJ73jek+IgW9ZUjGq/kgtQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAoRbPEAiqkVqfjMDtcT1GOo3haNQ4hCuhmOlsZvSLCnLa/InbRkDVNBXjzU9++H/kpa3UqPKfB5fxHelUg5xV0GA90baVEjh/kiqzIHIbnDJ/y6c9dyMODOATJwg+E/+4QIj3FlW1U1PNWxChf5zOEDrVBQKPzjNGl+55tistHTnVU1ZJMnxy/63RQVFKVscahq6Ww+29w5Os3CJppb+vR/a+yyYHtfUw1sJ++e1+E+prNrZkTPhwulNNBhWT6jtSjdaEUyfDrBa3De9AKXkYXU0ERBuV6OrcWwEE01rRhLZWgLi3ySEHNpWN50AY0KWO+vALi3tOle2TW5nCakpCo',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIfR97gwd9SGEwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMB4XDTIzMDIyODIxMjcxNFoXDTI2MDIyNzIxMjcxNFowLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuXr/SyKhEndhG0jNVKtG24jiRYkN0Vw8WJaM/jmcdJvwoBHS2wR9KBjevWdGHoIZZRRIbG7g/6A3fg6Ls0yB6DgpXG+kspZxi/bPDMfRwnvSbtc6AsqkitVHZdBzsLrFCdDBUlE/Q8Nlu2LWsc6StOWMfRRDx+EKDTf9nIO94RMW9hgWosSkSMCvJo2b0ENBAbRf2SdttsKKggsKKjKMw1Txaiwa/AXURjpLg13e35O34YF/376ek0QpfSICSJQ8UxYU1IG4oVPrQrk6dtQf/8lpspWsiKIY1lQj5nY7/mT/i9jGP3vE4xKg0EjwlzvEYJ73jek+IgW9ZUjGq/kgtQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAoRbPEAiqkVqfjMDtcT1GOo3haNQ4hCuhmOlsZvSLCnLa/InbRkDVNBXjzU9++H/kpa3UqPKfB5fxHelUg5xV0GA90baVEjh/kiqzIHIbnDJ/y6c9dyMODOATJwg+E/+4QIj3FlW1U1PNWxChf5zOEDrVBQKPzjNGl+55tistHTnVU1ZJMnxy/63RQVFKVscahq6Ww+29w5Os3CJppb+vR/a+yyYHtfUw1sJ++e1+E+prNrZkTPhwulNNBhWT6jtSjdaEUyfDrBa3De9AKXkYXU0ERBuV6OrcWwEE01rRhLZWgLi3ySEHNpWN50AY0KWO+vALi3tOle2TW5nCakpCo',
        ],
    ],
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'email',
    'saml20.sign.response' => true,
    'saml20.sign.assertion' => true,
];

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

// CASCADE Org [WIP]
$metadata['https://dev.login.streamsets.com/api/security/saml2/entityId/c4d2ad2d-824c-11ed-a8e8-8fdb99d94405'] = [
    'entityid' => 'https://dev.login.streamsets.com/api/security/saml2/entityId/c4d2ad2d-824c-11ed-a8e8-8fdb99d94405',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://dev.login.streamsets.com/api/security/saml2/acs/c4d2ad2d-824c-11ed-a8e8-8fdb99d94405',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIISWycz2hPRycwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMB4XDTIyMTIyMjIzMDI1NloXDTI1MTIyMTIzMDI1NlowLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsze+DWRvXT/tN1yPnS1xPv1LoGRfE+JJH5xJH1Dv3ukhJAASGPSCg6wVUdckP27v6v9eoYN03qukGLbb7x6Dwm4uSpLEYRWqQT9+55eIx/EbW1QFApg78eMjpp7eyTSM4wndppiZePFfzCeQ/hta2YN/SJRlmxhoBVeaDVsDtY8oSJpcjhtwtbfSngj3xfuAukHE2Dc1pbBSH8ojmeGixBN8jIM8LADAhcdBKrRZt6yKS6Aml8fiXQVT4Pu4k01Qmj+eCNorIzgprZe6f00OTAZZnGTonv94IaEoXJcVKfWDkVajHKOZ1VMnA+O2Uz3XcEYaqc2tfL0EjLqkyla3cQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAK98K+I9LagILjr2XbpncQnIQXNS3uCE6n6Fh/bmRptLOBpDFLn02aKNySbRnTfhFH2G+ZLOdImhNllE9hyixJmUPafAuSsCzeMM3teyMUJ6Jqx3QnfCShGP5Jq5cu2dF6C52OfoG+Chv1NzTtjCd7eax5VJt2WCMvDWZdfCJaCQ/83YUGiYGjhx3/Vbf36myVMVh0lZI0/4AO5bexI/ll3e2qp18TZiBMw81xnKBw7qjpDGGTKysmRsDMoRxnsWD4jLYzGFqVAdaWwDTWo0XIuVnzWuZJIfqK5wCmViFH/QxDtIEcWIDDIt/A7KvwB3WTAcvl8JcsKO/VfDf4MTOe',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC3jCCAcagAwIBAgIISWycz2hPRycwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMB4XDTIyMTIyMjIzMDI1NloXDTI1MTIyMTIzMDI1NlowLzEtMCsGA1UEAwwkNGE0ODZiMjktZWNmNy0xMWVjLTk2ZjUtNTk4ZGJkNzgyNzFlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsze+DWRvXT/tN1yPnS1xPv1LoGRfE+JJH5xJH1Dv3ukhJAASGPSCg6wVUdckP27v6v9eoYN03qukGLbb7x6Dwm4uSpLEYRWqQT9+55eIx/EbW1QFApg78eMjpp7eyTSM4wndppiZePFfzCeQ/hta2YN/SJRlmxhoBVeaDVsDtY8oSJpcjhtwtbfSngj3xfuAukHE2Dc1pbBSH8ojmeGixBN8jIM8LADAhcdBKrRZt6yKS6Aml8fiXQVT4Pu4k01Qmj+eCNorIzgprZe6f00OTAZZnGTonv94IaEoXJcVKfWDkVajHKOZ1VMnA+O2Uz3XcEYaqc2tfL0EjLqkyla3cQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQAK98K+I9LagILjr2XbpncQnIQXNS3uCE6n6Fh/bmRptLOBpDFLn02aKNySbRnTfhFH2G+ZLOdImhNllE9hyixJmUPafAuSsCzeMM3teyMUJ6Jqx3QnfCShGP5Jq5cu2dF6C52OfoG+Chv1NzTtjCd7eax5VJt2WCMvDWZdfCJaCQ/83YUGiYGjhx3/Vbf36myVMVh0lZI0/4AO5bexI/ll3e2qp18TZiBMw81xnKBw7qjpDGGTKysmRsDMoRxnsWD4jLYzGFqVAdaWwDTWo0XIuVnzWuZJIfqK5wCmViFH/QxDtIEcWIDDIt/A7KvwB3WTAcvl8JcsKO/VfDf4MTOe',
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
