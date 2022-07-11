<?php

declare(strict_types=1);

namespace snipez\gmcommands;

class Settings {

    private static string $prefix = "§r§l§bGM Commands§r§8 » §r§f ";

    public static function getPrefix(): string {
        return self::$prefix;
    }
}