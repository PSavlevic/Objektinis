<?php

class ThailandSurprise
{
    public $clothes;
    private $balls;

    public function __construct($clothes)
    {
        $this->clothes = $clothes;
        $this->balls = rand(false, true);
    }

    public function attachBalls()
    {
        $this->balls = true;
    }

    public function detachBalls()
    {
        $this->balls = false;
    }
}

$clothes = new ThailandSurprise('miniskirt');
$person = new ThailandSurprise('miniskirt');
$person->attachBalls();
$person->detachBalls();
var_dump($person);

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