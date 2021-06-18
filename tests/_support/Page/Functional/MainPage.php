<?php
namespace Page\Functional;

/**
 * Главная страница
 */
class MainPage
{
    /**
     * Стандартный текст для ввода в поле поиска
     */
    public const PRINTED_DRESS = 'Printed dress';

    /**
     * Урл главной страницы
     */
    public static $URL = '';

    /**
     * Селектор поля поиска
     */
    public static $searchFormField = '//input[@id="search_query_top"]';

    /**
     * Селектор кнопки поиска
     */
    public static $searchButton = '//form[@id="searchbox"]//button';

    /**
     * Объект Tester-а
     * @var \FunctionalTester;
     */
    protected $functionalTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\FunctionalTester $I)
    {
        $this->functionalTester = $I;
    }

    /**
     * Кликает на поле ввода поля поиска товаров
     */
    public function clickSearchField()
    {
        $this->functionalTester->click(self::$searchFormField);

        return $this;
    }

    /**
     * Заполняет поле ввода поиска товаров
     */
    public function fillSearchField()
    {
        $this->functionalTester->fillField(self::$searchFormField, self::PRINTED_DRESS);

        return $this;
    }

    /**
     * Кликает на кнопку поиска
     */
    public function clickSearchButton()
    {
        $this->functionalTester->click(self::$searchButton);
    }
}