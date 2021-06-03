<?php
namespace Helper;

use Faker\Provider\Base;

class CustomPaymentCardProvider extends Base
{
    protected $firstNames = [
        'IVAN',
        'ALEKSEY',
        'DMITRIY',
        'NASTYA',
        'MARIYA'
    ];

    protected $lastNames = [
        'GROZNYI',
        'POPOV',
        'SMIRNOV',
        'PETROVA',
        'SOKOLOVA'
    ];

    protected $cardNumbers = [
        '5555555555554444',
        '5169147129584558',
        '5100000000000412',
        '4222222222222220',
        '4003830171874018'
    ];

    protected $cardSecurityCodes = [
        '432',
        '126',
        '634',
        '865',
        '532'
    ];

    protected $cardMonths = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];

    protected $cardYears = [
        '2021',
        '2022',
        '2023',
        '2024',
        '2025',
        '2026',
        '2027',
        '2028',
        '2029',
        '2030'
    ];

    protected $countries = [
        'Kazakhstan',
        'Russia',
        'United States',
        'Canada',
        'Italy'
    ];

    /**
     * Возвращает рандомное имя
     */
    public function getFirstName()
    {
        return sprintf(
            $this->firstNames[array_rand($this->firstNames)]
        );
    }

    /**
     * Возвращает рандомную фамилию
     */
    public function getLastName()
    {
        return sprintf(
            $this->lastNames[array_rand($this->lastNames)]
        );
    }

    /**
     * Возвращает рандомный номер карты
     */
    public function getCardNumber()
    {
        return sprintf(
            '%d',
            $this->cardNumbers[array_rand($this->cardNumbers)]
        );
    }

    /**
     * Возвращает рандомный код карты
     */
    public function getCardCode()
    {
        return sprintf(
            '%d',
            $this->cardSecurityCodes[array_rand($this->cardSecurityCodes)]
        );
    }

    /**
     * Возвращает рандомный месяц
     */
    public function getMonth()
    {
        return sprintf(
            $this->cardMonths[array_rand($this->cardMonths)]
        );
    }

    /**
     * Возвращает рандомный год
     */
    public function getYear()
    {
        return sprintf(
            $this->cardYears[array_rand($this->cardYears)]
        );
    }

    /**
     * Возвращает рандомную страну
     */
    public function getCountry()
    {
        return sprintf(
            $this->countries[array_rand($this->countries)]
        );
    }
}
