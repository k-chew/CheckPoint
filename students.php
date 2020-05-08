<?php
    require "header.php";
?>
<body>
    <div id="announcement">
        <t>This is the home page for students to access</t><br>
        <?php
            if (isset($_SESSION['userUid'])) {
                echo 'Welcome to Checkpoint, ' . $_SESSION['userFn'];
                echo 'We wish you the best of luck in '.$_SESSION['courseName'].'!';
            }
            else {
                echo 'You are not logged in!';
            }
        ?>
    </div>
    <div id="container">
        <h1>Your List</h1>
        <button>Add a task</button>
        <button>View points</button>
        <button>Completed task</button>
        <button>Delete task</button>
    </div>
</body>
<?php
    require "footer.php";
?>