<?php
$I = new WebGuy($scenario);
$I->wantTo('Create new user');
$I->amOnPage('/');
$I->click('.register_href');
$I->fillField('first_name','test');
$I->fillField('last_name','test');
$I->fillField('login','test');
$I->fillField('email','test@test.ua');
$I->fillField('pwd1','test');
$I->fillField('pwd2','test');
$I->click('change');
$I->wait('3');
$I->see('Thank you for registration');
?>