<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chatroom;


class ChatroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chatroom1 = new Chatroom();
        $chatroom1->name = 'Chatroom 1';
        $chatroom1->description = 'skibidichat';
        $chatroom1->save();

        $chatroom2 = new Chatroom();
        $chatroom2->name = 'Chatroom 2';
        $chatroom2->description = 'okechat';
        $chatroom2->save();
    }
}
