<?php
namespace Step\Functional;

class ResponseStep extends \FunctionalTester
{
    public static $defaultSchema = [
        'job'       => 'string',
        '_id'       => 'string',
        'email'     => 'string',
        'name'      => 'string',
        'owner'     => 'string'
    ];

    public static $newUserData = [
        'email' => 'newEmail@test.test',
        'name'  => 'newName',
        'job'   => 'newCompany',
    ];

    public function addUser()
    {
        $I = $this;

        $userData = [
            'email' => $I->getFaker()->email,
            'owner' => 'Fistlol',
            'name'  => $I->getFaker()->name,
            'job'   => $I->getFaker()->company,
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);    
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', ['owner' => 'Fistlol']);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);
        $I->sendGet('people', $userData);
    }

    public function changeUser()
    {
        $I = $this;

        $I->haveHttpHeader('Content-Type', 'application/json');

        $userID = $I->grabDataFromResponseByJsonPath('0._id')[0];

        $I->sendPut('human?_id=' . $userID, self::$newUserData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['nModified' => 1]);
        $I->sendGet('people', ['owner' => 'Fistlol']);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);
        $I->seeResponseContainsJson(self::$newUserData);
    }
    
    public function deleteUser()
    {
        $I = $this;

        $I->haveHttpHeader("Content-Type", "application/json");

        $userID = $I->grabDataFromResponseByJsonPath('0._id')[0];

        $I->sendDelete("human?_id=" . $userID);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(["deletedCount" => 1]);
        $I->sendGet("people", ['owner' => 'Fistlol']);
    }
}