<?php

use Codeception\Example;
use Page\Acceptance\MainPage;

/**
 * Класс для переключения между категориями
 * @group test
 */
class SwitchCest
{
    /**
     * Тест на проверку рандомного переключения между категориями
     * @group test
     * @param Example $data
     * @dataProvider getDataFromRandomCategory
     */
    public function switchBetweenNavigationMenu(AcceptanceTester $I, Example $data)
    {
        $I->amOnPage(MainPage::$URL);
        $I->click(sprintf(MainPage::$category, $data['category']));
        $I->seeInCurrentUrl($data['url']);
        $currentCategory = $I->grabTextFrom(MainPage::$selectedCategory);
        $I->waitForText($currentCategory);
    }

    protected function getDataFromRandomCategory() 
    {
        /**
         * Локатор категорий
         */
        $categories = [
            'develop/',
            'admin/',
            'design/',
            'management/',
            'marketing/',
            'popsci/'
        ];

        /**
         * Рандомная категория
         */
        $randomCategory = array_rand($categories, 2);

        return [
            [
                'category' => $categories[$randomCategory[0]],
                'url' => $categories[$randomCategory[0]]
            ],
            [
                'category' => $categories[$randomCategory[1]],
                'url' => $categories[$randomCategory[1]]
            ]
        ];
    }
}
