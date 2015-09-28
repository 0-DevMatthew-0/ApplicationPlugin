<?php

namespace Bolts\main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {

                
        if($sender instanceof Player) {
            if(count($args) == 0) {
                $sender->sendMessage(Color::RED."Not enough arguments.");
                return;
        }
        if(count($args) == 1) {
            if($this->getServer()->getPlayer($args[0])) {
                $location = $this->getServer()->getPlayer($args[0])->getLocation();
                $sender->teleport($location);
                $sender->sendMessage(Color::BLUE."[Server] You have teleported to $args[0]");
                return;
            } else {
                $sender->sendMessage(Color::RED."[Server] That player isn't online!");
                return;
            }
        }
        if(count($args) == 2) {
            if($this->getServer()->getPlayer($args[0]) & getLocation() && $this->getServer()->getPlayer($args[1])) {
                $location2 = $this->getServer()->getPlayer($args[1])->getLocation();
                $player1 = $this->getServer()->getPlayer($args[0]);
                $player2 = $this->getServer()->getPlayer($args[1]);
                $player1->teleport($location2);
                $player1->sendMessage(Color::BLUE."[Server] You have teleported to $args[1]");
                return;
                
            }
        }
        }
    }
}    
