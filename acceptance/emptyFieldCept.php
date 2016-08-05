<?php
$I = new WebGuy($scenario);
$I->wantTo('Create new user');
$I->amOnPage('/');
$I->click('.register_href');
$I->click('change');
$I->wait('5');
$I->see('Please, enter your login');
?>