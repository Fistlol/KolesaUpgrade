<?php

class SearchDressesCest
{
    /*  
        Проверить поиск по тексту и по количеству найденных элементов
    */
    
    // tests
    public function checkNumberOfDresses(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->waitForElementVisible('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->waitForElementVisible('#center_column > ul');
        $I->seeNumberOfElements('.product-container', 5);
    }
}
