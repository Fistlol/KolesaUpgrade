<?php
namespace Page\Functional;

/**
 * Страница с платьями
 */
class DressesPage
{
    /**
     * Урл страницы с платьями
     */
    public static $URL = 
    '?controller=search&orderby=position&orderway=desc&search_query=Printed+dress&submit_search=';

    /**
     * Селектор платья
     */
    public static $dressContainer = '//div[@class="product-container"]';

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
}