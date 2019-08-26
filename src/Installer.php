<?php

namespace Si6\PreCommitHook;

class Installer
{
    public static function postInstall()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            system('cmd /c vendor\si6\pre-commit-hook\src\setup.bat');
        } else {
            system('sh vendor/si6/pre-commit-hook/src/setup.sh');
        }
    }
}