<?php

use Page\Acceptance\MainPage;

/**
 * Класс юзеров
 */
class UsersCest
{
    /**
     * Данные для создания юзера
     * @var array
     */
    protected $data;

    /**
     * Данные созданых юзеров
     */
    protected $arrayOfData;

    /**
     * Число созданных юзеров
     */
    public static $numberOfCreatedUsers = 10;

    /**
     * Количество юзеров
     */
    public static $numberOfUsers = 10;

    /**
     * Создание юзеров в Базе Данных
     */
    public function _before(AcceptanceTester $I)
    {
        $faker = $I->getFaker();

        $this->arrayOfData = [];
        $I->amOnPage(MainPage::$URL);

        for ($i = 0; $i < self::$numberOfUsers; $i++) {
            $this->data = [
                "job" => $faker->company,
                "superhero" => $faker->boolean(),
                "skill" => $faker->word,
                "email" => $faker->email,
                "name" => $faker->name,
                "DOB" => $faker->date("Y-m-d"),
                "avatar" => $faker->imageUrl(),
                "canBeKilledBySnap" => $faker->boolean(),
                "created_at" => $faker->date("Y-m-d"),
                "owner" => "Fistlol"
            ];

            $I->haveInCollection('people', $this->data);
            $this->arrayOfData[$i] = $this->data;
        }
    }

    /**
     * Проверка на создание юзера
     * @group test1
     */
    public function checkCreateUser(AcceptanceTester $I)
    {
        $mainPage = new MainPage($I);

        /**
         * Число созданных юзеров в массиве
         */
        $numberOfUsersInArray = count($this->arrayOfData);

        $I->assertEquals(
            self::$numberOfCreatedUsers,
            $numberOfUsersInArray,
            'Check number of created users is equal 10'
        );

        $I->waitForElementVisible(MainPage::$snapButton);
        $mainPage->clickSnapButton();
        $I->wait(2);
        $I->dontSeeInCollection('people', array('owner' => 'Fistlol', 'canBeKilledBySnap' => true));
        $I->seeInCollection('people', array('owner' => 'Fistlol', 'canBeKilledBySnap' => false));
    }
}
