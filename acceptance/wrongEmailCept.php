<?php
$I = new WebGuy($scenario);
$I->wantTo('Create new user');
$I->amOnPage('/');
$I->click('.register_href');
$I->fillField('first_name','test');
$I->fillField('last_name','test');
$I->fillField('login','test');
$I->fillField('email','test@');
$I->fillField('pwd1','test');
$I->fillField('pwd2','test');
$I->click('change');
$I->wait('10');
$I->see('Invalid email');
?>