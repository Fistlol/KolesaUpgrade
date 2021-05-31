<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для проверки смены раскладки результатов поиска
 */
class SearchCest
{
    /**
     * Проверяет смену раскладки
     */
    public function checkChangedLayout(AcceptanceTester $I)
    {
        $mainPage = new MainPage($I);
        $searchPage = new SearchPage($I);

        $I->amOnPage(MainPage::$URL);
        $mainPage->moveMouseOverToBlockDress();
        $I->waitForElement(MainPage::$blockDressHover);
        $mainPage->clickSummerDressesButton();
        $I->seeInCurrentUrl(SearchPage::$URL);
        $I->seeElement(SearchPage::$gridOptionSelected);
        $I->waitForElement(SearchPage::$productsOnGridOption, 5);
        $searchPage->clickListOption();
        $I->waitForElementNotVisible(SearchPage::$productsOnGridOption, 5);
        $I->waitForElementVisible(SearchPage::$productsOnListOption, 5);
    }
}
