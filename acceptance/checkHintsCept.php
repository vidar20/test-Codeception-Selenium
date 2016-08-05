<?php
$I = new WebGuy($scenario);
$I->wantTo('Check how appear and disappear hits');
$I->amOnPage('/');

$I->click('.field-block:nth-child(1) > .field-info > img');
$I->wait('1'); 
$I->see('Enter your login name');

// check English
$I->click('.field-block:nth-child(2) > .field-info > img');
$I->wait('1'); 
$I->see('Password includes numbers and latin');
$I->dontSee('Enter your login name');
?>