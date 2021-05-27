<?php

use function PHPUnit\Framework\equalTo;

class SearchBlouseCest
{
    /**  
     * Найти товар "Blouse", открыть модальное окно с этим товаром и проверить, что это нужный товар
     */

    public function checkBlouseOnPage(AcceptanceTester $I)
    {
        $unorderedListWithImagesCSS = '#homefeatured';
        $unorderedListWithImagesXPath = '//ul[@id="homefeatured"]';
        $secondElementInUnorderedListWithImagesCSS = '#homefeatured > li:nth-child(2)';
        $secondElementInUnorderedListWithImagesXPath = '//ul[@id="homefeatured"]//li[2]';
        $quickViewOnSecondElementInUnorderedListWithImagesCSS = '#homefeatured > li:nth-child(2) a.quick-view';
        $quickViewOnSecondElementInUnorderedListWithImagesXPath = '//ul[@id="homefeatured"]//li[2]//a[@class="quick-view"]';
        $modalWindowCSS = '.fancybox-type-iframe';
        $modalWindowXPath = '//div[@class="fancybox-wrap fancybox-desktop fancybox-type-iframe fancybox-opened"]';
        $IFrameCSS = '.fancybox-iframe';
        $IFrameXPath = '//iframe[@class="fancybox-iframe"]';
        $h1InIFrameCSS = 'h1';
        $h1InIFrameXPath = '//h1';

        $I->amOnPage('');
        $I->waitForElementVisible('#homefeatured');
        $I->moveMouseOver('#homefeatured > li:nth-child(2)');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed > div');
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForText('Blouse', 10, 'h1');
    }
}
