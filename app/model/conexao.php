<?php

//namespace app\model\Conexao;

class Conexao
{

    // Job
    // private $c = [
    //     'HOST' => 'localhost',
    //     'PORT' => 3306,
    //     'USER' => 'root',
    //     'PASS' => 'root',
    //     'DBNAME' => 'transc_bd',
    //     'OPTIONS' => [
    //         PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    //         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    //     ]
    // ];

    // Conexão 02
    // private $c = [
    //     'HOST' => 'localhost',
    //     'PORT' => 3307,
    //     'USER' => 'root',
    //     'PASS' => '',
    //     'DBNAME' => 'transc_bd',
    //     'OPTIONS' => [
    //         PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    //         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    //     ]
    // ];

    // Desk
    // private $c = [
    //     'HOST' => 'localhost',
    //     'PORT' => 3306,
    //     'USER' => 'root',
    //     'PASS' => '',
    //     'DBNAME' => 'transc_bd',
    //     'OPTIONS' => [
    //         PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    //         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    //     ]
    // ];

    // Conexão 03
    private $c = [
        'HOST'=>'localhost',
        'PORT'=>3306,
        'USER'=>'root',
        'PASS'=>'',
        'DBNAME'=>'transc_bd',
        'OPTIONS'=> [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ];


    private $pdo = null;

    public function con()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->c['HOST'] . ';port=' . $this->c['PORT'] . ';dbname=' . $this->c['DBNAME'], $this->c['USER'], $this->c['PASS'], $this->c['OPTIONS']);
            return $this->pdo;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
