<?php

namespace CF;

use pocketmine\utils\TextFormat as Text;
use pocketmine\item\Item;
use pocketmine\scheduler\Task;
use pocketmine\utils\Config;
use pocketmine\level\Position;
use pocketmine\{Player, Server};
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use CF\Main;

class Items extends Task {
  
private $player;

public function __construct(Player $player){
$this->player = $player;
	}

public function onRun(int $currentTick){
$this->setItems($this->player);
                     }

public function setItems(Player $player){
$inventory = $player->getInventory();
$inventory->setItem(5, Item::get(345, 0, 1))->setCustomName("§1§kA§r§bTravel§1§kA");
}
?>
