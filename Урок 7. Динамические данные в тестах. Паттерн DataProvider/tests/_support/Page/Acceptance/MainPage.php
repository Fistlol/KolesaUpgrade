<?php
namespace Page\Acceptance;

/**
 * Главная страница Хабра
 */
class MainPage
{
    /**
     * Урл главной страницы
     */
    public static $URL = '';

    /**
     * Локатор категории
     */
    public static $category = '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/%s"]';

    /**
     * Локатор выбранной категории
     */
    public static $selectedCategory = '//a[@class="nav-links__item-link nav-links__item-link_current"]';

    /**
     * Объект Tester-а
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
