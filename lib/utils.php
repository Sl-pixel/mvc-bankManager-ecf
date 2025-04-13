<?php
function isAdmin() 
{
    if (!isset($_SESSION['connected'])) {
    return false;
    } 
    return true;
}

