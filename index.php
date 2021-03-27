<?php

require_once ('./UserDAO.php');

$user_dao = new UserDAO();

$users = $user_dao->getAll();

for ($i=0; $i < count($users); $i++) { 
            
    $user = new User();
    
    $user->setName($users[$i]->name);    
    
    $user->setEmail($users[$i]->email);    
    
    $users[$i] = $user;
}

foreach ($users as $key => $user) {
    $user->sendNotification("message test");
}