<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedMessages = [
            [
                'name' => 'John',
                'email' => 'john@tafe.com',
                'subject' => 'Test1',
                'topic_id' => 1,
                'message' => 'Testing the contact system topic 1',
            ],            [
                'name' => 'Josh',
                'email' => 'josh@tafe.com',
                'subject' => 'Test2',
                'topic_id' => 100,
                'message' => 'Testing the contact system topic 100',
            ],            [
                'name' => 'Johny',
                'email' => 'johny@tafe.com',
                'subject' => 'Test3',
                'topic_id' => 11,
                'message' => 'Testing the contact system incorrect topic 11',
            ],            [
                'name' => 'Jose',
                'email' => 'jose@tafe.com',
                'subject' => 'Test4',
                'topic_id' => 101,
                'message' => 'Testing the contact system oopsie topic 101',
            ],
        ];

        foreach($seedMessages as $message) {
            Message::create($message);
        }
    }
}

//$seedCategories = [['name',
//    'description',
//    'code'],];
//
//foreach ($seedCategory as $category)
//{
//    Category::create($category);
//}
