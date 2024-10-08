<?php
    $connection = mysqli_connect(
        'localhost',
        'root',
        '1q2w3e4r',
        'prueba'
    );

    echo '<pre>';

    $name = $_POST['name'];
    $email = $_POST['email'];

    $insert = "insert into users(name, email) values('$name', '$emai');";
    
    $return_insert = mysqli_query($connection, $insert);
    print_r($return_insert);

    mysqli_close($connection);