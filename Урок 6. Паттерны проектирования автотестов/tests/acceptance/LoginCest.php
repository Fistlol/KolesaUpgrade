<?php

use Page\Acceptance\LoginPage;

/**
 * Класс для проверки авторизации
 */
class LoginCest
{
    /**
     * Проверяет неуспешную авторизацию
     */
    public function checkUnsuccessfulLogin(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        $loginPage->fillUsernameField()
                  ->fillPasswordField()
                  ->clickSubmit();
        $I->seeElement(LoginPage::$errorBlock);
        $loginPage->clickCloseError();
        $I->dontSeeElement(LoginPage::$errorBlock);
    }
}
