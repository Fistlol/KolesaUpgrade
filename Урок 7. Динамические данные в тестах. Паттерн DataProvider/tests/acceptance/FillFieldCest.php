<?php

use Faker\Factory;
use Helper\CustomPhoneNumberProvider;
use Page\Acceptance\FillPage;

/**
 * Класс для тестирования формы
 */
class FillFieldCest
{
    /**
     * Тест на проверку заполнения полей
     * @group test2
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $faker = Factory::create('ru_RU');

        $firstName = $faker->firstName;
        $lastName = $faker->lastName;
        $email = $faker->email;
        $phoneNumber = $I->getFaker()->getPhoneKz();
        $address = $faker->address;
        $city = $faker->city;
        $region = $faker->region;
        $postal = $faker->postcode;
        $cardFirstName = $I->getFaker()->getFirstName();
        $cardLastName = $I->getFaker()->getLastName();
        $cardNumber = $I->getFaker()->getCardNumber();
        $cardSecurityCode = $I->getFaker()->getCardCode();
        $cardExpirationMonth = $I->getFaker()->getMonth();
        $cardExpirationYear = $I->getFaker()->getYear();
        $cardAddress = $faker->address;
        $cardCity = $faker->city;
        $cardRegion = $faker->region;
        $cardPostal = $faker->postcode;
        $cardCountry = $I->getFaker()->getCountry();

        
        $I->amOnPage(FillPage::$URL);
        $I->fillField(FillPage::$firstName, $firstName);
        $I->fillField(FillPage::$lastName, $lastName);
        $I->fillField(FillPage::$email, $email);
        $I->fillField(FillPage::$phoneNumber, $phoneNumber);
        $I->fillField(FillPage::$address, $address);
        $I->fillField(FillPage::$city, $city);
        $I->fillField(FillPage::$region, $region);
        $I->fillField(FillPage::$postal, $postal);
        $I->click(FillPage::$paymentMethodButton);
        $I->fillField(FillPage::$cardFirstName, $cardFirstName);
        $I->fillField(FillPage::$cardLastName, $cardLastName);
        $I->fillField(FillPage::$cardNumber, $cardNumber);
        $I->fillField(FillPage::$cardSecurityCode, $cardSecurityCode);
        $I->click(FillPage::$cardExpirationMonth);
        $I->selectOption(FillPage::$cardExpirationMonth, $cardExpirationMonth);
        $I->click(FillPage::$cardExpirationYear);
        $I->selectOption(FillPage::$cardExpirationYear, $cardExpirationYear);
        $I->fillField(FillPage::$cardAddress, $cardAddress);
        $I->fillField(FillPage::$cardCity, $cardCity);
        $I->fillField(FillPage::$cardRegion, $cardRegion);
        $I->fillField(FillPage::$cardPostal, $cardPostal);
        $I->click(FillPage::$cardCountry);
        $I->selectOption(FillPage::$cardCountry, $cardCountry);
        $I->click(FillPage::$registerButton);
        $I->waitForText('Good job', 2, '//h1');
    }
}
