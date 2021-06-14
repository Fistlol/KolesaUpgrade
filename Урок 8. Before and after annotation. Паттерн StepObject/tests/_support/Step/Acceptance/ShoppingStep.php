<?php
namespace Step\Acceptance;

use Page\Acceptance\MainPage;

class ShoppingStep extends \AcceptanceTester
{
    public const PRODUCT_NMB = 2;

    public function addProductToWishList()
    {
        $I = $this;
        $mainPage = new MainPage($I);

        for($i = 1; $i <= self::PRODUCT_NMB; $i++) {
            $I->moveMouseOver(sprintf(MainPage::$productContainer, $i));
            $I->click(sprintf(MainPage::$productQuickView, $i));
            $I->waitForElementVisible(MainPage::$modalWindow);
            $I->switchToIFrame(MainPage::$iFrameWindow);
            $I->waitForElementClickable(MainPage::$wishListButton);
            $mainPage->clickWishList();
            $I->waitForElementVisible(MainPage::$successMessage);
            $I->waitForElementClickable(MainPage::$closeSuccessMessageButton);
            $mainPage->clickCloseMessage();
            $I->switchToIFrame();
            $mainPage->clickCloseIFrameWindow();
            $I->wait(2);
        }
    }
}