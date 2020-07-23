<?php

/**
 * @return mixed
 * That Method Return Type Of Current User
 */
function TypeCurrentUser()
{
    return auth()->user()->type;
}

function GetNameAdmin()
{
    return auth()->user()->name;
}

/**
 * @return bool
 *That Method Check If The Current User Is Admin Or Not
 */

function IsAdmin()
{
    if(TypeCurrentUser() === 'admin'){
        return true;
    }else{
        return false;
    }
}

