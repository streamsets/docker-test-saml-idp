<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata['https://dev.login.streamsets.com/api/security/saml2/entityId/afb7b976-3cf5-11ec-898b-bf9ae351cf63'] = array (
    'entityid' => 'https://dev.login.streamsets.com/api/security/saml2/entityId/afb7b976-3cf5-11ec-898b-bf9ae351cf63',
    'contacts' =>
        array (
        ),
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://dev.login.streamsets.com/api/security/saml2/acs/afb7b976-3cf5-11ec-898b-bf9ae351cf63',
                    'index' => 1,
                ),
        ),
    'SingleLogoutService' =>
        array (
        ),
    'keys' =>
        array (
            0 =>
                array (
                    'encryption' => false,
                    'signing' => true,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIYg4pQeMYSfUwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNjQ4ZjI3ODEtM2NmNS0xMWVjLTg5OGItYzcyNWJlNzdjY2M5MB4XDTIyMDIwMTAwMTc0M1oXDTI1MDEzMTAwMTc0M1owLzEtMCsGA1UEAwwkNjQ4ZjI3ODEtM2NmNS0xMWVjLTg5OGItYzcyNWJlNzdjY2M5MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqM2AXLLGrSRgzxJmuPBQuN86gdevSPlYxT8nzGT7I/Mg36+rxbb0vcPdLZuElx9XHQcgfOVO4v3buBp2zNiWgkv7wDSNF9d3dwYfPyvaADuXlJptpALYtgfUsPo4dlPxtuacAsFs02bEBgBpTM9VxE9MpE4OxWNVsQouOvKwcFNFKrFPZ/fqGey1/d1SMCJzrDUFuYRk1To4lRr8r2OkOJh8xp56HK2W8KpZkaehSHezlVnWutAlttFGuBqy1l9IecDAw20n8ZQjY9yfQjKkGg4Ie5p8pW7GhGj40fuALjEzIliSA6B7Ui64udC1IQifXh2iVYCWeiAAJYRzand4qQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQCnDlcn5kbWDq+eSKz48eolQHms2K+0QrOz7P0bwUOmKTGYo7jgs/2y2mpMSOXDzafEHL+4g43X1eaNKTpueLgIXzI/pzzLmxJYOIJHDgfZMVGoI7aL6TtfexAVQ4hm9ueS4zshyBShb8IKbyiKwF1PWj6tUC7OR9mvFK0dghySWdK1xsCqlNDb868qDxIjO2Nmbiqv58nULdcCvZhIOQ5gj1GnT0c/9/GnHQJMkK3ZVxDBq+RR+Ii4OjuDOmao0XmMz2Tqcq6SfAfD5OEW55e8DqD0QQ8YY/Puu+QKnICdhg9ao9VjcHzn79uASoE/S7Sfsxctw6o/xTYTVpa+ePve',
                ),
            1 =>
                array (
                    'encryption' => false,
                    'signing' => true,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIBW4UTLQFTHAwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNjQ4ZjI3ODEtM2NmNS0xMWVjLTg5OGItYzcyNWJlNzdjY2M5MB4XDTIyMDMwOTE4MDkwNFoXDTI2MDMwODE4MDkwNFowLzEtMCsGA1UEAwwkNjQ4ZjI3ODEtM2NmNS0xMWVjLTg5OGItYzcyNWJlNzdjY2M5MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwYmHfNACnwpcvpDgulyyyUXuE+dVYJSscz/gUBmVig6E376C8AMU7nAL3PFhIJ+eb2hDmg+qXH86CJGZFj8XgIYlsdjF1pIkP1R1nXEw5iQZVzN9JIKlsJJKwJTiIrEpo7Vf6Ae/ELA7nMhuL4F6iKZvOrpHbSzmHkRIdpAHLoPHDL4Xxtzjil3lY1jfbl8WOF033GRgydOyH3g294NUWgu4TY/kOlyD++1KiXcuxT0dK4cSU3kWDIh5YoMwZyeeNMXp56qsluiRWjooQBL0oXF0y4I4q+2OlTPKYb1TJFCJENsvpt8DLxS5sR9GsK+qFc9IF/icH38hO3psEQ6VowIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQASyuMKVXfEe5eXMsgfKRAMERo61Ze/QiddPjqi+6qtWOH6MD9IGzj2mZsQwD3m1y7ZqKZUFyCZFEblag8Y3MhfWb8brZ9lHJlnerRvem+9enRNEfU3+5yurMzWW1EZwETeOf6p65DCxYtJix9AIR6uKZ0Nm3JoCGCCUxCH+NhVkd/2XLrPuwGxevZ6er6dvWUJLjRaAtYy2hDdwcax+2YS+aiBNEpmcL0/zl3qelwU0PITQCFY7FLdYLDGlFwx/wOtMlpFIFOE7GvGTX5VKSwPfiM4pOXY4rW5aX1mOYDHG76N+VuufBTDmJMiYEgHOXNLNJoX+r3Mg+VgoR55Scq3',
                ),
            2 =>
                array (
                    'encryption' => true,
                    'signing' => false,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIYg4pQeMYSfUwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNjQ4ZjI3ODEtM2NmNS0xMWVjLTg5OGItYzcyNWJlNzdjY2M5MB4XDTIyMDIwMTAwMTc0M1oXDTI1MDEzMTAwMTc0M1owLzEtMCsGA1UEAwwkNjQ4ZjI3ODEtM2NmNS0xMWVjLTg5OGItYzcyNWJlNzdjY2M5MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqM2AXLLGrSRgzxJmuPBQuN86gdevSPlYxT8nzGT7I/Mg36+rxbb0vcPdLZuElx9XHQcgfOVO4v3buBp2zNiWgkv7wDSNF9d3dwYfPyvaADuXlJptpALYtgfUsPo4dlPxtuacAsFs02bEBgBpTM9VxE9MpE4OxWNVsQouOvKwcFNFKrFPZ/fqGey1/d1SMCJzrDUFuYRk1To4lRr8r2OkOJh8xp56HK2W8KpZkaehSHezlVnWutAlttFGuBqy1l9IecDAw20n8ZQjY9yfQjKkGg4Ie5p8pW7GhGj40fuALjEzIliSA6B7Ui64udC1IQifXh2iVYCWeiAAJYRzand4qQIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQCnDlcn5kbWDq+eSKz48eolQHms2K+0QrOz7P0bwUOmKTGYo7jgs/2y2mpMSOXDzafEHL+4g43X1eaNKTpueLgIXzI/pzzLmxJYOIJHDgfZMVGoI7aL6TtfexAVQ4hm9ueS4zshyBShb8IKbyiKwF1PWj6tUC7OR9mvFK0dghySWdK1xsCqlNDb868qDxIjO2Nmbiqv58nULdcCvZhIOQ5gj1GnT0c/9/GnHQJMkK3ZVxDBq+RR+Ii4OjuDOmao0XmMz2Tqcq6SfAfD5OEW55e8DqD0QQ8YY/Puu+QKnICdhg9ao9VjcHzn79uASoE/S7Sfsxctw6o/xTYTVpa+ePve',
                ),
            3 =>
                array (
                    'encryption' => true,
                    'signing' => false,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIIC3jCCAcagAwIBAgIIBW4UTLQFTHAwDQYJKoZIhvcNAQEEBQAwLzEtMCsGA1UEAwwkNjQ4ZjI3ODEtM2NmNS0xMWVjLTg5OGItYzcyNWJlNzdjY2M5MB4XDTIyMDMwOTE4MDkwNFoXDTI2MDMwODE4MDkwNFowLzEtMCsGA1UEAwwkNjQ4ZjI3ODEtM2NmNS0xMWVjLTg5OGItYzcyNWJlNzdjY2M5MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwYmHfNACnwpcvpDgulyyyUXuE+dVYJSscz/gUBmVig6E376C8AMU7nAL3PFhIJ+eb2hDmg+qXH86CJGZFj8XgIYlsdjF1pIkP1R1nXEw5iQZVzN9JIKlsJJKwJTiIrEpo7Vf6Ae/ELA7nMhuL4F6iKZvOrpHbSzmHkRIdpAHLoPHDL4Xxtzjil3lY1jfbl8WOF033GRgydOyH3g294NUWgu4TY/kOlyD++1KiXcuxT0dK4cSU3kWDIh5YoMwZyeeNMXp56qsluiRWjooQBL0oXF0y4I4q+2OlTPKYb1TJFCJENsvpt8DLxS5sR9GsK+qFc9IF/icH38hO3psEQ6VowIDAQABMA0GCSqGSIb3DQEBBAUAA4IBAQASyuMKVXfEe5eXMsgfKRAMERo61Ze/QiddPjqi+6qtWOH6MD9IGzj2mZsQwD3m1y7ZqKZUFyCZFEblag8Y3MhfWb8brZ9lHJlnerRvem+9enRNEfU3+5yurMzWW1EZwETeOf6p65DCxYtJix9AIR6uKZ0Nm3JoCGCCUxCH+NhVkd/2XLrPuwGxevZ6er6dvWUJLjRaAtYy2hDdwcax+2YS+aiBNEpmcL0/zl3qelwU0PITQCFY7FLdYLDGlFwx/wOtMlpFIFOE7GvGTX5VKSwPfiM4pOXY4rW5aX1mOYDHG76N+VuufBTDmJMiYEgHOXNLNJoX+r3Mg+VgoR55Scq3',
                ),
        ),
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'email',
    'saml20.sign.response' => true,
    'saml20.sign.assertion' => true,
);
