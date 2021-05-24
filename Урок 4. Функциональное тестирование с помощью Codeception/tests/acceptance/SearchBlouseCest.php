<?php

use function PHPUnit\Framework\equalTo;

class SearchBlouseCest
{
    /*  
        Найти товар "Blouse", открыть модальное окно с этим товаром и проверить, что это нужный товар
    */

    public function checkBlouseOnPage(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->waitForElementVisible('#homefeatured');
        $I->moveMouseOver('#homefeatured > li:nth-child(2)');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed > div');
        $I->switchToIFrame('.fancybox-iframe');
        
        codecept_debug($I->grabTextFrom('h1'));
    }
}
