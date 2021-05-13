<?php
namespace Gbc\IdeHelper\Updates;

use Artisan;
use Exception;
use Seeder;

class initialGen extends Seeder
{
    public function run()
    {
        try {
            Artisan::call('ide-helper:generate');
        } catch (Exception $e) {
        }
    }
}
