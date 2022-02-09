<?php

use Illuminate\Database\Seeder;
use App\Comics;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");

        foreach($comics as $comic){
            $newComic = new Comics();
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->image = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->type = $comic["type"];
            $newComic->save();
        }
    }
}
