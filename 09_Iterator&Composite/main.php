<?php

namespace IteratorAndComposite;

use IteratorAndComposite\Iterator\Client\Waiter;
use IteratorAndComposite\Iterator\Menu\DinerMenu;
use IteratorAndComposite\Iterator\Menu\MenuList;
use IteratorAndComposite\Iterator\Menu\PancakeHouseMenu;

include 'include.php';

$menu_list = new MenuList();
$menu_list->addMenu(new DinerMenu());
$menu_list->addMenu(new PancakeHouseMenu());

$waiter = new Waiter($menu_list);
$waiter->printMenu();




