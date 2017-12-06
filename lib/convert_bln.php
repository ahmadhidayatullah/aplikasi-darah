<?php
function convert_bln($bln){
    $bln_echo = null;
    if ($bln == "01"){
        $bln_echo = "Januari";
    }elseif ($bln == "02"){
        $bln_echo = "Februari";
    }elseif ($bln == "03"){
        $bln_echo ="Maret";
    }elseif ($bln == "04"){
        $bln_echo ="April";
    }elseif ($bln == "05"){
        $bln_echo ="Mei";
    }elseif ($bln == "06"){
        $bln_echo ="Juni";
    }elseif ($bln == "07"){
        $bln_echo ="Juli";
    }elseif ($bln == "08"){
        $bln_echo ="Agustus";
    }elseif ($bln == "09"){
        $bln_echo ="September";
    }elseif ($bln == "10"){
        $bln_echo ="Oktober";
    }elseif ($bln == "11"){
        $bln_echo ="November";
    }elseif ($bln == "12"){
        $bln_echo ="Desember";
    }

    return $bln_echo;

}