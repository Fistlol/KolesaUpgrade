<?php
namespace Page\Acceptance;

/**
 * Страница Wish List
 */
class WishListPage
{
    /**
     * Урл страницы Wish List
     */
    public static $wishListURL = '?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * Селектор кнопки удаления товаров из Wish List
     */
    public static $clearButton = '//a[@class="icon"]';

    /**
     * Селектор кнопки выхода из аккаунта юзера
     */
    public static $logoutButton = '//a[@class="logout"]';

    /**
     * Селектор числа добавленных товаров
     */
    public static $addedProductsFromWishList = '//td[@class="bold align_center"]';

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
     * Кликает на кнопку удаления товаров из Wish List
     */
    public function clickClearWishList()
    {
        $this->acceptanceTester->click(self::$clearButton);
    }

    /**
     * Кликает на кнопку выхода из аккаунта юзера
     */
    public function clickLogout()
    {
        $this->acceptanceTester->click(self::$logoutButton);
    }
}
