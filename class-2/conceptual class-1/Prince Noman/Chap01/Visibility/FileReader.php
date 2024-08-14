<?php


//code1:

/*

class FileReader
{
    public $data = 'Reading Public Data';
}

$fileReader = new FileReader();

echo $fileReader->data;


*/


//code2:

/*


class FileReader
{
    protected $data = 'Reading Public Data';

    public function getData()
    {
        return $this->data;
    }
}

$fileReader = new FileReader();

echo $fileReader->getData();



*/


//code3:



class FileReader
{
    private $data = 'Reading Public Data';

    public function getData()
    {
        return $this->data;
    }
}

$fileReader = new FileReader();

echo $fileReader->getData();



