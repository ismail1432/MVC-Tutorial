<?php

/**
 * Created by PhpStorm.
 * User: smainemilianni
 * Date: 08/07/2017
 * Time: 00:29
 */

class AbstractEntityRepository
{
    private $db;

    public function __construct()
    {
        $this->db = DatabaseConnexion::getDatatabaseConnect();

    }

    public function findAll($table)
    {
        $req = $this->db->query('SELECT * FROM '. $table.' ORDER BY ID ');
        $datas = $req->fetchAll(PDO::FETCH_CLASS);

        return $datas;
    }

    public function find($id, $table)
    {
        $req = $this->db->query('SELECT * FROM '. $table.' WHERE id = '.$id);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $table);
        $datas = $req->fetch();
        return $datas;
    }

}