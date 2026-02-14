<?php

namespace Ini;



class Ini{
    public string $path;
    public string $file;

    

    public function __construct($path, $file)
    {
        $this->path = $path;

        $this->file = $file;

        $check_file = fopen($path . "/" . $file . ".sayuz", "r");
        if($check_file == NULL)
        {
            $create_new_file = fopen($path . "/" . $file . ".sayuz", "w");
            print("File ". $path."/".$file. ".sayuz not found\n Creating the file....");
            fclose($create_new_file);
            
            
        }
        else
        {
            fclose($check_file);
        }
        
    }
    public function __destruct()
    {
        
    }
    public function setInt(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return 0;
        }
        if(!file_exists($this->path . "/" . $this->file . ".sayuz"))
        {
            return 0;
        }
        $fileOpen = fopen($this->path . "/" . $this->file . ".sayuz", "r");
        $key_list = [];
        $value_list = [];
        while(($line = fgets($fileOpen)) != false)
        {
            $content = explode("=",$line,3);
            
            $key_list[] = $content[0];

            $value_list[] = $content[1];

            print($content[1]);

        }
        fclose($fileOpen);

        $index = 0;

        $fileWrite = fopen($this->path . "/" . $this->file . ".sayuz", "w");

        fwrite($fileWrite,"");

        fclose($fileWrite);

        $fileAppend = fopen($this->path . "/" . $this->file . ".sayuz", "a");

        foreach($key_list as $key)
        {
            fwrite($fileAppend,$key. "=". $value_list[$index]. "\n");

            $index++;
        }
        
        
    }
    public function getInt(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return 0;
        }
        if(!file_exists($this->path . "/" . $this->file . ".sayuz"))
        {
            print("Kaga ada filenya");
            return 0;
        }
        $fileOpen = fopen($this->path . "/" . $this->file . ".sayuz", "r");
        while(($line = fgets($fileOpen)) != false)
        {
            $check = explode('=',$line,2);
            if(strcmp($check[0], $key) == 0)
            {
                return strval($check[1]);
            }
        }
        fclose($fileOpen);
        return 0;

    }
    public function setFloat(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return 0;
        }

    }
    public function getFloat(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return 0;
        }
        if(!file_exists($this->path . "/" . $this->file . ".sayuz"))
        {
            print("Kaga ada filenya");
            return 0;
        }
        $fileOpen = fopen($this->path . "/" . $this->file . ".sayuz", "r");
        while(($line = fgets($fileOpen)) != false)
        {
            $check = explode('=',$line,2);
            if(strcmp($check[0], $key) == 0)
            {
                return floatval($check[1]);
            }
        }
        fclose($fileOpen);

    } 
    public function setBoolean(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return 0;
        }

    }
    public function getBoolean(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return 0;
        }
        if(!file_exists($this->path . "/" . $this->file . ".sayuz"))
        {
            print("Kaga ada filenya");
            return 0;
        }
        $fileOpen = fopen($this->path . "/" . $this->file . ".sayuz", "r");
        while(($line = fgets($fileOpen)) != false)
        {
            $check = explode('=',$line,2);
            if(strcmp($check[0], $key) == 0)
            {
                return boolval($check[0]);
            }
        }
        fclose($fileOpen);

    }
    public function setString(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return 0;
        }

    }
    public function getString(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return 0;
        }
        if(!file_exists($this->path . "/" . $this->file . ".sayuz"))
        {
            print("Kaga ada filenya");
            return 0;
        }
        $fileOpen = fopen($this->path . "/" . $this->file . ".sayuz", "r");
        while(($line = fgets($fileOpen)) != false)
        {
            $check = explode('=',$line,2);
            $remove = strlen($check[1]);
            

            if(strcmp($check[0], $key) == 0)
            {

                return $check[1];
            }
        }
        fclose($fileOpen);

    }
}
?>