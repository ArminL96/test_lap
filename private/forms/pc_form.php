<?php
$stmt = $pdo->query("SELECT * FROM computer");
$computers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container mt-5">
    <h2 class="mb-4">Computer Management</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>RAM</th>
                <th>Storage</th>
                <th>Processor</th>
                <th>Manufacturer</th>
                <th>Base Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($computers as $computer): ?>
            <tr>
                <td><?= $computer['ID'] ?></td>
                <td contenteditable="true"><?= $computer['name'] ?></td>
                <td contenteditable="true"><?= $computer['ram'] ?></td>
                <td contenteditable="true"><?= $computer['storage'] ?></td>
                <td contenteditable="true"><?= $computer['ID_processor'] ?></td>
                <td contenteditable="true"><?= $computer['ID_manufacturer'] ?></td>
                <td contenteditable="true"><?= $computer['base_price'] ?></td>
                <td><button class="btn btn-danger btn-sm delete" data-id="<?= $computer['ID'] ?>">X</button></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('.delete').click(function() {
            if (confirm("Are you sure you want to delete this computer?")) {
                var id = $(this).data('id');
                $.post('delete_computer.php', {id: id}, function(response) {
                    if (response === 'success') {
                        location.reload();
                    } else {
                        alert('Error deleting computer.');
                    }
                });
            }
        });
    });
</script>
