<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
      //  $this->call(RoleSeeder::class);
       // $this->call(UserRoleSeeder::class);
       // $this->call(DepartementSeeder::class);
       // $this->call(FiliereSeeder::class);
       // $this->call(SemestreSeeder::class);*/

        //seed1
     /*   \App\User::create(
           [

                'email'=>'danielotomo34@gmail.com',
                'name'=>'omd',
                'id_role' =>1,
                'password'=>bcrypt('12345678'),

           ]
           );*/

           \App\User::create(
            [
 
                 'email'=>'eleve1@gmail.com',
                 'name'=>'eleve1',
                 'id_role' =>4,
                 'password'=>bcrypt('12345678'),
 
            ]);

            \App\User::create(
                [
     
                     'email'=>'admin1@gmail.com',
                     'name'=>'admin1',
                     'id_role' =>2,
                     'password'=>bcrypt('12345678'),
     
                ]);

                \App\User::create(
                    [
         
                         'email'=>'professeur1@gmail.com',
                         'name'=>'professeur1',
                         'id_role' =>3,
                         'password'=>bcrypt('123456789'),
         
                    ]);

    }
}
