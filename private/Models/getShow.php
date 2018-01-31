<?php

include "getAdd.php";
function getAllShows() {
    $shows_json = getDataFromFile('../private/files/shows_lst.txt');
    $shows_json .= ']';
    $shows = json_decode($shows_json, true);
    return $shows;
}
function getShowById($show_id) {
    $shows = getAllShows();
    foreach ($shows as $show) {
        if ($show['id'] == $show_id) {
            return $show;
        }
    }
    return false;
}