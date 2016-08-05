<?php
$I = new WebGuy($scenario);
$I->wantTo('Change language');
$I->amOnPage('/');
// check German
$I->click('img','a[href="?lang=de"]');
$I->see('Klicken Sie hier registrieren');
$I->wait('3'); 
// check English
$I->click('img','a[href="?lang=en"]');
$I->see('Click here to register');
$I->wait('3');
// check Russian
$I->click('img','a[href="?lang=ru"]');
$I->see('Нажмите здесь, чтобы зарегистрироваться');
$I->wait('3');
// check Ukrainian
$I->click('img','a[href="?lang=ua"]');
$I->see('Натисніть тут, щоб зареєструватися');
$I->wait('3');

?>