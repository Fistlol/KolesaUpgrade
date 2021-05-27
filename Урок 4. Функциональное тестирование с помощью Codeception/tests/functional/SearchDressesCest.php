<?php

class SearchDressesCest
{   
    /**   
     * Проверить поиск по тексту и количеству найденных элементов
     */
    
    // tests
    public function checkNumberOfDresses(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.product-container', 5);
    }
}
