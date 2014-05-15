<?php

defined('SYSPATH') OR die('No direct access allowed.');

return array(
    'default' => array(
        /**
         * SwiftMailer driver, used with the email module.
         *
         * Valid drivers are: native, sendmail, smtp
         */
        'driver' => 'native',
        /**
         * To use secure connections with SMTP, set "port" to 465 instead of 25.
         * To enable TLS, set "encryption" to "tls".
         *
         * Note for SMTP, 'auth' key no longer exists as it did in 2.3.x helper
         * Simply specifying a username and password is enough for all normal auth methods
         * as they are autodeteccted in Swiftmailer 4
         *
         * PopB4Smtp is not supported in this module as I had no way to test it but
         * SwiftMailer 4 does have a PopBeforeSMTP plugin so it shouldn't be hard to implement
         *
         * Encryption can be one of 'ssl' or 'tls' (both require non-default PHP extensions
         *
         * Driver options:
         * @param   null    native: no options
         * @param   string  sendmail: executable path, with -bs or equivalent attached
         * @param   array   smtp: hostname, (username), (password), (port), (encryption)
         */
        'options' => NULL
    ),
    // 虛擬主機
    'host' => array(
        "driver" => "smtp",
        'options' => array(
            'hostname' => 'mail.wddhosting.com', // 虛擬主機的發信位置(有時候可以設定 localhost)
            'username' => 'demo@wddhosting.com', // 這個發信帳號必需在虛擬主機上有存在
            'password' => '($yp%fDlE%da',
            'port' => 465,
            'encryption' => 'tls'
        )
    ),
    // 透過 Gmail 發信
    'gmail' => array(
        'driver' => 'smtp',
        'options' => array(
            'hostname' => 'smtp.gmail.com',
            'username' => 'powmana@gmail.com',
            'password' => '777asvpa',
            'port' => 465,
            'encryption' => 'tls'
        )
    ),
    // 中華電信發信
    'hinet' => array(
        'driver' => 'native',
        'options' => array(
            'hostname' => 'msa.hinet.net',
            'port' => 25,
        )
    ),
);
