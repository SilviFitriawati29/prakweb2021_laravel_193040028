<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
       // User::create([
        //   'name' => 'Silvi Fitriawati',
        //   'email' => '193040028.silvi@mail.unpas.ac.id',
        //  'password' => bcrypt('12345')
        //]);

      //  User::create([
       //     'name' => 'Anjara Darojatun Nisa',
       //     'email' => '193040006.anjara@mail.unpas.ac.id',
       //     'password' => bcrypt('12345')
       // ]);
       User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
    
        Post::factory(20)->create();

       // Post::create([
       //     'title' => 'Judul Pertama',
       //     'slug' => 'judul-pertama',
       //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis soluta molestias consectetur perspiciatis, debitis accusamus libero ut placeat, iure suscipit dolor praesentium hic ex? Repudiandae quia debitis, saepe esse, rerum maiores quod natus quo eveniet sequi aut recusandae earum molestiae illum? Fuga neque blanditiis maxime. Accusantium, distinctio laborum sequi eligendi, odio, temporibus eveniet necessitatibus similique voluptatibus debitis in ex nobis illo sint tenetur ea praesentium molestias adipisci! Consequatur porro quos soluta impedit repellat ea exercitationem ex, architecto sunt quas natus est cumque placeat nemo expedita, minus rerum, reprehenderit voluptates a aspernatur necessitatibus! Dolor quae autem neque quam, porro exercitationem fugit.',
       //     'category_id' => 1,
       //     'user_id' => 1
      //  ]);

     //   Post::create([
     //       'title' => 'Judul Ke Dua',
      //      'slug' => 'judul-ke-dua',
      //      'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
      //      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis soluta molestias consectetur perspiciatis, debitis accusamus libero ut placeat, iure suscipit dolor praesentium hic ex? Repudiandae quia debitis, saepe esse, rerum maiores quod natus quo eveniet sequi aut recusandae earum molestiae illum? Fuga neque blanditiis maxime. Accusantium, distinctio laborum sequi eligendi, odio, temporibus eveniet necessitatibus similique voluptatibus debitis in ex nobis illo sint tenetur ea praesentium molestias adipisci! Consequatur porro quos soluta impedit repellat ea exercitationem ex, architecto sunt quas natus est cumque placeat nemo expedita, minus rerum, reprehenderit voluptates a aspernatur necessitatibus! Dolor quae autem neque quam, porro exercitationem fugit.',
       //     'category_id' => 1,
       //     'user_id' => 1
      //  ]);

      //  Post::create([
     //       'title' => 'Judul Ke Tiga',
     //       'slug' => 'judul-ke-tiga',
     //       'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
      //      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis soluta molestias consectetur perspiciatis, debitis accusamus libero ut placeat, iure suscipit dolor praesentium hic ex? Repudiandae quia debitis, saepe esse, rerum maiores quod natus quo eveniet sequi aut recusandae earum molestiae illum? Fuga neque blanditiis maxime. Accusantium, distinctio laborum sequi eligendi, odio, temporibus eveniet necessitatibus similique voluptatibus debitis in ex nobis illo sint tenetur ea praesentium molestias adipisci! Consequatur porro quos soluta impedit repellat ea exercitationem ex, architecto sunt quas natus est cumque placeat nemo expedita, minus rerum, reprehenderit voluptates a aspernatur necessitatibus! Dolor quae autem neque quam, porro exercitationem fugit.',
      //      'category_id' => 2,
      //      'user_id' => 1
      //  ]);

     //   Post::create([
     //       'title' => 'Judul Ke Empat',
      //      'slug' => 'judul-ke-empat',
       //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
      //      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis soluta molestias consectetur perspiciatis, debitis accusamus libero ut placeat, iure suscipit dolor praesentium hic ex? Repudiandae quia debitis, saepe esse, rerum maiores quod natus quo eveniet sequi aut recusandae earum molestiae illum? Fuga neque blanditiis maxime. Accusantium, distinctio laborum sequi eligendi, odio, temporibus eveniet necessitatibus similique voluptatibus debitis in ex nobis illo sint tenetur ea praesentium molestias adipisci! Consequatur porro quos soluta impedit repellat ea exercitationem ex, architecto sunt quas natus est cumque placeat nemo expedita, minus rerum, reprehenderit voluptates a aspernatur necessitatibus! Dolor quae autem neque quam, porro exercitationem fugit.',
      //      'category_id' => 2,
      //      'user_id' => 2
       // ]);
    }
}