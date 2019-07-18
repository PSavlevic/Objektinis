<?php

class ThailandSurprise
{
    public $clothes;
    private $balls;
    private $name;

    public function __construct($clothes, $name)
    {
        $this->clothes = $clothes;
        $this->balls = rand(false, true);
        $this->name = $name;
    }

    public function attachBalls()
    {
        $this->balls = true;
    }

    public function detachBalls()
    {
        $this->balls = false;
    }

    public function getPhoto()
    {
        if ($this->balls) {
            return 'http://www.mbldesigns.com/eggart/eggs_turkey.jpg';
        } else {
            return 'https://image.shutterstock.com/image-vector/no-egg-icon-free-vector-260nw-792375652.jpg';
        }
    }
}

$person = new ThailandSurprise('miniskirt', 'TrippleX');
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
    <img src="<?php print $person->getPhoto(); ?>" alt="photo">
</body>
</html>