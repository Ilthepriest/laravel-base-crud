<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  $comics=[
            [
                'title' =>  'Topolino',
                'description' =>  'Il fumetto di Topolino è uno dei più assurdi',
                'thumb' =>  'https://static.wikia.nocookie.net/disney/images/d/d4/IMG_1868.PNG/revision/latest?cb=20161228161522&path-prefix=it',
                'cover_image' =>  'https://www.lospaziobianco.it/wp-content/uploads/2021/09/Topolino-racconta-Dante-IMG-EVIDENZA.jpg',
            ]
            
        ]; */

        $comics = config('db.comics');

        foreach($comics as $comic ){
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->save();
        }    

    }
}
