<?php

require_once 'bootstrap.php';

use Models\User;



$users = User::pluck('name');

print_r($users);
