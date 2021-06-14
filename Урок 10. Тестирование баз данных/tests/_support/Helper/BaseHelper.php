<?php
namespace Helper;

use Faker\Factory;

class BaseHelper extends \Codeception\Module
{
    public function getFaker($locale = 'en_EN')
    {
        $faker = Factory::create($locale);

        return $faker;
    }
}
