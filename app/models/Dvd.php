<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 2/11/14
 * Time: 11:35 PM
 */

class Dvd extends Eloquent {

    public static function validate($input) {
        return Validator::make($input, [
            "title" => "required|min:4",
            "label" => "required|integer",
            "genre" => "required|integer",
            "sound" => "required|integer",
            "rating" => "required|integer",
            "format" => "required|integer",
        ]);
    }

    public function format() {
        return $this->belongsTo("Format");
    }

    public function genre() {
        return $this->belongsTo("Genre");
    }

    public function label() {
        return $this->belongsTo("Label");
    }

    public function rating() {
        return $this->belongsTo("Rating");
    }

    public function sound() {
        return $this->belongsTo("Sound");
    }

    public static function getAll($title, $genreId, $ratingId) {
        $relation = self::with(["format", "genre", "label", "rating", "sound"])
            ->where("title", "LIKE", "%$title%");

        if ($genreId != 0) {
            $relation->where("genre_id", "=", $genreId);
        }

        if ($ratingId != 0) {
            $relation->where("rating_id", "=", $ratingId);
        }

        $dvds = $relation->take(30)
            ->get();

        return $dvds;
    }
} 