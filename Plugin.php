<?php

namespace chatclear;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
    
    public function onCommand(CommandSender $p, Command $cmd, string $label, array $args) : bool{
        if($cmd->getName() == "cc"){
            if(!$p->hasPermission("nv.cmd")){
                $p->sendMessage("§cYou are not permission!");
                return true;
            } else {
            $this->getServer()->broadCastMessage("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
            $this->getServer()->broadCastMessage("§b * §fplayer §b". $p->getName() ." §fchat cleared!");
            $p->sendMessage("§aChat cleared!");
            return true;
            }
        }
    }
}
?>
