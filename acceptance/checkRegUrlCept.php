<?php
$I = new WebGuy($scenario);
$I->wantTo('Check reg url');
$I->amOnPage('/');
$I->click(' Register','.menu-items');
$I->wait('5');
$I->see('Register');
?>