<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\models\user;
use app\models\category;
use app\models\post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
 

    user::create([
        'name' => 'sandhika galih',
        'username'=>'sandikagalih',
        'email' => 'sandhikagalih@gmail.com',
       '// /password' =>bcrypt('12345')
    ]);
    //user::create([
      //  'name' => 'doddy',
        //'email' => 'doddy@gmail.com',
        //'password' =>bcrypt('12345')
    //]);

   User::factory(5)->create();
    Post::factory(20)->create();


    category::create([
        'name' => 'web programming',
        'slug' => 'web-programming'
        
    ]);
    category::create([
        'name' => 'personal',
        'slug' => 'personal'
        
    ]);

    

    //post::create([
      //  'title' =>'judul pertama',
        //'slug' =>'judul-pertama',
       // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       //  quis autem ipsam eum. Alias, perferendis eius beatae autem velit fugit soluta 
        // officia dolore cumque repellat debitis optio culpa delectus rem saepe cupiditate. 
         //Eveniet praesentium tempore magnam quae saepe totam accusantium quia quod qui porro 
       //  autem veritatis blanditiis animi fugit unde obcaecati, dolorem, sint dignissimos! Officiis,
        // sunt iure rerum provident iusto cumque tempore impedit veniam obcaecati voluptates, 
        // aperiam perspiciatis eum fugit natus ipsa? Excepturi facilis vel sequi eveniet ea quo fugit accusamus,
        //  nostrum adipisci quas dolorum quae accusantium id dolorem in nihil odit pariatur sint provident fuga incidunt? Repellat, cumque beatae!',
        //'category_id' => 1,
        //'user_id' => 1

    //])
    //post::create([
     //   'title' =>'judul kedua',
      //  'slug' =>'judul-ke-dua',
     //   'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
     //    quis autem ipsam eum. Alias, perferendis eius beatae autem velit fugit soluta 
     //    officia dolore cumque repellat debitis optio culpa delectus rem saepe cupiditate. 
      //   Eveniet praesentium tempore magnam quae saepe totam accusantium quia quod qui porro 
      //   autem veritatis blanditiis animi fugit unde obcaecati, dolorem, sint dignissimos! Officiis,
      //   sunt iure rerum provident iusto cumque tempore impedit veniam obcaecati voluptates, 
       //  aperiam perspiciatis eum fugit natus ipsa? Excepturi facilis vel sequi eveniet ea quo fugit accusamus,
        //  nostrum adipisci quas dolorum quae accusantium id dolorem in nihil odit pariatur sint provident fuga incidunt? Repellat, cumque beatae!',
        //'category_id' => 1,
        //'user_id' => 1
        //])

      //  post::create([
      //      'title' =>'judul ke tiga',
      //      'slug' =>'judul-ke-tiga',
      //      'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      //       quis autem ipsam eum. Alias, perferendis eius beatae autem velit fugit soluta 
      //       officia dolore cumque repellat debitis optio culpa delectus rem saepe cupiditate. 
       //      Eveniet praesentium tempore magnam quae saepe totam accusantium quia quod qui porro 
      //       autem veritatis blanditiis animi fugit unde obcaecati, dolorem, sint dignissimos! Officiis,
      //       sunt iure rerum provident iusto cumque tempore impedit veniam obcaecati voluptates, 
       //      aperiam perspiciatis eum fugit natus ipsa? Excepturi facilis vel sequi eveniet ea quo fugit accusamus,
       //       nostrum adipisci quas dolorum quae accusantium id dolorem in nihil odit pariatur sint provident fuga incidunt? Repellat, cumque beatae!',
      //      'category_id' => 1,
       //     'user_id' => 1
      //      ])
           // post::create([
             //   'title' =>'judul ke empat',
               // 'slug' =>'judul-ke-empat',
              //  'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              //   quis autem ipsam eum. Alias, perferendis eius beatae autem velit fugit soluta 
             //    officia dolore cumque repellat debitis optio culpa delectus rem saepe cupiditate. 
            //     Eveniet praesentium tempore magnam quae saepe totam accusantium quia quod qui porro 
             //    autem veritatis blanditiis animi fugit unde obcaecati, dolorem, sint dignissimos! Officiis,
             //    sunt iure rerum provident iusto cumque tempore impedit veniam obcaecati voluptates, 
            //  aperiam perspiciatis eum fugit natus ipsa? Excepturi facilis vel sequi eveniet ea quo fugit accusamus,
              // nostrum adipisci quas dolorum quae accusantium id dolorem in nihil odit pariatur sint provident fuga incidunt? Repellat, cumque beatae!',
         //       'category_id' => 2,
       //         'user_id' => 2
     //           ])
    
    }
}
