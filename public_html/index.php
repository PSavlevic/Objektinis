<?php

//require 'config.php';
class FileDB
{
    private $file_name;
    private $data;

    public function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    public function load()
    {
        if (file_exists($this->file_name)) {
            $json = file_get_contents($this->file_name);

            if ($json !== false) {
                $this->data = json_decode($this->data, true);
            }
        }
    }

    public function getData()
    {
        if ($this->data == null) {
            $this->load();
        } else {
            return $this->data;
        }
    }

}

$newObject = new FileDB('text.txt');


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