<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedContacts =
            [
                [
                    'given_name' => 'Adrian',
                    'middle_name'=> null,
                    'family_name'=> 'Gould',
                    'nickname'=> 'Ady',
                    'email'=> 'adrian.gould@nmtafe.wa.edu.au',
                    'phone'=> null,
                ],
                [
                    'given_name' => 'Aaron',
                    'middle_name'=> null,
                    'family_name'=> 'Clifford',
                    'nickname'=> 'Aaron',
                    'email'=> 'aaron.clifford@nmtafe.wa.edu.au',
                    'phone'=> '+61-1-2345-6789',
                ],
                [
                    'given_name' => 'Sylvester',
                    'middle_name'=> null,
                    'family_name'=> 'Stallone',
                    'nickname'=> null,
                    'email'=> null,
                    'phone'=> null,
                ],
                [
                    'given_name' => 'John',
                    'middle_name'=> null,
                    'family_name'=> 'Rambo',
                    'nickname'=> 'Rambo',
                    'email'=> null,
                    'phone'=> null,
                ],
                [
                    'given_name' => 'Rocky',
                    'middle_name'=> null,
                    'family_name'=> 'Balboa',
                    'nickname'=> 'The Italian Stallion',
                    'email'=> null,
                    'phone'=> null,
                ],
            ];
        foreach ($seedContacts as $seedContact) {
            Contact::create($seedContact);
        }

    }
}
