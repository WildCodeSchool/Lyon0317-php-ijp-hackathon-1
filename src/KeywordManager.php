<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/03/17
 * Time: 23:13
 */

namespace omdb;


class KeywordManager
{
    const TABLE = "keyword";

    private $db;

    private $keyword;
    private $numbercount;

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     * @return KeywordManager
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumbercount()
    {
        return $this->numbercount;
    }

    /**
     * @param mixed $numbercount
     * @return KeywordManager
     */
    public function setNumbercount($numbercount)
    {
        $this->numbercount = $numbercount;
        return $this;
    }
    
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addKeyword()
    {
        $sql = "INSERT INTO " . self::TABLE . " (keyword, numbercount) VALUES ('$this->keyword', '$this->numbercount');";
        $this->db->execSql($sql);
    }

    public function updateKeyword($number)
    {
        $number = $number + 1;
        $sql = "UPDATE" . self::TABLE . " SET numbercount = '$this->numbercount' WHERE id = $id;";
        $this->db->execSql($sql);
    }
}