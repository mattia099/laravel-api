<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Carne','Pesce','Senza glutine','Vegetariano','Vegano'];

        foreach($tags as $name){
            $tag = new Tag;
            $tag->name = $name;
            $tag->slug = Str::slug($name);
            $tag->save();
        }
    }
}
