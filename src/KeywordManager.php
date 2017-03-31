<?php
namespace omdb;

class KeywordManager
{
    const TABLE = "keyword";
    /**
     * @var DbManager
     */
    private $db;

    private $keyword;

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
     * KeywordManager constructor.
     * @param DbManager $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * @param DbManager SearchManager $title
     */
    public function addKeyword()
 {

       $sql = "INSERT INTO " . self::TABLE . " (keyword)
             VALUES ('$this->keyword');";
        $this->db->execSql($sql);

 }


}