<?php

class ThailandSurprise{
    private $balls;

    public function __construct($balls)
    {
        $this -> balls = $balls;
    }
}

$newObject = new ThailandSurprise(rand(false, true));
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