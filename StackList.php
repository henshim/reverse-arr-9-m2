<?php


class StackList
{
    protected $firstArray;
    protected $lastArray;

    public function __construct(){
        $this->firstArray=array();
        $this->lastArray=array();
    }

    function push($item){
        array_push($this->firstArray,$item);
    }

    function pop(){
        if (count($this->firstArray)>0){
            $item=array_pop($this->firstArray);
            array_push($this->lastArray,$item);
        }else{
            throw new \http\Exception\RuntimeException('stack empty!');
        }
    }

    function getFirstArray(){
        return $this->firstArray;
    }

    function getLastArray(){
        return $this->lastArray;
    }
}

$list=new StackList();
$list->push(9);
$list->push(8);
$list->push(7);
$list->push(6);
$list->push(5);
$list->push(4);
$list->push(3);

echo '<pre>';

print_r($list->getFirstArray());

$list->pop();
$list->pop();
$list->pop();
$list->pop();
$list->pop();
$list->pop();
$list->pop();

print_r($list->getLastArray());