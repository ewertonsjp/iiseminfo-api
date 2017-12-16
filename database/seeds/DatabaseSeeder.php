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
        Event::create(
            ['tipo' => 'Palestra',
            'autor' => 'Prof. Rômulo Camara - Univasf',
            'descricao' => 'Desenvolvimento de projetos para a região utilizando hardware livre.',
            'img' => 'http://9solucoes.com.br/seminfo/images/palestras/open.jpg',
            'likes' => 0]);
        Event::create(
            ['tipo' => 'Palestra',
            'autor' => 'Prof. Fábio Rolim - IFPI',
            'descricao' => 'Projeto HelpFish - 2º colocado no Hackaton da Embrapa.',
            'img' => 'http://9solucoes.com.br/seminfo/images/palestras/rolim.jpg',
            'likes' => 0]);
        Event::create(
            ['tipo' => 'Mesa Redonda',
            'autor' => 'Associação de ...',
            'descricao' => 'Discussão sobre os desafios do semiárido na região de Paulistana.',
            'img' => 'http://1.bp.blogspot.com/-X79_uFTend8/T7ZGmMaADII/AAAAAAAAEek/pHUlwld15gU/s1600/mesa-redonda.jpg',
            'likes' => 0]);            
        Event::create(
            ['tipo' => 'Hackathon',
            'autor' => 'Maykol Sampaio',
            'descricao' => 'Corrida para montar ideia inovadora para os desafios discutidos no evento.',
            'img' => 'http://19g6dy4by8jx1b5cx74fh0f2-wpengine.netdna-ssl.com/wp-content/uploads/2015/12/Hackathon-cartoon-Irina-Bezyanova-Shutterstock.jpg',
            'likes' => 0]);                                   
    }
}
