<?php

namespace xRookieFight;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\utils\TextFormat;

class Yenilikler extends PluginBase{
    public function onEnable()
    {
       $this->getLogger()->info(TextFormat::AQUA . "Plugin aktif - xrookiefight.engineer");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
       switch ($command->getName()){
           case "yenilikler":
               $this->Yenilikler($sender);
               break;
       }
       return false;
    }


    public function Yenilikler(Player $player){
        $form = new SimpleForm(function (Player $player, int $data = null) {
            if ($data === null) return false;

            switch ($data){
                case 0:
                    $player->sendMessage(TextFormat::GREEN . " Başarılı bir şekilde çıkış yaptın!");
                    break;
            }
        });

        $form->setTitle(" Yenilikler");
        $form->setContent("§eBlaBlaNetwork 1.0 Güncellemesi \n§dBla bla eklendi. \n§dBla bla eklendi. \n§dBla bla eklendi. \n§dBla bla eklendi.");
        $form->addButton(" Çıkış");
        $form->sendToPlayer($player);
    }
}