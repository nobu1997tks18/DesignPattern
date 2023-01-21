<?php

namespace IteratorAndComposite;

use IteratorAndComposite\Client\Waiter;
use IteratorAndComposite\Menu\Menu;
use IteratorAndComposite\Menu\MenuItem;

include 'include.php';

$pancake_manu = new Menu('パンケーキハウスメニュー','朝食');
$pancake_manu->add(new MenuItem('パンケーキ','定番のパンケーキです。',1000));
$pancake_manu->add(new MenuItem('ランチパンケーキセット','ドリンクつきのお得なセットです。',1200));
$pancake_manu->add(new MenuItem('フルーツパンケーキ','日替わりの果物をふんだんに使ったパンケーキです。',1500));
$pancake_manu->add(new MenuItem('コーヒー','甘いパンケーキのお供に',1000));
$pancake_manu->add(new MenuItem('紅茶','ダージリンティーです。',1000));

$diner_manu = new Menu('食堂メニュー','昼食');
$diner_manu->add(new MenuItem('BLT','定番のベーコンレタスサンドです。',1000));
$diner_manu->add(new MenuItem('チーズバーガー','3種のチーズを利用してます。',1500));
$diner_manu->add(new MenuItem('本日のケーキ','日替わりのケーキを。', 700));
$diner_manu->add(new MenuItem('コーヒー','デザートのお供に',1000));

$cafe_manu = new Menu('カフェメニュー','夕食');
$cafe_manu->add(new MenuItem('エスプレッソ','濃いめのコーヒーがお好みの方向け。',700));
$cafe_manu->add(new MenuItem('フラペチーノ','コーヒーフラペチーノ',800));

$dessert_manu = new Menu('デザートメニュー','デザート');
$dessert_manu->add(new MenuItem('チーズケーキ','3種のチーズを使ったケーキです。',700));
$dessert_manu->add(new MenuItem('ショートケーキ','いちごの乗ったショートケーキです。',500));

$all_menu = new Menu('全てのメニュー', '統合メニュー');

$all_menu->add($pancake_manu);
$all_menu->add($diner_manu);
$all_menu->add($cafe_manu);
$all_menu->add($dessert_manu);

$waiter = new Waiter($all_menu);
$waiter->printMenu();




