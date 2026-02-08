<?php

class Database{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "learphp";

    protected function connect(){

         $conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname
         );

         return $conn;

    }

}


class Query extends Database{


    public function getAllData($tablename,$fields){
        $sql = "select ".$fields." from " . $tablename;
        $result = $this->connect()->query($sql);

       return $result;
    }

    public function getData($tablename,$fields){
        $fields = implode(',',$fields);
        $sql = "select ".$fields." from " . $tablename;
        $result = $this->connect()->query($sql);

       return $result;
    }

    public function insertData($tablename, $data){
        $keys = implode(',',array_keys($data));

        $values = "'".implode("','", array_values($data))."'";

        $sql = "insert into ". $tablename. "(".$keys.") values (".$values.")";
        $this->connect()->query($sql);
        }


    public function deleteData($tablename, $condition){
        $sql = "delete from ". $tablename." where id= ".$condition;
        $this->connect()->query($sql);

        return true;
    }


    public function getDataById($tablename,$id){
        $sql = "select * from " . $tablename . " where id = " . $id;
        $result = $this->connect()->query($sql);

       return $result;
    }

    
    public function UpdateData($tablename, $data, $id, $wherecondition){

    
    // update users set id = $id, name = $name, age = $age 
    // where $id = $wherecondition; 

    $sql = "update ". $tablename. " set ";

    foreach( $data as $key => $values){
        $sql .= " $key = '$values' , ";
    }

    $sql = rtrim($sql, ", ");

    $sql .= " where " . $id ." = '". $wherecondition . "'";

    // echo $sql;
    // exit;

    $result = $this->connect()->query($sql);

    return $result;
    }

}


?>