<?php

namespace WelcomeMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\Config;

use WelcomeMessage\utils\ConfigManager;

class Main extends PluginBase implements Listener {
    private ConfigManager $configManager;

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->configManager = new ConfigManager($this->getDataFolder() . "config.yml");
    }

    public function onDisable(): void {

    }

    /**
     * @param PlayerJoinEvent $event
     */
    public function onPlayerJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $welcomeMessage = $this->configManager->getWelcomeMessage();

        $message = str_replace("{player}", $player->getName(), $welcomeMessage);
        $message = str_replace("{online}", count($this->getServer()->getOnlinePlayers()), $message);

        $player->sendMessage($message);
    }
}
