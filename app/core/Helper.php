<?php

function linkTo($link): String {
    return BASEURL . 'index.php?page=' . $link;
}

function linkWithId($link, $id): String {
    return linkTo($link) . '&id=' . $id;
}

function actionTo($page, $action): String {
    return linkTo($page) . '&action=' . $action;
}

function actionWithId($page, $action, $id): String {
    return actionTo($page, $action) . '&id=' . $id;
}

function activePage(array $pages): String {
    $current = $_GET['page'] ?: 'home';
    return in_array($current, $pages) ? 'active' : '';
}

function headTo($link) {
    header("Location: " . linkTo($link));
}

function headWithId($link, $id) {
    header("Location: " . linkWithId($link, $id));
}

function loadView($view) {
    include_once $view ? "app/pages/{$view}" : "app/pages/error404.php";
}

function darkMode($button = false): String
{
    return DARKMODE ? 'dark' : ( $button ? 'primary' : 'light');
}

function singleWord($word): bool
{
    return !preg_match('/^[a-z]+_[a-z]+$/i', $word);
}

function currentUrl(): String {
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    

    return $url; 
}

function selected($item, $compare)
{
    return $item == $compare ? 'selected' : '';
}

function setFlash($message) {
    $_SESSION['flash'] = $message;
}

function hasFlash() {
    return isset($_SESSION['flash']);
}

function getFlash() {
    $message = $_SESSION['flash'];
    unset($_SESSION['flash']);
    return $message;
}

function setOld($message) {
    $_SESSION['old'] = $message;
}

function hasOld() {
    return isset($_SESSION['old']);
}

function getOld($input = null) {
    if (hasOld()) {
        if ($input) {
            $message = $_SESSION['old'][$input];
        } else {
            $message = $_SESSION['old'];
        }
        return $message;
    } else {
        return 0;
    }
}

function removeOld()
{
    unset($_SESSION['old']);
}
