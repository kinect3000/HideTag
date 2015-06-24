<?php

namespace Wantedkillerss\HideTag;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\Player;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class Tag extends PluginBase{

     public function onEnable(){
          $this->getLogger()->info(TextFormat::GREEN." Loaded Successfully!");
     }
     
     public function onDisable(){
          $this->getLogger()->info(TextFormat::RED." Unloaded Successfully!");
     }
     
     public function hide(Player $player){
          $player->setNameTag("");
          $player->sendMessage("[HideTag] Your NameTag has been hidden!!");
     }
     
     public function unhide(Player $player){
          $player->setNameTag($player->getName());
          $player->sendMessage("[HideTag] Your NameTag has been unhidden!");
     }
     
     public function onCommand(CommandSender $issuer, Command $cmd, $label, array $args){
          if($issuer->hasPermission("hidetag.command")){
               if($issuer instanceof Player){
                    if($cmd->getName() === "hidetag"){
                         $this->hide($issuer);
                         return true;
                    }
                    if($cmd->getName() === "unhidetag"){
                         $this->unhide($issuer);
                         return true;
                    }
               }else{
                    $issuer->sendMessage(TextFormat::RED."Command only works in-game!");
                    return true;
               }
          }else{
               $issuer->sendMessage(TextFormat::RED."You don't have permission for this!");
               return true;
          }
     }
}
