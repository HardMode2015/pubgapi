<?php
namespace hardmode2015\pubgapi\Facades;

use \Illuminate\Support\Facades\Facade;

class PubgApi extends Facade {
    
    protected static function getFacadeAccessor() {
        return 'PubgApi';
    }
}
