<?php

namespace omdb;

class SearchManager
{
    /**
     * @var DbManager
     */
    private $db;

    private $api = 'http://www.omdbapi.com/?';
    private $title;
    private $type;
    private $year;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $this->escapeFields($title);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getList()
    {
        $url = $this->api . "s=" . $this->title . "&type=" . $this->type . "&y=" . $this->year;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    // Disable SSL verification
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_URL,$url);                 // Set the url

        $result = curl_exec($ch);                                        // Execute

        curl_close($ch);                                                 // Closing

        $data =  json_decode($result);                                   // decode Json

        if($data->{'Response'} == "True"){  // If API return a result
            return $data->Search;               // return array(Search) which contains all results
        } else {                            // Else API return "Not Found"
            return false;
        }
    }

    private function escapeFields($field)
    {
        return mysqli_real_escape_string($this->db->getConnection(), $field);
    }
}
