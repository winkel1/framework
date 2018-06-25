<?php

    class pagesController extends Controller {

        public static function home() {

            self::$title = 'Home';

            Smts::Render('pages/home');

        }

      public static function test(){
        self::$title = 'test';
        smts::Render('pages/test');
      }

    }
