<?php
    return [

        'RewriteRules' => [

            'test' => 'pages/test',
            
            'login' => 'users/login',

            '[controller]' => '[controller]/overview',
            '[controller]/p/[page]' => '[controller]/overview/[page]',
            '[controller]/p/[page]/s/[search]' => '[controller]/overview/[page]/[search]',

            'users/view/[id]' => 'users/view/[id]',
            'users/edit/[id]' => 'users/edit/[id]',
            'users/delete/[id]' => 'users/delete/[id]',

            '[controller]/[action]' => '[controller]/[action]',

            '' => 'pages/home'

        ],


        'ErrorViewLocation' => 'pages/error',

        'DefaultTitle' => 'pagina',
        'DefaultProfilePic' => 'assets/user.png',


        'Env' => 'Dev',

        'Live' => [
            'BaseUrl' => 'http://localhost/framework',

            'DataBaseName' => "--",
            'DataBaseUser' => '--',
            'DataBasePassword' => '--',

            'Debug' => false,
            'CustomErrors' => true
        ],

        'Dev' => [
            'BaseUrl' => 'http://localhost/framework/',

            'DataBaseName' => "winkel",
            'DataBaseUser' => 'root',
            'DataBasePassword' => '',

            'Debug' => true,
            'CustomErrors' => false
        ],


        'DetermineLanguage' => function(){
            $lang = 'en';

            if ( isset( $_COOKIE['lang'] ) ) {
                $lang = $_COOKIE['lang'];
            }

            return $lang;
        }

    ];
