<?php
require_once ('./Database.php');
require_once ('./User.php');
require_once ('./InterfaceDAO.php');

class UserDAO extends Database implements InterfaceDAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = "SELECT * FROM user;";  

        $users = $this->query($query);

        return $users;
    }
    public function add()
    {

    }

    public function get()
    {

    }

    public function update()
    {
        
    }

    public function delete()
    {

    }
}
