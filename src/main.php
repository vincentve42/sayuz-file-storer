<?php

namespace Ini;



class Ini{
    public string $path;
    public string $file;

    public function __construct($path, $file)
    {
        $this->path = $path;

        $this->file = $file;

        
        if(!file_exists($path . "/" . $file . ".sayuz"))
        {
            $create_new_file = fopen($path . "/" . $file . ".sayuz", "w");
            fclose($create_new_file);
            
            
        }
        
        
    }
    public function __destruct()
    {
        
    }
    public function setInt(string $key, int $value)
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
        $line_count = 0;
        while(($line = fgets($fileOpen)) != false)
        {
            
                $content = explode("=",$line,2);
            
                $key_list[] = $content[0];

                $value_list[] = $content[1];

                $line_count++;
            
        }
        fclose($fileOpen);

        $index = 0;

        $fileWrite = fopen($this->path . "/" . $this->file . ".sayuz", "w");

        fwrite($fileWrite,"");

        fclose($fileWrite);

        $fileAppend = fopen($this->path . "/" . $this->file . ".sayuz", "a");


        $isKeyExist = false;
        foreach($key_list as $keys)
        {
            
            if(strcmp($keys, $key) == 0)
            {
                fwrite($fileAppend,$keys. "=". $value. "\n");
                $isKeyExist = true;
            }
            else
            {
                if($value_list[$index] != null) fwrite($fileAppend,$keys. "=". $value_list[$index]);
            }

            $index++;
        }
        if(!$isKeyExist)
        {
             fwrite($fileAppend,$key. "=". $value. "\n");
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
    public function setFloat(string $key, float $value)
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
        $line_count = 0;
        while(($line = fgets($fileOpen)) != false)
        {
            
                $content = explode("=",$line,2);
            
                $key_list[] = $content[0];

                $value_list[] = $content[1];

                $line_count++;
            
        }
        fclose($fileOpen);

        $index = 0;

        $fileWrite = fopen($this->path . "/" . $this->file . ".sayuz", "w");

        fwrite($fileWrite,"");

        fclose($fileWrite);

        $fileAppend = fopen($this->path . "/" . $this->file . ".sayuz", "a");


        $isKeyExist = false;
        foreach($key_list as $keys)
        {
            
            if(strcmp($keys, $key) == 0)
            {
                fwrite($fileAppend,$keys. "=". $value. "\n");
                $isKeyExist = true;
            }
            else
            {
                if($value_list[$index] != null) fwrite($fileAppend,$keys. "=". $value_list[$index]);
            }

            $index++;
        }
        if(!$isKeyExist)
        {
             fwrite($fileAppend,$key. "=". $value. "\n");
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
    public function setBoolean(string $key, bool $value)
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
        $line_count = 0;
        while(($line = fgets($fileOpen)) != false)
        {
            
                $content = explode("=",$line,2);
            
                $key_list[] = $content[0];

                $value_list[] = $content[1];

                $line_count++;
            
        }
        fclose($fileOpen);

        $index = 0;

        $fileWrite = fopen($this->path . "/" . $this->file . ".sayuz", "w");

        fwrite($fileWrite,"");

        fclose($fileWrite);

        $fileAppend = fopen($this->path . "/" . $this->file . ".sayuz", "a");


        $isKeyExist = false;
        foreach($key_list as $keys)
        {
            
            if(strcmp($keys, $key) == 0)
            {
                fwrite($fileAppend,$keys. "=". $value. "\n");
                $isKeyExist = true;
            }
            else
            {
                if($value_list[$index] != null)
                {
                    
                         fwrite($fileAppend,$keys. "=". $value_list[$index]);
                }

            }

            $index++;
        }
        if(!$isKeyExist)
        {  
            fwrite($fileAppend,$key. "=". $value. "\n");
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
    public function setString(string $key,string $value)
    {
        // validator
        if(trim($key) === "")
        {
            return null;
        }
        if(!file_exists($this->path . "/" . $this->file . ".sayuz"))
        {
            return null;
        }
        $fileOpen = fopen($this->path . "/" . $this->file . ".sayuz", "r");
        $key_list = [];
        $value_list = [];
        $line_count = 0;
        while(($line = fgets($fileOpen)) != false)
        {
            
                $content = explode("=",$line,2);
            
                $key_list[] = $content[0];

                $value_list[] = $content[1];

                $line_count++;
            
        }
        fclose($fileOpen);

        $index = 0;

        $fileWrite = fopen($this->path . "/" . $this->file . ".sayuz", "w");

        fwrite($fileWrite,"");

        fclose($fileWrite);

        $fileAppend = fopen($this->path . "/" . $this->file . ".sayuz", "a");


        $isKeyExist = false;
        foreach($key_list as $keys)
        {
            
            if(strcmp($keys, $key) == 0)
            {
                fwrite($fileAppend,$keys. "=". $value. "\n");
                $isKeyExist = true;
            }
            else
            {
                if($value_list[$index] != null) fwrite($fileAppend,$keys. "=". $value_list[$index]);
            }

            $index++;
        }
        if(!$isKeyExist)
        {
             fwrite($fileAppend,$key. "=". $value. "\n");
        }
        
        
    }
    public function getString(string $key)
    {
        // validator
        if(trim($key) === "")
        {
            return null;
        }
        if(!file_exists($this->path . "/" . $this->file . ".sayuz"))
        {
           
            return null;
        }
        $fileOpen = fopen($this->path . "/" . $this->file . ".sayuz", "r");
        while(($line = fgets($fileOpen)) != false)
        {
            
            $check = explode('=',$line,2);
            if(strcmp($check[0], $key) == 0)
            {
                $hasil = str_replace("\n", "", $check[1]);
                return $hasil;
            }
        }
        fclose($fileOpen);

    }
}
?>