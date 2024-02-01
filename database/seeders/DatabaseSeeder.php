<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      DB::table("users")->insert([
        "id" => 1,
        "name" => env("ADMIN_NAME"),
        "email" => env("ADMIN_EMAIL"),
        "admin" => true,
        "setted_up" => true,
        "verification_token" => "verified",
        "api_token" => Str::random(60),
        "password" => Hash::make(env("ADMIN_PASSWORD")),
      ]);

      DB::table("faq")->insert([
        "id" => 1,
        "question" => "What is this?",
        "pergunta" => "O que é isso?",
        "answer" => "This is a FAQ.",
        "resposta" => "Isto é um FAQ.",
      ]);

      DB::table("faq")->insert([
        "id" => 2,
        "question" => "What is the best song in history?",
        "pergunta" => "Qual é a melhor música da história?",
        "answer" => "Berlin - Marillion",
        "resposta" => "Berlin - Marillion",
      ]);

      DB::table("faq")->insert([
        "id" => 3,
        "question" => "In fact, there is a mistake.",
        "pergunta" => "Ná verdade há um engano",
        "answer" => "The best song in history is 'Comfortably Numb' by Pink Floyd.",
        "resposta" => "A melhor músca da história é Confortably Numb - Pink Floyd",
      ]);

      DB::table('discounts')->insert([
        'id' => 1,
        'text' => "🚗 Drive into Savings! 🚗 Unlock exclusive discounts on your next adventure with our hassle-free car rentals. Book now and enjoy the road with unbeatable rates. Don't miss out – limited-time offer! 🌟 Use code DRIVE15 for an extra 15% off. Start your journey today at Achieve Rent A Car. Happy travels! 🌍 #RoadTripReady #SavingsOnWheels",
        'texto' => "🚗 Dirija para Economizar! 🚗 Desbloqueie descontos exclusivos em sua próxima aventura com nossos aluguéis de carros sem complicações. Reserve agora e aproveite a estrada com tarifas imbatíveis. Não perca – oferta por tempo limitado! 🌟 Use o código DRIVE15 para mais 15% de desconto. Comece sua jornada hoje na Achieve Rent A Car. Boas viagens! 🌍 #ProntoParaEstrada #EconomiaSobreRodas",
        'text_color' => '#ffffff',
        'color' => '#263E78',
        'active' => true,
      ]);
    }
}
