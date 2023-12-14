<?php 
namespace App\Entity;

use \App\Db\Database;
use DateTime;
use PDO;

class Protocol{
    public int $id;
    public string $description;
    public string $createdAt;
    public string $deadline;
    public User $user;

    public function registrar(){
        $obDatabase = new Database('protocols');
        $this->createdAt = date('Y-m-d H:i:s');
        $this->id = $obDatabase->insert([
            'description' => $this->description,
            'createdAt' => $this->createdAt,
            'deadline' => $this->deadline,
            'user' => $this->user->id
        ]);
    }

    public static function getProtocols($where = null, $order = null, $limit = null){
        return (new Database('users'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS,self::class);
    }
}
?>