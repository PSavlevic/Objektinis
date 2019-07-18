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

    public function getPhoto()
    {
        if ($this->balls) {
            return "http://www.mbldesigns.com/eggart/eggs_turkey.jpg";
        } else {
            return "https://image.shutterstock.com/image-vector/no-egg-icon-free-vector-260nw-792375652.jpg";
        }
    }
}

$clothes = new ThailandSurprise('miniskirt');
$person = new ThailandSurprise('miniskirt');
$eggs = $person->getPhoto();
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
<img src="<?php print $eggs; ?>" alt="photo">
</body>
</html>