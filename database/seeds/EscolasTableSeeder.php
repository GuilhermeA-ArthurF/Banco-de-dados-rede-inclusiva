<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('escolas')->insert([
            'cep'=>'32405-450',
            'nome'=>'CEI do Bairro Águia Dourada',
            'rua'=>'Av. João Evangelista Grossi',
            'bairro'=>'Águia Dourada'
        ]);
        //2
        DB::table('escolas')->insert([
            'cep'=>'32432-035',
            'nome'=>'CEI do Bairro Jardim das Rosas',
            'rua'=>'R. Atenagoras Coelho Teixeira',
            'bairro'=>'Jardim das Rosas'
        ]);
        
        DB::table('escolas')->insert([
            'cep'=>'32421-165',
            'nome'=>'CEI do Bairro Palmeiras',
            'rua'=>'R. Ataleia',
            'bairro'=>'Palmeiras'
        ]);
        
        DB::table('escolas')->insert([
            'cep'=>'32425-625',
            'nome'=>'CEI do Bairro Serra Dourada',
            'rua'=>'R. Brauna',
            'bairro'=>'Serra Dourada'
        ]);
        
        DB::table('escolas')->insert([
            'cep'=>' 32423-200',
            'nome'=>'CEI do Bairro Sol Nascente',
            'rua'=>'Av. Antônio Pinheiro Diniz',
            'bairro'=>'Sol Nascente'
        ]);
        
        DB::table('escolas')->insert([
            'cep'=>' 32420-005',
            'nome'=>'CEI do Bairro Parque Duval de Barros',
            'rua'=>'Av. Madureira',
            'bairro'=>'Parque Duval de Barros'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32400-000',
            'nome'=>'CEI Fazendinha do Guinho',
            'rua'=>'R. Guaíras',
            'bairro'=>'Lago Azul'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32410-178',
            'nome'=>'Centro Municipal de Educação Infantil Caiquinho',
            'rua'=>'R. 13 de Maio',
            'bairro'=>'Recanto Verde'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32410-357',
            'nome'=>'Centro Municipal de Educação Infantil Pró Infância',
            'rua'=>'R. Tom Jobim',
            'bairro'=>'Jardim MontanhêS'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32412-102',
            'nome'=>'Centro Solidário de Educação Infantil',
            'rua'=>'R. Bruno Leonardo Evangelista Diniz',
            'bairro'=>'Déa Marli'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32405-254',
            'nome'=>'E.M. Aguiar dos Santos',
            'rua'=>'Av. Minas Gerais',
            'bairro'=>'Morada da Serra'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32420-22',
            'nome'=>'E.M. Bonequinho Doce',
            'rua'=>'R. Zulmira Campos',
            'bairro'=>'Duval de Barros'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32420-135',
            'nome'=>'E.M. Coronel Duval de Barros',
            'rua'=>'R. Ruth Vasconcelos',
            'bairro'=>'Duval de Barros'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32404-623',
            'nome'=>'E.M. Cristiano Pacífico Ferreira',
            'rua'=>'R. Delfim Moreira',
            'bairro'=>'Parque Elizabeth'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32425-225',
            'nome'=>'E.M. da Vila Ideal/ Serra Dourada',
            'rua'=>'A.V. Pau Brasil',
            'bairro'=>'Serra Dourada'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32407-190',
            'nome'=>'E.M. de Barreirinho',
            'rua'=>'R. Mato Grosso',
            'bairro'=>'Vista Alegre'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32405-450',
            'nome'=>'E.M. do Bairro Águia Dourada',
            'rua'=>'Estrada do Barreinho',
            'bairro'=>'Águia Dourada'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32412-046',
            'nome'=>'E.M. do Bairro Alvorada',
            'rua'=>'R. Ulisses Caetano de Lima',
            'bairro'=>'Alvorada'
        ]);    
        DB::table('escolas')->insert([
            'cep'=>'32432-210',
            'nome'=>'E.M. do Bairro Jardim das Rosas',
            'rua'=>'R. Bugarim',
            'bairro'=>'Jardim Montanhês'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32410-357',
            'nome'=>'E.M. do Bairro Jardim Montanhês',
            'rua'=>'R. Tom Jobim',
            'bairro'=>'Jardim Montanhês'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32400-000',
            'nome'=>'E.M do Bairro Jardim Montreal/Ouro Negro',
            'rua'=>'R. Hortência',
            'bairro'=>'Ouro Negro'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32405-254',
            'nome'=>'E.M. do Bairro Morada da Serra / Primavera',
            'rua'=>'R. Maria Natividade',
            'bairro'=>'Vila Primavera'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32421-180',
            'nome'=>'E.M. do Bairro Palmeiras',
            'rua'=>'Av. Babaçu',
            'bairro'=>'Palmeiras'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32417-060',
            'nome'=>'E.M. do Bairro Petrovale',
            'rua'=>'R. Bolivia',
            'bairro'=>'Petrovale'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32425-630',
            'nome'=>'E.M. do Bairro Serra Dourada',
            'rua'=>'R. Vinhático',
            'bairro'=>'Serra Dourada'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32400-000',
            'nome'=>'E.M. do Sambódromo',
            'rua'=>'Av. Antonio Pinheiro Diniz',
            'bairro'=>'Sol Nascente'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32423-215',
            'nome'=>'E.M. do Sol Nascente',
            'rua'=>'Av. Dr. Paulo Souza Lima',
            'bairro'=>'Sol Nascente'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32421-075',
            'nome'=>'E.M. Maria das Mercês Aguiar',
            'rua'=>'R. Marechal Hermes',
            'bairro'=>'Bela Vista'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32407-110',
            'nome'=>'E.M. Maria José Campos Dias (Rola moça)',
            'rua'=>'R. Juscelino Narciso Campos',
            'bairro'=>'Bosque'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32400-538',
            'nome'=>'E.M. Maria José de Aguiar',
            'rua'=>'R. Arthur Campos',
            'bairro'=>'Alvorada'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32432-060',
            'nome'=>'E.M. Prefeito José Wanderley',
            'rua'=>'R. Mantiqueira',
            'bairro'=>'Jardim das Rosas'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32425-750',
            'nome'=>'E.M. Pró-infância do Bairro Aparecida',
            'rua'=>'R. Amendoeira',
            'bairro'=>'Aparecida'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32400-000',
            'nome'=>'E.M. Pró-infância do Bairro Jd. Montreal',
            'rua'=>'Av. das Orquídeas',
            'bairro'=>'Jardim Montreal'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32415-132',
            'nome'=>'E.M. Pró-Infância do Bairro São Pedro (Bruno Soares de Oliveira Silva)',
            'rua'=>'R. Jandaia',
            'bairro'=>'São Pedro'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32412-213',
            'nome'=>'E.M. Prof Carmelita Carvalho Garcia - CAIC',
            'rua'=>'R. do Ouro',
            'bairro'=>'Novo Horizonte'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32412-096',
            'nome'=>'E.M. Prof Maria Helena de Aguilar',
            'rua'=>'R. Seis',
            'bairro'=>'Dea Marli'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32422-160',
            'nome'=>'E.M. Prof Maria Martins de Moraes',
            'rua'=>'Av. Padre Eustáquio',
            'bairro'=>'Cascata'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'32423-215',
            'nome'=>'E.M. Prof Marinete Damasceno Pinheiro',
            'rua'=>'Av. Doutor Paulo de Souza de Lima',
            'bairro'=>'Sol Nascente Parque Duval de Barros'
        ]);
        DB::table('escolas')->insert([
            'cep'=>'30796-000',
            'nome'=>'CABI',
            'rua'=>'R. Silveira',
            'bairro'=>'Centro'
        ]);
        
        
    }
}
