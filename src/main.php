<?php

namespace Ini;

class Ini{
    public string $path;
    public string $file;

    public function __construct($path, $file)
    {
        $this->path = $path;

        $this->file = $file;

        $check_file = fopen($path . "/" . $file . ".ini", "r");
        if($check_file == NULL)
        {
            fopen($path . "/" . $file . ".ini", "w");
            print("File ". $path."/".$file. ".ini not found\n Creating the file....");
        }
        fclose($check_file);
    }
    public function __destruct()
    {
        
    }
    public function addInt($key)
    {
        
    }
    public function getInt($key)
    {

    }
    public function addFloat($key)
    {

    }
    public function getFloat($key)
    {

    } 
    public function addBoolean($key)
    {

    }
    public function getBoolean($key)
    {

    }
    public function addString($key)
    {

    }
    public function getString($key)
    {

    }
   
}
?>