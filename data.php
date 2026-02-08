<?php
 # one line commit add
include 'database.php';

 $query = new Query();

 // get data from users table (name, id, age)

 $table = "users";
//  $fields = [
//     "name",
//     "id",
//     "age"
//  ];

// $result = $query->getData($table, $fields);

//     while($row = $result->fetch_assoc()){
//         echo "name: " . $row['name'] . "<br>";
//         echo "id: " . $row['id'] . "<br>";
//         echo "age: " . $row['age'] . "<br>";
//         // echo "<pre>";
//         // print_r($row);
//         // echo "</pre>";
//     }

// insert data into users table

// $data = [
//     "id" => 4,
//     "name" => "john",
//     "age" => 30
// ];


// $query->insertData($table, $data);

//$query->deleteData($table, 1);


// $result = $query->getDataById($table, 4);

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         echo "<pre>
//         ".print_r($row);
//     }
// }

  $data = [
    "id" => 5,
    "name" => "santhom",
    "age" => 50,
  ];


  $result = $query->UpdateData($table, $data, "id", 4 );

  

?>