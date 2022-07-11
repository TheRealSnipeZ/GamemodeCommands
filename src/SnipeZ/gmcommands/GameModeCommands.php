<?php

namespace SnipeZ\gmcommands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\player\GameMode;
use pocketmine\plugin\PluginBase;

class GameModeCommands extends PluginBase implements Listener
{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("§r§l§aGamemode Commands loaded!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        switch (strtolower($command->getName())) {
            case "gmc":
                if (!$sender->hasPermission("gmcommands.gmc")) {
                    $sender->sendMessage(Settings::getPrefix() . "You do not have permission to run this commmand.");
                    return true;
                } else {
                    $sender->setGamemode(GameMode::CREATIVE());
                    $sender->sendMessage(Settings::getPrefix() . "Your gamemode has been set to Creative.");
                    return true;
                }
            case "gms":
                if (!$sender->hasPermission("gmcommands.gms")) {
                    $sender->sendMessage(Settings::getPrefix() . "You do not have permission to run this commmand.");
                    return true;
                } else {
                    $sender->setGamemode(GameMode::SURVIVAL());
                    $sender->sendMessage(Settings::getPrefix() . "Your gamemode has been set to Survival.");
                    return true;
                }
            case "gmp":
                if (!$sender->hasPermission("gmcommands.gmp")) {
                    $sender->sendMessage(Settings::getPrefix() . "You do not have permission to run this commmand.");
                    return true;
                } else {
                    $sender->setGamemode(GameMode::SPECTATOR());
                    $sender->sendMessage(Settings::getPrefix() . "Your gamemode has been set to Spectator.");
                    return true;
                }
            case "gma":
                if(!$sender->hasPermission("gmcommands.gma")) {
                    $sender->sendMessage(Settings::getPrefix() . "You do not have permission to run this commmand.");
                    return true;
                } else {
                    $sender->setGamemode(GameMode::ADVENTURE());
                    $sender->sendMessage(Settings::getPrefix() . "Your gamemode has been set to Adventure.");
                    return true;
                }
        }
        return true;
    }
}
