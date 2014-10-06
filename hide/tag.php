<?php

/*
__PocketMine Plugin__
class=hidetag
-name=hiddennametag
author=Wantedkillers
version=1.0
apiversion=14
*/

namespace Wantedkillers\hidetag;
use pocketmine\Server;
use pocketmine\player;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\event\Event;
use pocketmine\event\EventExecutor;
use pocketmine\event\EventPriority;
use pocketmine\event\Listener;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;


class skywars implements Plugin{

    public function __construct(ServerAPI $api, $server = false){
        $this->api = $api;

     public function onEnable(){
     $this->getLogger()->info(TextFormat::DARK_RED . "[Hide" . TextFormat::DARK_BLUE . "tag]" . TextFormat::AQUA . "plugin by Wantedkillers is Loading...");

    }


    public function commandHandler($cmd, $issuer, $alias){
        switch($cmd){
    public function onCommand(CommandSender $issuer, Command $cmd, $label){
        switch($cmd->getName()){
            case "hidetag":
              if($event->getPlayer()->hasPermission("hiddetag") | | $event->getPlayer()->hasPermission("hide.tag") }  {
                $playertag = $event->getPlayerNameTag();
                $TagName = $event->get($Tagname);
                 $player->setPlayerNameTag($TagName);
                 $player->sendMessage("[HideNametag] You have changed your NameTag to".$TagName);
                    break;
                   }
        switch($cmd->getName()){
            case "unhidetag":
              if($event->getPlayer()->hasPermission("hiddetag") | | $event->getPlayer()->hasPermission("unhide.tag") }  {
                 $player->setPlayerNameTag($playertag);
                 $player->sendMessage("[HideNametag] You have deleted your NameTag back to".$playertag);
    }
  }
}
