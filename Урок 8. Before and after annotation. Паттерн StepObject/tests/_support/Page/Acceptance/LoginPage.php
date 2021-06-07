<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class LoginPage
{
    /**
     * Урл страницы неавторизированного пользователя
     */
    public static $unauthorizedUserURL = '?controller=authentication&back=my-account';

    /**
     * Урл страницы авторизированного пользователя
     */
    public static $authorizedUserURL = '?controller=my-account';

    /**
     * Юзернейм для успешной авторизации
     */
    public const USERNAME = 'ars-abz@mail.ru';

    /**
     * Пароль для успешной авторизации
     */
    public const PASSWORD = 'shopping';

    /**
     * Селектор поля ввода для логина
     */
    public static $loginInput = '//input[@id="email"]';

    /**
     * Селектор поля ввода для пароля
     */
    public static $passwordInput = '//input[@id="passwd"]';

    /**
     * Селектор кнопки подтверждения авторизации
     */
    public static $submitButton = '//button[@id="SubmitLogin"]';

    /**
     * Селектор кнопки Wish List
     */
    public static $wishListButton = '//a[@title="My wishlists"]';

    
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
     * Заполняет поле ввода логина
     */
    public function fillUsernameField()
    {
        $this->acceptanceTester->fillField(self::$loginInput, self::USERNAME);

        return $this;
    }

    /**
     * Заполняет поле ввода пароля
     */
    public function fillPasswordField()
    {
        $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);

        return $this;
    }

    /**
     * Кликает на кнопку подтверждения регистрации
     */
    public function clickSubmit()
    {
        $this->acceptanceTester->click(self::$submitButton);
    }

    /**
     * Кликает на кнопку Wish List
     */
    public function clickWishList()
    {
        $this->acceptanceTester->click(self::$wishListButton);
    }
}
