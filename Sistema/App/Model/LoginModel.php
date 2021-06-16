<?php

namespace App\Model;

use Library\Core\Model;
use App\DAO\LoginDAO;

final class LoginModel extends Model
{

    /**
     * 
     */
    public function __construct()
    {
        $this->dao = new LoginDAO();
    }

}