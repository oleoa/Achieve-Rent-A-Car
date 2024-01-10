<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      DB::table("faq")->insert([
        "id" => 1,
        "question" => "What is the meaning of life?",
        "answer" => "42"
      ]);

      DB::table("faq")->insert([
        "id" => 2,
        "question" => "What is the meaning of life?",
        "answer" => "42"
      ]);

      DB::table("faq")->insert([
        "id" => 3,
        "question" => "What is the meaning of life?",
        "answer" => "42"
      ]);

      DB::table("faq")->insert([
        "id" => 4,
        "question" => "What is the meaning of life?",
        "answer" => "42"
      ]);

      DB::table("faq")->insert([
        "id" => 5,
        "question" => "What is the meaning of life?",
        "answer" => "42"
      ]);

      DB::table("faq")->insert([
        "id" => 6,
        "question" => "What is the meaning of life?",
        "answer" => "42"
      ]);
    }
}
