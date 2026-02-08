<?php
include 'database.php';

$query = new Query();
$table = "users";

// ID URL se lena (dynamic)
$id = $_GET['id'];

// Agar form submit hua
if(isset($_POST['update'])){

    $data = [
        "name" => $_POST['name'],
        "age"  => $_POST['age']
    ];

    $query->UpdateData($table, $data, "id", $id);

    header("Location: index.php"); // update ke baad redirect
    exit;
}

// Data fetch for edit
$result = $query->getDataById($table, $id);
$row = $result->fetch_assoc();


include 'header.php';
?>


<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded-xl shadow-lg w-96">

    <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">
        Edit User
    </h2>

    <form method="POST" action="update.php">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?> ">

        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name"
                value="<?php echo $row['name']; ?>"
                class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Age</label>
            <input type="number" name="age"
                value="<?php echo $row['age']; ?>"
                class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <button type="submit" name="update"
            class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
            Update
        </button>

    </form>

</div>

</body>
</html>
