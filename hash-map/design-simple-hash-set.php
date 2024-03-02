<?php

class MyHashSet
{
    
    protected array $sets = [];
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key) {
        if (!$this->contains($key)) {
            $this->sets[] = $key;             
        }
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        foreach($this->sets as $index => $value){
            if($this->sets[$index] === $key){
                unset($this->sets[$index]);
            }
        }
    }
  
    /**
     * @param Integer $key
     * @return Boolean
     */
    function contains($key) {
        foreach($this->sets as $index => $value){
            if($this->sets[$index] === $key){
                return true;
            }
        }
        return false;
    }
}

$obj = new MyHashSet();
$obj->add(2);
$obj->remove(2);
echo $obj->contains(2).PHP_EOL; // empty