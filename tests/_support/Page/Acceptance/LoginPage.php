<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class LoginPage
{
    /**
     * Стандартный юзернейм для неуспешной авторизации
     */
    public const USERNAME = 'locked_out_user';

    /**
     * Стандартный пароль для неуспешной авторизации
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * Урл страницы авторизации
     */
    public static $URL = '';

    /**
     * Селектор поля ввода для логина
     */
    public static $loginInput = '//input[@id="user-name"]';

    /**
     * Селектор поля ввода для пароля
     */
    public static $passwordInput = '//input[@id="password"]';

    /**
     * Селектор кнопки авторизации
     */
    public static $loginButton = '//input[@id="login-button"]';

    /**
     * Селектор блока ошибки
     */
    public static $errorBlock = '//h3[@data-test="error"]';

    /**
     * Селектор кнопки закрытия ошибки
     */
    public static $errorCloseButton = '//button[@class="error-button"]';

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
     * Кликает на кнопку логина
     */
    public function clickSubmit()
    {
        $this->acceptanceTester->click(self::$loginButton);
    }

    /**
     * Кликает на кнопку закрытия ошибки
     */
    public function clickCloseError()
    {
        $this->acceptanceTester->click(self::$errorCloseButton);
    }
}