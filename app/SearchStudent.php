<?php


namespace App;


class SearchStudent
{
    private $name;

    public function __construct($name)
    {
        $content = file_get_contents('studentdata.json');
        $data = json_decode($content, true);
        $this->name = $name;
        foreach ($data as $student) {
            if ($name == $student['Name']) {
                return $student;
            }
        }
    }
}