<?php 
namespace App\Entity;

use \App\Db\Database;
use PDO;

class User{

    public int $id;
    public string $name;
    public string $birthdate;
    public string $cpf;
    public ?string $gender = null;

    /**
     * cadastra novo user no banco
     */
    public function cadastrar(){
        $obDatabase = new Database('users');
        $this->id = $obDatabase->insert([
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'cpf' => $this->cpf,
            'gender'=> $this->gender
        ]);

        return true;
    }

    public function atualizar(){
        return (new Database('users'))->update('id = '.$this->id,[
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'cpf' => $this->cpf,
            'gender'=> $this->gender
        ]);
    }

    public function excluir(){
        return (new Database('users'))->delete('id = '.$this->id);
    }

    /**
     * obter os users do banco de dados
     */
    public static function getUsers($where = null, $order = null, $limit = null){
        return (new Database('users'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    /**
     * obtem user por id
    */
    public static function getUser($id){
        return (new Database('users'))->select('id = '.$id)->fetchObject(self::class);
    }
}
?>