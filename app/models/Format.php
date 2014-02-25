<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 2/24/14
 * Time: 8:36 PM
 */

class Format extends Eloquent {

    public function dvds() {
        return $this->hasMany("Dvd");
    }

} 