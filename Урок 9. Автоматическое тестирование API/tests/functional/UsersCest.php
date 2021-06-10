<?php

use Codeception\Example;

/**
 * Класс для работы с юзером
 */
class UsersCest
{
    /**
     * Добавление юзера
     */
    public function _before(\Step\Functional\ResponseStep $I)
    {
        $I->addUser();
    }

    /**
     * Тест на изменение юзера
     * @group test1
     */
    public function checkUserChange(\Step\Functional\ResponseStep $I)
    {
        $I->changeUser();
    }

    /**
     * Удаление юзера
     */
    public function _after(\Step\Functional\ResponseStep $I)
    {
        $I->deleteUser();
    }

    /**
     * Проверяем негативный сценарий на создание пользователя без email
     * @group test4
     * @dataProvider getDataForCreateUserNegative
     * @param Example $data
     */
    public function checkUserPostNegative(FunctionalTester $I, Example $data)
    {
        $email = $I->getFaker()->email;
        $owner = $I->getFaker()->userName;

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', [
            $data['email'] ? $email : null,
            $data['owner'] ? $owner : null,
        ]);
        $I->seeResponseContainsJson($data['errorText']);
    }

    /**
     * dataProvider для теста checkUserPostNegative
     */
    protected function getDataForCreateUserNegative()
    {
        return [
            [
                'email' => true,
                'owner' => false,
                'errorText' => ['status' => false]
            ],
            [
                'email' => false,
                'owner' => true,
                'errorText' => ['status' => false]
            ]
        ];
    }
}
