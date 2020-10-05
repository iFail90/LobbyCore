
<?php

namespace CF;

use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\Listener as LT;

class Main extends PB implements LT {

public static $instancia;

public function onLoad(){
$this->getLogger()->info("Loading LobbyCore..");
}

public function onEnable(){
$this->getLogger()->notice("Plugin LobbyCore Enabled");
$this->getLogger()->info("Created by SrClauYT + iFail90");
}

public static function getCore(): Main {
return self::$instancia;
}
}
