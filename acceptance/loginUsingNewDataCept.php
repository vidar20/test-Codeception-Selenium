<?php
$I = new WebGuy($scenario);
$I->wantTo('Log in the site using changed data users');
$I->amOnPage('/');
$I->click('.register_href');
$I->fillField('first_name','test');
$I->fillField('last_name','test');
$I->fillField('login','test');
$I->fillField('email','test@test.ua');
$I->fillField('pwd1','test');
$I->fillField('pwd2','test');
$I->click('change');

$I->see('Thank you for registration');
$I->amOnPage('/');
$I->fillField('login','test');
$I->fillField('password','test');
$I->click('#sign-in');

$I->see('Profile info: test test');

//change data
$I->fillField('first_name','new_test');
$I->fillField('last_name','new_test');
$I->fillField('login','new_test');
$I->fillField('email','new_test@test.ua');
$I->fillField('pwd1','newtest');
$I->fillField('pwd2','newtest');
$I->click('change');
$I->see('Profile info: new_test new_test');
$I->wait('1');

//logIn using new information
$I->click('Log Out');
$I->fillField('login','new_test');
$I->fillField('password','newtest');
$I->click('#sign-in');
$I->see('Profile info: new_test new_test');
$I->wait('3');
?>