<?php

namespace tream;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityEvent;

class Fall extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onDeath (EntityDamageEvent $event) {
    	if ($event->getCause() == EntityDamageEvent::CAUSE_FALL) {
    		$event->setCancelled();
        }
    }
}