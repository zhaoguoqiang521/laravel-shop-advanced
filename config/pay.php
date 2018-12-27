<?php

return [
    'alipay' => [
        'app_id'         => '2016092300579407',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAw1VhS8iaFLi7MCZnuRR9vKG2mbBXNV/8UJh6wofRdK6w/IAZOZzb+sqeWE4gLawpFp/XAkNOk3o8wpqK43UvaanFW7j+gBUNoEgj5NZu9zeQbdIsv6wiqq3bMG+gutpeiw/Lf+vCEyQGzXv/RuS8WcI+WsB2r/wZYtjiX5qhqi9gBpNcUp+5cjbaWWxWzf1X9i3jEN9u0aPC7SOQAivM8eth6hChb7SNfGeMjFS0yWhHvXDy+EJ2za0ecOT61BVMUCZmqDj28uTib4Wp7ZzRyqeUzvQm0ZzdPjIeh1NgDfJRO2J8luIVObSspfrUbDAqvvLM8e3QFrgnJj52rXJ0wQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAxrE75cTVoG0E+mPsdFOF7+qL6ACLS94RvDGYhJH7Lbu5jwwd3gxEkikbiUrynuRQR7/wH9/uqvuX11eXwWmdAzj8PgIk7wL+17IfCjwSf0mgWW4b9hlybjPsYKPihvVIVgo99QhRVkrwaKN16FECZF6389Zkj6NMZCNPUQYUDM47Blx0zlE5FJV9nnn864ie8WoLT1vQPxneYMa1GfVjGltjKEOhvfL1FqSrAqsjaz9Ii5jfkmaCek05xsjvpiw82I3e3AMFWsFKMyeITBwKDkgeAqBQQhw+3cZVSrDGBLKiuRdKRbjU2dePg+O7nVtVc5P6v5RqClPLp8m4VeJkawIDAQABAoIBABZ/qTWqZTpGPgMQX40IjCkPmQoLTbqoib+Sqh+Q3C1gjXF6QMONBhK63uhb+T8uwTxuqoUheUgZNydmPsPi7qmXwVBQM9hwsWTBQayKAtow/xxBUJ88YG3EKWcEB7maerdrb3qYl4U69SAUKlzFF41AAHp282okZpkMOoYFNy3/1Sx0diD9YflGe0PPGD0/jTehF8W7P8l/c/6W9jWq6UpOD5puXnF+XNj3jg9MbnT6NdHQb6QaQ0+CE1R5Cl+cTar5QazSMIAMJW9PRUh5ziZbVTLAAT/rXY2pD5meDGch3sEo42kA8ScC7Lkaee0Z1TfXBsvDc8JCvp3dt1C1cbkCgYEA5+vPqlh1l4zE7wljU1g35JIr9CXivHsKZbwhH1Qzy588sdjaPhUw5KjWwhRL27/HLg5IDDflCwXOdYrn+OvVS2MPUqVo+8Bv9aZEYCNfL9oH9rX+cz/VnLzNbzc5YNfHqE690jAs7r6HNukMQjBS1ssbCrlrh8lnEvIGhIu9oB8CgYEA21I9f0+eMZDn9ip7N/dLQvAv3S3acYlfjjySYJdjc6Gj/bQS8eTS0VuKrMYh0LYJYEaGsZjhCu+0PfQujVo+Mw/ndttufdk3pemOPXPMqi3aIKxRsWhda1jexpd2f2L/0W6shHjig8IaTIewbEwY3qOiakmgbmxxMW1pVQegAjUCgYEAlmUKBtpUb1GfB6/b1FlZ7YSIsku7LCTSCkUkaY+OAxahImeQpz/QtAd1NOg6hSdpP8mNGTdJ9YrvZrQMWBR+/eMgNaUEXnVdZTxMDNgDSyGllmxQtGYJ3RlmUx/Juq5TUCa328zX5n5xar9X7rgtkBKn152ESMrnZ5bBeUSxVFsCgYARIKUI0jDqcgSLZtnkjv1jpto2DaSnhTDfLL/Jp0ju+MqTv4JTPalxDBMSVw7A+9ZTnG5cZDH+5qVOyUjxZQDCgBV1ZMGGNnZwEIM5LVfoWlhUgOCIWDwja/dJzv5ECHkt49S5K6+U1o2zOE2Ax5iRmnnOjx1mQjW8xGybZVMLmQKBgQDf1VLp+i/tTUYngxaQotq6HWHFYcF2Wc1HJ+rwoOIVSRth6ZAsW3w30yHI9OAe2tXwEMhsBe0JhaSJv0RSbbZXIJAAi788a+NqSD2cqLkX0ZeXWyFDe9yGQqRWveV5qC2HzJFLtr9gO7T+slBwrzyldF1Y/9D1mQwt2E69xR/vFg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
