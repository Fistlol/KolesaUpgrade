<?php

use Page\Functional\MainPage;
use Page\Functional\DressesPage;

/**
 * Класс для поиска платьев
 */
class DressesCest
{
    /**
     * Количество платьев
     */
    public static $numberOfDresses = 5;
    
    /**   
     * Проверить поиск по тексту и количество найденных элементов
     */
    public function checkNumberOfDresses(FunctionalTester $I)
    {
        $mainPage = new MainPage($I);

        $I->amOnPage(MainPage::$URL);
        $mainPage->clickSearchField()
                 ->fillSearchField()
                 ->clickSearchButton();
        $I->seeInCurrentUrl(DressesPage::$URL);
        $I->seeNumberOfElements(DressesPage::$dressContainer, self::$numberOfDresses);
    }
}