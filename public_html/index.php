<?php

class FileDB
{
    private $file_name;

    public function __construct($file_name)
    {
        $this->file_name = $file_name;
    }
}

$newObject = new FileDB('info.txt');
var_dump($newObject);

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To PHP FightClub!</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/style.css">
</head>
<body>
</body>
</html>