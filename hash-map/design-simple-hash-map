<?php

class MyHashMap {
    
    protected array $maps = [];
  
    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        $this->maps[$key] = $value;
    }
  
    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        return $this->maps[$key] ?? -1;
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        unset($this->maps[$key]);
    }
}

$obj = new MyHashMap();
$obj->put(1, 1);
$obj->put(2, 2);

echo $obj->get(1).PHP_EOL; // echo 1
echo $obj->get(3).PHP_EOL; // echo -1

$obj->put(2, 1);
echo $obj->get(2).PHP_EOL; // echo 1
$obj->remove(2); 
echo $obj->get(2).PHP_EOL; // echo -1