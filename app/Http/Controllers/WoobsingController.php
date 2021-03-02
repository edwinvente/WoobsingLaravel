<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WoobsingController extends Controller
{
    public function usersRols(){
        $sql = "SELECT * FROM users u 
        INNER JOIN user_roles ur ON u.id = ur.user_id
        WHERE ur.rol_id IN ('1', '2')";
    }

    public function permissionRoleOne(){
        $sql = "SELECT p.permit FROM user_permissions up 
        INNER JOIN permissions p on up.permission_id = p.id
        WHERE up.rol_id = 1";
    }
    
    public function userRolePermissionTwo(){
        $sql = "SELECT u.name, u.email, r.name FROM users u 
        INNER JOIN user_roles ur on u.id = ur.user_id
        INNER JOIN roles r ON ur.rol_id = r.id";
    }

    public function TwoPoint(){
        /* No he montado ninguno de estos servicios en la nube, he trabajado de manera simple con docker y linux para hacer pull en servidores conectados a mi cuenta de git... */
    }
    
    public function threePoint(){
        /* la respuesta corercta es: ll */
    }
    
    public function fourPoint(){
        /* 
            dentro del array de usuarios, el segundo array al finalizar falata una coma.
        */
    }


}
