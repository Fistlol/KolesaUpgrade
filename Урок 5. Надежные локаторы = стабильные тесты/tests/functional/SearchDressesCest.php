<?php

class SearchDressesCest
{   
    /**   
     * Проверить поиск по тексту и количеству найденных элементов
     */
    
    // tests
    public function checkNumberOfDresses(FunctionalTester $I)
    {
        $searchFormFieldCSS = '#search_query_top';
        $searchFormFieldXPath = '//input[@id="search_query_top"]';
        $searchButtonCSS = '#searchbox > button';
        $searchButtonXPath = '//form[@id="searchbox"]//button';
        $productContainerCSS = '.product-container';
        $productContainerXPath = '//div[@class="product-container"]';

        $I->amOnPage('');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.product-container', 5);
    }
}
