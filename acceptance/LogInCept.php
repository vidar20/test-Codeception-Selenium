<?php
$I = new WebGuy($scenario);
$I->wantTo('Log in the site');
$I->amOnPage('/');
$I->click('.register_href');
$I->fillField('first_name','test');
$I->fillField('last_name','test');
$I->fillField('login','test');
$I->fillField('email','test@test.ua');
$I->fillField('pwd1','test');
$I->fillField('pwd2','test');
$I->click('change');
$I->wait('2');
$I->see('Thank you for registration');
$I->amOnPage('/');
$I->fillField('login','test');
$I->fillField('password','test');
$I->click('#sign-in');
$I->wait('3');
$I->see('Profile info: test test');
?>