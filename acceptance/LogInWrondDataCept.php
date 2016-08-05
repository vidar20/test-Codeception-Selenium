<?php
$I = new WebGuy($scenario);
$I->wantTo('Log in using incorect data');
$I->amOnPage('/');
$I->fillField('login','incorectLogin');
$I->fillField('password','incorectPassword');
$I->click('#sign-in');
$I->wait('5');
$I->see('You wrote incorect login or password');
?>