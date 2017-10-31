<?php
require_once '../controllers/TodoList.php';
require_once './partials/header.php';
$tasks = new TodoList();
?>

<h1>Cosas para hacer</h1>
<table>
<?php foreach($tasks->readTasks() as $task): ?>
    <tr>
        <td><?php echo $task[0]; ?>
            <sapn>- Estado <?php echo $task[1];?></span> 
        </td>
    </tr>
<?php endforeach; ?>
</table>

<?php 
require_once './partials/footer.php';
?>