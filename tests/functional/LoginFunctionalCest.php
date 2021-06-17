<?php

use Page\Functional\LoginPage;

/**
 * Класс для проверки авторизации
 */
class LoginFunctionalCest
{
    /**
     * Проверяет неуспешную авторизацию
     */
    public function checkUnsuccessfulLogin(FunctionalTester $I)
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