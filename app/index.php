<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Montserrat|Raleway|Source+Code+Pro';
        body { font-family: 'Raleway', sans-serif; }
        h1 { font-family: 'Montserrat', sans-serif; }
        .container {
            max-width: 1024px;
            width: 100%;
            margin: 0 auto;
        }
    </style>
    <body>
    <div class="container">
        <header>
            <h1>Hello World!</h1>
        </header>
        <content>
        <p>This is a simple static website being served from Nginx running inside a Docker container!</p>
        <p>Today is <?= date('l \t\h\e jS - H:i') ?>.</p>
        <hr>
        <?php
        $host = 'mysql';
        $user = getenv('MYSQL_USER');
        $pass = getenv('MYSQL_PASSWORD');
        $conn = mysqli_connect($host, $user, $pass);
        if (!$conn) {
            exit('Connection failed: '. mysqli_connect_error() . PHP_EOL);
        }
        echo 'Successful database connection!'.PHP_EOL;
        ?>
        </content>
    </body>
</html>
