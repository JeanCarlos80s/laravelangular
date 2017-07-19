<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	'title' => 'Focando na qualidade em processos ágeis utilizando Lean',
        	'text' => 'O manifesto ágil e as práticas lean são bastante complementares.',
        	'user_id' => 1
        ]);

        DB::table('posts')->insert([
        	'title' => 'Desafios no desenvolvimento de APIs e IoT no mundo programável',
        	'text' => 'O mundo está gradualmente se tornando mais programável e a gama de soluções técnicas que temos à nossa disposição para criar essa mudança cresce a uma velocidade vertiginosa.',
        	'user_id' => 1
        ]);

        DB::table('posts')->insert([
        	'title' => 'Gerenciamento de dados com microserviços',
        	'text' => 'Randy Shoup, VP de Engenharia da Stitch Fix, falou no QCon New York 2017 sobre gerenciamento de dados e persistência isolada em aplicativos baseados em Microservices.',
        	'user_id' => 2
        ]);
    }
}
