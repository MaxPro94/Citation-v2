<?php

function in_fav($id_citation, $favoris)
{
    foreach ($favoris as $fav) {
        if ($fav['id_citation'] === $id_citation) {
            return true;
        }
    }
    return false;
}
