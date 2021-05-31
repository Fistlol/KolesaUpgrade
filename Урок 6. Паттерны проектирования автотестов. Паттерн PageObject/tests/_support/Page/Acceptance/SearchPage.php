<?php
namespace Page\Acceptance;

/**
 * Страница для поиска
 */
class SearchPage
{
    /**
     * Урл страницы с платьями
     */
    public static $URL = '?id_category=11&controller=category';

    /**
     * Селектор раскладки Grid
     */
    public static $gridOptionSelected = '//li[@class="selected"]';

    /**
     * Селектор товаров с расположением Grid
     */
    public static $productsOnGridOption = '//ul[@class="product_list grid row"]';

    /**
     * Селектор раскладки List
     */
    public static $listOptionSelected = '//i[@class="icon-th-list"]';

    /**
     * Селектор товаров с расположением List
     */
    public static $productsOnListOption = '//ul[@class="product_list row list"]';

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
     * Кликает на раскладку List
     */
    public function clickListOption()
    {
        $this->acceptanceTester->click(self::$listOptionSelected);
    }
}
