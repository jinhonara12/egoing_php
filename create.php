<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="Description" id="" cols="30" rows="10"></textarea>
        </p>
        <input type="submit">
    </form>
<?php
    require_once('view/bottom.php')
?>