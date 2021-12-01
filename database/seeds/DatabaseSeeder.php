<?php
use App\Images;
/* importamos el modelo a ocupar category Model*/
use App\Category;
use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(ArticlesSeeder::class);
        $cantidadImages = 500;
        factory(Images::class,$cantidadImages)->create();
          factory(Category::class,500)->create();
          factory(Article::class,500)->create();
    }
}
