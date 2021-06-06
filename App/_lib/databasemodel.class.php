<?php

class DatabaseModel
{
    public function attributes()
    {
        $string = array();
        foreach($this->dbfields as $field)
        {
            if(is_int($this->$field) || is_double($this->$field)){
                $string[] = $field . " = " . $this->$field ;
            }else{
                $string[] = $field . " = '" . $this->$field . "'";
            }
        }
        return implode(", ", $string);
    }

    public  function add()
    {
        global $dbh;
        $sql = "INSERT INTO " . $this->tablename . " SET ". $this->attributes();

        $dbh->exec($sql);
       
    }
}