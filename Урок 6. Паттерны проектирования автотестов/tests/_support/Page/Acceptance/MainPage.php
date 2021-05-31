<?php
namespace Page\Acceptance;

/**
 * Главная траница товаров
 */
class MainPage
{
    /**
     * Урл главной страницы товаров
     */
    public static $URL = '';

    /**
     * Селектор блока платьев
     */
    public static $blockDress = '//div[@id="block_top_menu"]/ul/li/a[@title="Dresses"]';

    /**
     * Селектор наведения на блок платьев
     */
    public static $blockDressHover = '//div[@id="block_top_menu"]/ul/li[@class="sfHover"]';

    /**
     * Селектор кнопки летних платьев
     */
    public static $buttonSummerDresses = '//div[@id="block_top_menu"]/ul/li/ul/li/a[@title="Summer Dresses"]';
    
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
     * Кликает на кнопку Summer Dresses из выпадающего списка
     */
    public function clickSummerDressesButton()
    {
        $this->acceptanceTester->click(self::$buttonSummerDresses);
    }

    /**
     * Наводит мышкой на блок Dress
     */
    public function moveMouseOverToBlockDress()
    {
        $this->acceptanceTester->moveMouseOver(self::$blockDress);
    }


}
