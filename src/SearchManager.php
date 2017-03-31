<?php

namespace omdb;

class SearchManager
{

    private $api = 'http://www.omdbapi.com/?';
    private $title;
    private $type;
    private $year;

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
        $this->title = $title;
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
        $ch = curl_init(); // Disable SSL verification

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Will return the response, if false it print the response

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set the url

        curl_setopt($ch, CURLOPT_URL,$url); // Execute

        $result=curl_exec($ch); // Closing

        curl_close($ch);

        $data =  json_decode($result);

        if($data->{'Response'} == "True"){
            return $data->Search; // Search make return works
        } else {
            return false;
        }
    }
}










