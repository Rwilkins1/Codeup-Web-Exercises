<?php
require_once 'user.php';
require_once '../../user_table_login.php';
require_once '../../db_connect.php';

$user1 = User::find(8);
$user1->email = 'reagan.wilkins@gmail.com';
$user1->name = 'Reagan Wilkins';
$user1->phone = '(979)-224-0816';
$user1->address = '1009 Garraty Rd';
$user1->city = 'San Antonio';
$user1->state = 'Texas';
$user1->zip = '78209';
$user1->save();

$user2 = User::find(3);
// $user2->id = 3;
// $user2->email = "hello.kitty@gmail.com";
$user2->name = "Hello Kitty";
// $user2->phone = '123-4567';
$user2->save();

// print_r(User::all());
// User::delete(3);
// // var_dump($user1->id);

// print_r(User::find(3));
// print_r(User::all());
?>