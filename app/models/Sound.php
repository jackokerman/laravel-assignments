<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 2/24/14
 * Time: 8:35 PM
 */

class Sound extends Eloquent {

    public function dvds() {
        return $this->hasMany("Dvd");
    }

}