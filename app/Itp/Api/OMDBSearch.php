<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 3/3/14
 * Time: 10:34 PM
 */

namespace Itp\Api;


class OMDBSearch {

    public function getResults($title) {
        $endpoint = "http://www.omdbapi.com/?t=" . urlencode($title);
        $json = file_get_contents($endpoint);



        return json_decode($json);
    }

} 