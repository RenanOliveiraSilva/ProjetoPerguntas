<?php

    Class UsersService {
        private $users;
        private $conexao;

        public function __construct(Users $users, Conexao $conexao)
        {
            $this->users = $users;
            $this->conexao = $conexao->conectar();
        }

        public function inserirUser() {
            $query = 'insert into login (nome, email, senha) values (:nome, :email, :senha)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue('nome', $this->users->__get('nome'));
            $stmt->bindValue('email', $this->users->__get('email'));
            $stmt->bindValue('senha', $this->users->__get('senha'));

            $stmt->execute();
        }

        public function selecionar() {
            $query = "select * from login";
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchALL(PDO::FETCH_OBJ);
        }

        public function selecionarUser($email, $senhaH) {
            $query = "select * from login where email = :email and senha = :senha";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue('email', $email);
            $stmt->bindValue('senha', $senhaH);
            
            $stmt->execute();
            return $stmt->fetchALL(PDO::FETCH_OBJ);
        }
    }