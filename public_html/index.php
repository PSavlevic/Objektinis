<?php

class FileDB
{
    private $file_name;
    private $data;

    public function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    public function load($file_name)
    {
        if (file_exists($this -> file_name)) {
            $this -> data = file_get_contents($file_name);
            if ($this -> data !== false) {
                return json_decode($this->data, true);
            }
        }
        return false;
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