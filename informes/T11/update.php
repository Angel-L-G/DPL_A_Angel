<?php
    $connection = mysqli_connect(
        'localhost',
        'root',
        '1q2w3e4r',
        'prueba'
    );

    echo '<pre>';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $update = "UPDATE users SET email='$email', name='$name' WHERE id=$id";
    $return_update = mysqli_query($connection, $update);
    print_r($return_update);

    mysqli_close($connection);