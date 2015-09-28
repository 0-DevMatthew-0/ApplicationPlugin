<?php

namespace Bolts\main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use Bolts\diceroll;
use Bolts\teleport;

class Main extends PluginBase {
    public function onEnable() {
        $this->getLogger()->info(Color::RED."[BoltsApplication] Plugin enabled!");
    }
    
    public function onDisable() {
        $this->getLogger()->info(Color::RED."[BoltsApplication] Plugin disabled!");
    }
    
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {

        if($sender instanceof Player) {
            $name = $sender->getName();
            if (strtolower($command->getName()) == 'heal') {
                if (count($args) > 0) {
                    $player = $args[0];
                    if ($this->getServer()->getPlayer($player)) {
                        $player = $this->getServer()->getPlayer($player);
                        $player->setHealth(20);
                        $sender->sendMessage(Color::BLUE . "[Server] Player " . $player->getName() . " has been healed!");
                        $player->sendMessage(Color::RED . "You have been healed!");
                        return;
                    } else {
                        $sender->sendMessage(Color::BLUE . "[Server] $player isn't online at the moment. Please try again when he returns!");
                        return;
                    }
                } else {
                    $sender->setHealth(20);
                    $sender->sendMessage(Color::RED . "You have been healed!");
                    return;
                }
            }
            if($sender instanceof Player) {
            $name = $sender->getName();            
            switch (strtolower($command->getName())) {
                case 'main':
                    $sender->sendMessage(Color::RED."[Bolts] Hello! $name you may know me as Bolts! I would like to be a developer because while support may be fun, its not something that suits me much. Thats where coding comes in.");
                       return;
                       break;
                case 'servversion':
                    $version = $this->getServer()->getVersion();
                    $sender->sendMessage(Color::BLUE."[Server] The server version is [$version]");
                    return;
                    break;
                case 'experience':
                    $sender->sendMessage(Color::RED."[Bolts] The coding languages I have learned are python, getting into php, getting into angularjs, basic html and one day Java.");
                    return;
                    break;
                case 'information':
                    $sender->sendMessage(Color::BLUE."[Bolts] You should already know this. After all I already work for you :)");
                    return;
                    break;
                case 'whyiamapplying':
                    $sender->sendMessage(Color::RED."[Bolts] There are a plethora of reasons why. If you want me to go through them ask me :)");
                    return;
                    break;
                case 'promote':
                    if(count($args) > 0) {
                        switch (count($args)) {
                            case 1:
                                $sub = $args[0];
                                $sender->sendMessage(Color::BLUE."[Server] You have promoted $sub!");
                                return;
                                break;
                            case 2:
                                $sub = $args[0];
                                $sub2 = $args[1];
                                $sender->sendMessage(Color::RED."[Server] You have promoted $sub and $sub2!");
                                return;
                                break;
                            case 3:
                                $sub = $args[0];
                                $sub2 = $args[1];
                                $sub3 = $args[2];
                                $sender->sendMessage(Color::BLUE."[Server] You have promoted $sub, $sub2 and $sub3!");
                                return;
                                break;

                        }
                    } else {
                        $sender->sendMessage(Color::RED.'[Server] You have been promoted!');
                        return;
                    }
               
                    
            }
       
                           
        $sender->sendMessage(Color::BLUE."[Bolts] You must run this command in-game!");
        return;
            }
        }
    }
}  
