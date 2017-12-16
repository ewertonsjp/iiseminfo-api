<?php

use Illuminate\Database\Seeder;
use App\Event;
use App\Selfie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
       Event::create(
           ['tipo' => 'Palestra',
           'autor' => 'Prof. Aislan Rafael - IFPI',
           'descricao' => 'Inovação, empreendedorismo e aceleração de ideias no semiárido.',
           'img' => 'http://9solucoes.com.br/seminfo/images/palestras/aislan1.jpg',
           'likes' => 0]);         
    }
}
