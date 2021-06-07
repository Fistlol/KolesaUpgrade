<?php
namespace Page\Acceptance;

/**
 * Страница с полями
 */
class FillPage
{
    /**
     * Урл страницы с полями
     */
    public static $URL = '';

    /**
     * Локатор поля имени
     */
    public static $firstName = '//input[@id="firstName"]';
    
    /**
     * Локатор поля фамилии
     */
    public static $lastName = '//input[@id="lastName"]';

    /**
     * Локатор поля email
     */
    public static $email = '//input[@id="input_38"]';

    /**
     * Локатор поля номера телефона
     */
    public static $phoneNumber = '//input[@id="phoneNumber"]';

    /**
     * Локатор поля адреса
     */
    public static $address = '//input[@id="address"]';

    /**
     * Локатор поля города
     */
    public static $city = '//input[@id="city"]';

    /**
     * Локатор поля региона
     */
    public static $region = '//input[@id="state"]';

    /**
     * Локатор поля почтового индекса
     */
    public static $postal = '//input[@id="postal"]';

    /**
     * Кнопка метода оплаты
     */
    public static $paymentMethodButton = '//input[@id="input_32_paymentType_credit"]';

    /**
     * Локатор поля имени у владельца карты
     */
    public static $cardFirstName = '//input[@id="input_32_cc_firstName"]';

    /**
     * Локатор поля фамилии у владельца карты
     */
    public static $cardLastName = '//input[@id="input_32_cc_lastName"]';

    /**
     * Локатор поля номера карты
     */
    public static $cardNumber = '//input[@id="input_32_cc_number"]';

    /**
     * Локатор поля защитного кода карты
     */
    public static $cardSecurityCode = '//input[@id="input_32_cc_ccv"]';

    /**
     * Локатор поля срока месяца
     */
    public static $cardExpirationMonth = '//select[@id="input_32_cc_exp_month"]';

    /**
     * Локатор поля срока года
     */
    public static $cardExpirationYear = '//select[@id="input_32_cc_exp_year"]';

    /**
     * Локатор поля платежного адреса у владельца карты
     */
    public static $cardAddress = '//input[@id="input_32_addr_line1"]';

    /**
     * Локатор поля города у владельца карты
     */
    public static $cardCity = '//input[@id="input_32_city"]';

    /**
     * Локатор поля региона у владельца карты
     */
    public static $cardRegion = '//input[@id="input_32_state"]';

    /**
     * Локатор поля почтового индекса у владельца карты
     */
    public static $cardPostal = '//input[@id="input_32_postal"]';

    /**
     * Локатор поля страны у владельца карты
     */
    public static $cardCountry = '//select[@id="input_32_country"]';

    /**
     * Кнопка регистрации формы
     */
    public static $registerButton = '//button[@id="input_36"]';

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
