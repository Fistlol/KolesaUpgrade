<?php
namespace Page\Acceptance;

/**
 * Главная страница юзеров
 */
class MainPage
{
    /**
     * Урл главной страницы юзеров
     */
    public static $URL = '?owner=Fistlol';

    /**
     * Селектор кнопки Snap
     */
    public static $snapButton = '//button[@id="snap"]';

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

    /**
     * Кликает на кнопку Snap
     */
    public function clickSnapButton()
    {
        $this->acceptanceTester->click(self::$snapButton);
    }

}
