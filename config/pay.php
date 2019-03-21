<?php

return [
    'alipay' => [
        'app_id'         => '2016091600528389',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuZI3EtuwSFh6Aw54MVH1I0lNC3DM87SwZrNGlptUv0rVXrHUiDKlo7AiuVe3UqQrs0nyPPdCx+Wcr50ArCs55x++veTtKto+5fVhlm6UTT9om+iZs/dHs1FB6Fu6EAyxZW6obx6EgKofNPbJqe/rAbtDBO6ISumR+r2BbmK5g9NVfoKmCQumWlgYKdd8kdJbszkTFXhV5I8xV00qIfMXYY73Rlghfhap+rMqQbqDurzVVGBTlXDlGzUFvUP1BalBbFxlWerUUakEHIPLrG5+Okl6/5vhBSTZgug5U4/dO+NW9hVTeib+j7ZL1X6P9kcfsx2WVaIq3YP9SvIutBRMqQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAsoUcOSIdZYhiYYCQYlgMh/fp0j2uzbdlWb2mgvF8GFzirrN7BfCqQGEnfODDIU9TC16qGlCeQZMKmgc0+wWq6Szbjyb3etmPgtOOPGsIvkkCB+2+TSSitx/Glj+/y8wiMexFB7PXf1BU1S7RNjFZF0kbxn6anNCbzxkewTHECXz+suNpXbdGf+ld/MIQiK9xlWGM1NQl90bm1cDarpyBAj+hWHQ78Udz90s9dpDqb+iFgp5uprjQTKK3JfHLAVDs64CSdhdkcA63ILk3G92hZtVGBYIvSHOjplmpoMhGeo1JqwpgDo9BDRA/3UPEVHi1i9LH2i/r/hNzb7UBTylBVwIDAQABAoIBAHZvVv0Ug/ozVEmpeKC2F4IxWF/R6mGydTvnVUv0F8c2AHG0wz56nwjdK8xudSZpMQgPAr04lPWeLt9nPp/275+I0hUT3gYTxmEeJ3Qv8noDh6Ro9uLJFmZ1X1OY8Y6sXFdQj69/gc2GJvHUAJp6fMe1CgdTQRIeV/A6kyvK72r29NTsF8dhEoonpq2nbR49vxyshBdWCAaM+5yfeI/d9qCtLgoEZWDauEo8nCCLWQbUS/qZtknPpa90SqVvkllZQfrZmdNiMBDvZ3fkul9lEXkKivfTYXI+O2h/fnBenk6207OvMbV8CADLgVyIlv0L1LajmwTzS7p19b7VWMpQE4ECgYEA5OqC8VQEkFMo+YuTX1Fj2NeuHcdzA07RgOKDWSuSBJ3HaMY2b7mejDQad8E39JXn+GWKCRhdJaE3etI5L3tPxkwy5E0y2AclzIB7tlkerelZfFlEf6790mOK/SDO2ZXy5xt/G/DcmOXTh/jKjfAHe44To96+jy9v0d6x4xYvDMECgYEAx6QvMd/4rxQcC1y+sCV3sGVofPRX5qmtZah4Jfb+gcs1bilpIV3jq+4Mk8WvAjcR/ghHkC5wTQQdRfwbnqT+rQ9gTj715cCH4ayxJsr7AKqpS5lTtIAaWdgbfNyYtm5O+GeeZ8NkC2yeANBa1W68Q2o6tL6l/Y9gIwxpBawKHBcCgYAdUdQXqNU0zxHudGwZx0jsmyNX+RXIFK5MvbZpE2WOZc8GomySfsnJ11qUgBD0qMafUBIP/CjiCvYaKxbb+AVNtrDGAQVEGhZDTSmLP3rod3zYqm5VlEo6SjmhFjSoNcZ4x1LOd1kp1DX1sm3vJBExSA9H692oZUEDNmy+UzcPgQKBgD8hWBs5a/ZRMZ0WMuaYsoSBTM1WpwU12rMu1u+Kb2izza2MQsZeXkRb/nYsKO9WYsYl8BtT1AdGqcsbsdA09KPdHOMhXbjNbSqb5VkTDtRjIy3YynNlnu+SOv788v2dXDOI8Lp3OwexzTUMreyYG8hlqzLEptDLqebrYbp9cKT5AoGAVIz5nyOG/pgkDWHMzY9Ki6cMcWmKcpR9+PD0xEkw9tQubNctAVdOtb+XdtGODKvNt5JBry8W9aGWiXy9aynngvumwXecZ+8A6apVzAUqrH6gcK0iD8jrZvGEag7hTCf4Md0kvsBi545g1AlZfaivf4aJ9ecQAAZ/PuTZvdZnk0Y=',
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
