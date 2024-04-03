<?php

session_start();

function sanitizeData($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $data;
}


function isLogIn()
{
    if (isset($_SESSION['role_id'])) {
        return true;
    } else {
        return false;
    }
}

function isAdmin()
{
    if (!isLogIn() && !$_SESSION['role_id'] == 1) {
        header('location:' . URLROOT . '/auth/login');
        exit();
    }
}


function formatDate($data)
{
    $date = new DateTime($data);
    $formatted = $date->format('F d, Y');
    return $formatted;
}


function pagination($totalpages)
{

    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $currentPage = max(1, min($_GET['page'], $totalpages));
    } else {
        $currentPage = 1;
    }
    return $currentPage;
}

function get_select($key, $value)
{

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST[$key]) && $_POST[$key] == $value) {
            return "selected";
        }
    }

    return "";
}
