<?php

namespace WelcomeMessage\utils;

use pocketmine\utils\Config;

class ConfigManager {
    private $config;

    public function __construct(string $filePath) {
        $this->loadConfig($filePath);
    }

    public function loadConfig(string $filePath): void {
        if (file_exists($filePath)) {
            $this->config = new Config($filePath, Config::JSON);
        } else {
            $this->config = new Config($filePath, Config::JSON, [
                "welcome_message" => "Welcome to the server, {player}! There are currently {online} players online."
            ]);
            $this->saveConfig($filePath);
        }
    }

    public function saveConfig(string $filePath): void {
        $this->config->save();
    }

    public function getWelcomeMessage(): string {
        return $this->config->get("welcome_message");
    }

    public function setWelcomeMessage(string $message): void {
        $this->config->set("welcome_message", $message);
        $this->saveConfig($this->config->getFile());
    }
}
