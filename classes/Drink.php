<?php

declare(strict_types=1);

class Drink
{
    private $data;

    public function __construct($data = null)
    {
        if ($data != null) {
            $this->setData($data);
        } else {

            $this->data = [
                'name' => null,
                'amount_ml' => null,
                'abarot' => null,
                'image' => null
            ];
        }

    }

    public function getData()
    {
        return [
            'name' => $this->getName(),
            'amount_ml' => $this->getAmountMl(),
            'abarot' => $this->getAbarot(),
            'image' => $this->getImage()
        ];
    }


    public function setData($data)
    {
        $this->setName($data['name'] ?? null);
        $this->setAmount_ml($data['amount_ml'] ?? null);
        $this->setAbarot($data['abarot'] ?? null);
        $this->setImage($data['image'] ?? null);
    }


    public function setName(string $name)
    {
        $this->data['name'] = $name;
    }

    public function getName()
    {
        return $this->data['name'];
    }

    public function setAmount_ml(int $amount)
    {
        $this->data['amount_ml'] = $amount;
    }

    public function getAmountMl()
    {
        return $this->data['amount_ml'];
    }

    public function setAbarot(float $abarot)
    {
        $this->data['abarot'] = $abarot;
    }

    public function getAbarot()
    {
        return $this->data['abarot'];
    }

    public function setImage(string $image)
    {
        $this->data['image'] = $image;

    }

    public function getImage()
    {
        return $this->data['abarot'];
    }


}

?>

