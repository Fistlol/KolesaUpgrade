<?php
namespace Page\Acceptance;

/**
 * Главная страница товаров
 */
class MainPage
{
    /**
     * Урл главной страницы товаров
     */
    public static $URL = '';

    /**
     * Селектор кнопки аккаунта юзера
     */
    public static $userAccountButton = '//a[@class="account"]';

    /**
     * Селектор кнопки авторизации
     */
    public static $signInButton = '//a[@class="login"]';

    /**
     * Селектор отображающий число добавленных товаров
     */
    public static $numberOfAddedProducts = '//td[@class="bold align_center"]';

    /**
     * Селектор товара
     */
    public static $productContainer = '//ul[@id="homefeatured"]//li[%s]';

    /**
     * Селектор кнопки Quick View при наведении на товар
     */
    public static $productQuickView = '//ul[@id="homefeatured"]//li[%s]//a[@class="quick-view"]';

    /**
     * Селектор модального окна
     */
    public static $modalWindow = '//div[@class="fancybox-skin"]';

    /**
     * Селектор IFrame
     */
    public static $iFrameWindow = '//iframe[@class="fancybox-iframe"]';

    /**
     * Селектор кнопки добавления товара в Wish List
     */
    public static $wishListButton = '//a[@id="wishlist_button"]';

    /**
     * Селектор всплывающего сообщения об успешном добавлении товара в Wish List
     */
    public static $successMessage = '//p[@class="fancybox-error"]';

    /**
     * Селектор кнопки закрытия всплывающего сообщения
     */
    public static $closeSuccessMessageButton = '//a[@class="fancybox-item fancybox-close"]';

    /**
     * Селектор кнопки закрытия IFrame
     */
    public static $closeIFrameButton = '//div[@class="fancybox-skin"]/a[@class="fancybox-item fancybox-close"]';

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
     * Кликает на кнопку авторизации
     */
    public function clickSignIn()
    {
        $this->acceptanceTester->click(self::$signInButton);
    }

    /**
     * Кликает на кнопку аккаунта юзера
     */
    public function clickUserAccount()
    {
        $this->acceptanceTester->click(self::$userAccountButton);
    }

    /**
     * Кликает на кнопку добавления товара в Wish List
     */
    public function clickWishList()
    {
        $this->acceptanceTester->click(self::$wishListButton);
    }

    /**
     * Кликает на кнопку закрытия всплывающего сообщения
     */
    public function clickCloseMessage()
    {
        $this->acceptanceTester->click(self::$closeSuccessMessageButton);
    }

    /**
     * Кликает на кнопку закрытия IFrame
     */
    public function clickCloseIFrameWindow()
    {
        $this->acceptanceTester->click(self::$closeIFrameButton);
    }
}
