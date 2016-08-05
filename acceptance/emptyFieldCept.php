<?php
$I = new WebGuy($scenario);
$I->wantTo('Registratation using empty field');
$I->amOnPage('/');
$I->click('.register_href');
$I->click('change');
$I->wait('3');
$I->see('Please, enter your login');
?>