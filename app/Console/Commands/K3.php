<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\K3;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('k3', function () {
    $this->comment(K3::quote());
})->purpose('Display a K3 lyric');
