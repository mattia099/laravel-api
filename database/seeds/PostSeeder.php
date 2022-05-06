<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = Category::all();
        $categoriesId = $categories->pluck('id')->all();
        $tags = Tag::All();
        $tagsId = $tags->pluck('id')->all();
        $users = User::all();
        $usersId = $users->pluck('id')->all();

        for( $i=0; $i<100; $i++ ){
            $post = new Post;
            $post->title = $faker->words(5,true);
            $post->slug = Str::slug($post->title); //metodo statico della classe stringa per concatenare '-' tra le parole
            $post->content = $faker->paragraphs(10, true);
            $post->published_at = $faker->randomElement([ null, $faker->dateTime() ]); //$faker->optional()->dateTime()
            $post->category_id = $faker->optional()->randomElement( $categoriesId );

            $randomTags = $faker->randomElements( $tagsId,$faker->numberBetween(1, 3));
            $post->user_id = $faker->randomElement($usersId);
            $post->save();
            
            $post->tags()->attach($randomTags);
        }
    }
}
