<?php

namespace Apinhoma\Phuvo;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register(){

    }

}