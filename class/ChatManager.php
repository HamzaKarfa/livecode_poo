<?php


class ChatManager
{

    private $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function create(Chat $chat)
    {
        $pdostmt = $this->pdo->prepare("INSERT INTO `chat`(`name`, `age`, `race`, `proprietaire`) VALUES (:name, :age, :race, :proprietaire)");
 
        $pdostmt->bindValue(':name', $chat->getName());
        $pdostmt->bindValue(':age', $chat->getAge());
        $pdostmt->bindValue(':race', $chat->getRace());
        $pdostmt->bindValue(':proprietaire', $chat->getProprietaire());
    
        // inserer un nouveau chat dans la base de donnée
        $pdostmt->execute();
    }

    public function findAll()
    {
        $pdostmt = $this->pdo->prepare("SELECT * FROM `chat`");
        $pdostmt->execute();

        $arrayChats = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
        $chats = [];
        foreach ($arrayChats as $arrayChat) {
            $chat = new Chat($arrayChat);
            $chats[] = $chat;
        }

        // var_dump($chats);
        return $chats;
    }
}