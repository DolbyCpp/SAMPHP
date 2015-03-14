<?php
require 'core/bootstrap.php';

require 'grandlarc/gamemode.php';

Command::register('/memory', function($player) {
	$player->sendClientMessage(0xFFFFFFFF, "Memory Usage PHP: ".(memory_get_usage(false) / 1024)."KB (".(memory_get_usage(true) / 1024)."KB)");
});

Command::register('/garbage', function($player) {
	$player->sendClientMessage(0xFFFFFFFF, "Collected ".gc_collect_cycles()." cycles");
});

Command::register('/rr', function($player) {
	GameModeExit();
});