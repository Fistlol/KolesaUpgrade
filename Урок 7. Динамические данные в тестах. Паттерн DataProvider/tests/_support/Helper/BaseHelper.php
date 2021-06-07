<?php
namespace Helper;

use Faker\Factory;

class BaseHelper extends \Codeception\Module
{
    public function getFaker($locale = 'ru_RU')
    {
        $faker = Factory::create($locale);
        $faker->addProvider(new CustomPhoneNumberProvider($faker));
        $faker->addProvider(new CustomPaymentCardProvider($faker));

        return $faker;
    }
}
