<?php
require_once('menu.php');
require_once('data.php');

$menuName = $_GET['name'];

$menu = Menu::findByName($menus,$menuName);

$menuReviews = $menu->getReviews($reviews);
?>

<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title>Cafemenu</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper container">
    <img src="<?php echo $menu->getImage() ?>" class="show-item-image">
    <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>

    <?php if ($menu instanceof Drink): ?>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
    <?php else: ?>
        <p class="menu-item-spices">辛さ：<?php echo $menu->getSpiciness() ?></p>
    <?php endif ?>
    <p class="price">￥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>

    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <h4>レビュー一覧</h4>
        </div>
        <?php foreach ($menuReviews as $menuReview): ?>
        <?php $user = $review->getUser($users) ?>
          <div class="review-item-list">
          <div class="review-user">
          <p><?php echo $user->getName() ?></p>
          </div>
          <p class="review-text"><?php echo $menuReview->getBody() ?></p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <a href="index.php">←　メニュー一覧へ</a>
  </div>
</body>
</html>
