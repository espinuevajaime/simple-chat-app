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
        // $this->call(UsersTableSeeder::class);
        //factory(\App\User::class,2)->create();
        factory(\App\User::class)->create([
            'name' => 'test@mail.com',
            'email' => 'test@mail.com',
            'image' => 'https://i.pravatar.cc/150?c=fake@adminravatar.com',
            'password' => bcrypt('password1234'),
        ]);
        factory(\App\User::class)->create([
            'name' => 'test2@mail.com',
            'email' => 'test2@mail.com',
            'image' => 'https://i.pravatar.cc/150?c=fake@bravatar.com',
            'password' => bcrypt('password1234'),
        ]);
        factory(\App\User::class)->create([
            'name' => 'Dog Woofson',
            'email' => 'Dog@gmail.com',
            'image' => 'https://i.pravatar.cc/150?u=fake@bravatar.com',
            'password' => bcrypt('password1234'),
        ]);
        factory(\App\User::class)->create([
            'name' => 'Louis CK',
            'email' => 'Louis@gmail.com',
            'image' => 'https://i.pravatar.cc/150?u=fake@aravatar.com',
            'password' => bcrypt('password1234'),
        ]);

        \App\Models\Session::create([
            'user1_id' => '3',
            'user2_id' => '1',
        ]);

        \App\Models\Message::create([
            'content' => 'Hello, how are you?',
            'session_id' => '1',
        ]);
        \App\Models\Message::create([
            'content' => 'Hey human!',
            'session_id' => '1',
        ]);
        \App\Models\Message::create([
            'content' => 'Hello there ',
            'session_id' => '1',
        ]);

        \App\Models\Chat::create([
            'message_id' => '1',
            'session_id' => '1',
            'user_id' => '3',
            'type' => 0
        ]);

        \App\Models\Chat::create([
            'message_id' => '1',
            'session_id' => '1',
            'user_id' => '1',
            'type' => 1
        ]);


        \App\Models\Chat::create([
            'message_id' => '2',
            'session_id' => '1',
            'user_id' => '1',
            'type' => 1
        ]);

        \App\Models\Chat::create([
            'message_id' => '2',
            'session_id' => '1',
            'user_id' => '3',
            'type' => 0
        ]);

        \App\Models\Chat::create([
            'message_id' => '3',
            'session_id' => '1',
            'user_id' => '1',
            'type' =>  1
        ]);
        \App\Models\Chat::create([
            'message_id' => '3',
            'session_id' => '1',
            'user_id' => '3',
            'type' => 0
        ]);


    }
}
