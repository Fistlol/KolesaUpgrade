<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\WishListPage;

/**
 * Класс для добавления товаров в Wish List
 */
class ShoppingCest
{
    public const PRODUCT_NMB = 2;
    
    public function _before(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        $mainPage = new MainPage($I);

        $I->amOnPage(MainPage::$URL);
        $mainPage->clickSignIn();
        $I->seeInCurrentUrl(LoginPage::$unauthorizedUserURL);
        $loginPage->fillUsernameField()
                        ->fillPasswordField()
                        ->clickSubmit();
    }

    public function _after(AcceptanceTester $I)
    {
        $wishListPage = new WishListPage($I);

        $I->seeInCurrentUrl(WishListPage::$wishListURL);
        $wishListPage->clickClearWishList();
        $I->acceptPopup();
        $wishListPage->clickLogout();
    }

    /**
     * Проверка добавленных товаров в Wish List
     */
    public function checkNumberOfAddedProductsToWishList(\Step\Acceptance\ShoppingStep $I)
    {
        $loginPage = new LoginPage($I);
        $mainPage = new MainPage($I);

        $I->amOnPage(MainPage::$URL);

        $I->comment('Добавляю товары в Wish List');
        $I->addProductToWishList();

        $mainPage->clickUserAccount();
        $I->seeInCurrentUrl(LoginPage::$authorizedUserURL);
        $loginPage->clickWishList();
        $I->seeInCurrentUrl(WishListPage::$wishListURL);

        $addedProducts = (Integer) $I->grabTextFrom(WishListPage::$addedProductsFromWishList);

        $I->assertEquals(
            self::PRODUCT_NMB, 
            $addedProducts, 
            'Check that added products equals to ' . self::PRODUCT_NMB
        );
    }
}
