<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 2/11/14
 * Time: 11:39 PM
 */

class DvdController extends BaseController {

    public function search() {
        $genres = Genre::all();
        $ratings = Rating::all();

        return View::make("dvds/search", [
            "genres" => $genres,
            "ratings" => $ratings
        ]);
    }

    public function listDvds() {
        $title = Input::get("title");
        $genreId = Input::get("genre");
        $ratingId = Input::get("rating");

        $relation = Dvd::with(["format", "genre", "label", "rating", "sound"])
            ->where("title", "LIKE", "%$title%");

        if ($genreId != 0) {
            $relation->where("genre_id", "=", $genreId);
        }

        if ($ratingId != 0) {
            $relation->where("rating_id", "=", $ratingId);
        }

        $dvds = $relation->take(30)
            ->get();

        $genre = ($genreId == 0) ? "All" : Genre::find($genreId)->genre_name;
        $rating = ($ratingId == 0) ? "All" : Rating::find($ratingId)->rating_name;

        return View::make("dvds/dvds", [
            "title" => $title,
            "genre" => $genre,
            "rating"=> $rating,
            "dvds" => $dvds
        ]);
    }

    public function createDvd() {
        $formats = Format::all();
        $genres = Genre::all();
        $labels = Label::all();
        $ratings = Rating::all();
        $sounds = Sound::all();

        return View::make("dvds/create", [
            "formats" => $formats,
            "genres" => $genres,
            "labels" => $labels,
            "ratings" => $ratings,
            "sounds" => $sounds,
        ]);
    }

    public function insertDvd() {

        $dvd = new Dvd();
        $dvd->title = Input::get("title");
        $dvd->label_id = Input::get("label");
        $dvd->sound_id = Input::get("sound");
        $dvd->genre_id = Input::get("genre");
        $dvd->rating_id = Input::get("rating");
        $dvd->format_id = Input::get("format");
        $dvd->save();

        return Redirect::to("dvds/create")
            ->with("success", "<strong><em>$dvd->title</em></strong> was successfully inserted into the DVD database.");

    }

} 