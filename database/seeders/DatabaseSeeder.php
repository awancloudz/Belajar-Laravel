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
        //     'name' => 'Awan Aprifiantosa',
        //     'email' => 'aprifiantosa@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Gibran Junova',
        //     'email' => 'junova@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias officiis et distinctio debitis corporis molestias perspiciatis est magnam ea',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias officiis et distinctio debitis corporis molestias perspiciatis est magnam ea, dolor saepe voluptate ipsum fugiat rerum unde odio dignissimos earum doloremque. Optio eum perspiciatis modi, veritatis praesentium labore tempore quaerat enim incidunt molestiae aspernatur dolore voluptatem quidem eius nostrum iste quam, hic quisquam! Debitis reiciendis delectus molestiae consequatur beatae est deleniti doloribus excepturi. Voluptate expedita placeat ipsa modi assumenda laboriosam iusto debitis voluptatem quas eius, possimus architecto, dolore pariatur earum ad recusandae? Molestiae molestias quod ratione veritatis excepturi illo maxime minima numquam, doloribus expedita provident repellat reprehenderit. Sit laboriosam voluptas harum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias officiis et distinctio debitis corporis molestias perspiciatis est magnam ea',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias officiis et distinctio debitis corporis molestias perspiciatis est magnam ea, dolor saepe voluptate ipsum fugiat rerum unde odio dignissimos earum doloremque. Optio eum perspiciatis modi, veritatis praesentium labore tempore quaerat enim incidunt molestiae aspernatur dolore voluptatem quidem eius nostrum iste quam, hic quisquam! Debitis reiciendis delectus molestiae consequatur beatae est deleniti doloribus excepturi. Voluptate expedita placeat ipsa modi assumenda laboriosam iusto debitis voluptatem quas eius, possimus architecto, dolore pariatur earum ad recusandae? Molestiae molestias quod ratione veritatis excepturi illo maxime minima numquam, doloribus expedita provident repellat reprehenderit. Sit laboriosam voluptas harum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-Ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias officiis et distinctio debitis corporis molestias perspiciatis est magnam ea',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias officiis et distinctio debitis corporis molestias perspiciatis est magnam ea, dolor saepe voluptate ipsum fugiat rerum unde odio dignissimos earum doloremque. Optio eum perspiciatis modi, veritatis praesentium labore tempore quaerat enim incidunt molestiae aspernatur dolore voluptatem quidem eius nostrum iste quam, hic quisquam! Debitis reiciendis delectus molestiae consequatur beatae est deleniti doloribus excepturi. Voluptate expedita placeat ipsa modi assumenda laboriosam iusto debitis voluptatem quas eius, possimus architecto, dolore pariatur earum ad recusandae? Molestiae molestias quod ratione veritatis excepturi illo maxime minima numquam, doloribus expedita provident repellat reprehenderit. Sit laboriosam voluptas harum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        Post::factory(20)->create();
    }
}
