<?php
include 'header.php';


include 'database.php';

$query = new Query();
$table = "users";

$result = $query->getAllData($table, '*'); // apna method use karo
  $i =1; 
?>

<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl p-6">

    <h1 class="text-2xl font-bold mb-6 text-gray-700">
        Users List
    </h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200">

            <!-- Table Head -->
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-4 border text-left">ID</th>
                    <th class="py-3 px-4 border text-left">Name</th>
                    <th class="py-3 px-4 border text-left">Age</th>
                    <th class="py-3 px-4 border text-center">Action</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody>
                <?php while($row = $result->fetch_assoc()) { 
                  
                    ?>
                    <tr class="hover:bg-gray-100 transition">
                        
                        <td class="py-2 px-4 border">
                            <?php echo $i ?>
                        </td>

                        <td class="py-2 px-4 border">
                            <?php echo $row['name']; ?>
                        </td>

                        <td class="py-2 px-4 border">
                            <?php echo $row['age']; ?>
                        </td>

                        <td class="py-2 px-4 border text-center space-x-2">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" 
                               class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                Edit
                            </a>

                            <a href="delete.php?id=<?php echo $row['id']; ?>" 
                               class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Delete
                            </a>
                        </td>

                        <td class="py-2 px-4 border text-center">
    <button 
        onclick="openModal(<?php echo $row['id']; ?>, '<?php echo $row['name']; ?>', <?php echo $row['age']; ?>)"
        class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
        View
    </button>
</td>


                    </tr>
                <?php $i++ ; } ?>
            </tbody>

        </table>
    </div>

</div>







<!-- Modal -->
<div id="userModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">

    <div class="bg-white w-96 rounded-xl shadow-lg p-6 relative">
        
        <h2 class="text-xl font-bold mb-4">User Details</h2>

        <p><strong>ID:</strong> <span id="modalId"></span></p>
        <p><strong>Name:</strong> <span id="modalName"></span></p>
        <p><strong>Age:</strong> <span id="modalAge"></span></p>

        <button onclick="closeModal()" 
            class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Close
        </button>

    </div>
</div>



<script>
function openModal(id, name, age) {
    document.getElementById('modalId').innerText = id;
    document.getElementById('modalName').innerText = name;
    document.getElementById('modalAge').innerText = age;

    document.getElementById('userModal').classList.remove('hidden');
    document.getElementById('userModal').classList.add('flex');
}

function closeModal() {
    document.getElementById('userModal').classList.add('hidden');
}
</script>

</body>
</html>
