<?php


namespace App;

class ListStudent implements ArrayAble, JsonAble
{
    private   $items;

    public function all()
    {
        return $this->items;
    }

    public function add(Student $student)
    {
        $this->items[] = $student;
    }

    public function remove($key)
    {
        unset($this->items[$key]);
    }

    public function fist()
    {
        reset($this->items);
    }

    public function sort()
    {
        $students = $this->items;
for ($i = 0 ; $i < count($students)-1; $i++){

    for ($j = $i + 1; $j <count($students) ; $j++){

        if($students[$i]->getAge() > $students[$j]->getAge()){
            $tmp = $students[$j];
            $students[$j] = $students[$i];
            $students[$i] = $tmp;
        }
    }
}
print_r($students);
    }


    public function toArray()
    {
    $arr = (array)$this->items;
    print_r($arr);
    }

    public function toJson()
    {
//        $json = json_encode($this->items);
//        print_r($json);
        $sts = $this->items;
        foreach ( $sts as $student){
            print_r($student->getStudent());
        }
    }
}