<?php

namespace omdb;

class KeywordManager {

    /**
     * @var DbManager
     */
    private $db;

    private $keyword;
    private $number;

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @param DbManager $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * @param string $keyword , integer $number
     */
    public function addKeyword() {
        $sql = "INSERT INTO keyword (keyword, numbercount) VALUES('$this->keyword', '$this->number');";
        $this->db->execSql($sql);
    }

    /**
     * @param integer $id , string $keyword, integer $number
     */
    public function updateKeyword($id) {
        $sql = "UPDATE keyword SET numbercount = '$this->number' WHERE id=" . $id;
        $this->db->execSql($sql);
    }

    /**
     * @return array|null
     */
    public function findKeyword($word)
    {
        $sql = "SELECT * FROM keyword WHERE keyword = '".$word."'";
        $result = $this->db->execSql($sql);
        return mysqli_fetch_assoc($result);
    }
}