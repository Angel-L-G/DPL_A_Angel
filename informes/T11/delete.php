<?php
    $connection = mysqli_connect(
        'localhost',
        'root',
        '1q2w3e4r',
        'prueba'
    );

    echo '<pre>';
    $name = $_POST['name'];

    $delete = "DELETE FROM users WHERE name='$name'";

    $return_delete= mysqli_query($connection, $delete);
    print_r($return_delete);

    mysqli_close($connection);
?>