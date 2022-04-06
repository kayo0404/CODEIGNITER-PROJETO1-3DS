<?php
namespace  App\Database\Seeds;
use Codeigniter\Database\Seeder;
class Pessoas extends Seeder{
    public function run(){
        $nome = ['Maria', 'Ana', 'Pedro', 'João', 'Marcos'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'nome' => $nome[$x],
                'profissao'   =>   'Programador',
                'idade'=> 20
            ];
            $this->db->table('tb_pessoas')->insert($data);
        }
    }
}