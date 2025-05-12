<?php

namespace WelcomeMessage\traits;

trait SingletonTrait {
    private static ?self $instance = null;

    public static function getInstance(): self {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    private function __construct() {

    }

    private function __clone() {

    }

    private function __wakeup() {

    }
}
