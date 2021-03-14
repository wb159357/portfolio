<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('JUICE', 600, 'orange.jpg', 'アイス');
$coffee = new Drink('COFFEE', 500, 'coffee.jpg', 'ホット');
$curry = new Food('CURRY', 900, 'curry.jpg', 3);
$pasta = new Food('PASTA', 1200, 'pasta.jpg', 1);

$menus = array($juice, $coffee, $curry, $pasta);

$user1 = new User('suzuki', 'male');
$user2 = new User('tanaka', 'female');
$user3 = new User('suzuki', 'female');
$user4 = new User('sato', 'male');

$users = array($user1, $user2, $user3, $user4);

$review1 = new Review($juice->getName(), $user1->getId(), '果肉たっぷりのオレンジジュースです！');
$review2 = new Review($curry->getName(), $user1->getId(), '具がゴロゴロしていてとてもおいしいです');
$review3 = new Review($coffee->getName(), $user2->getId(), '香りがいいです');
$review4 = new Review($pasta->getName(), $user2->getId(), 'ソースが絶品です。また食べたい。');
$review5 = new Review($juice->getName(), $user3->getId(), '普通のジュース');
$review6 = new Review($curry->getName(), $user3->getId(), '値段の割においしいカレーだと思いました');
$review7 = new Review($coffee->getName(), $user4->getId(), '苦味がちょうどよくて、おすすめです');
$review8 = new Review($pasta->getName(), $user4->getId(), '具材にこだわりを感じました。');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);




?>
