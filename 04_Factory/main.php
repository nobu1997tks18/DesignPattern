<?php
namespace Factory;

use Factory\FactoryMethod\Creators\NewyorkPizzaStore;

include 'include.php';

$newyork_store = new NewyorkPizzaStore();
$newyork_store->order('tomato');
$newyork_store->order('cheese');
