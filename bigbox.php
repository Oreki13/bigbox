<?php

function satu()
{
    $data = "harga cabe merah sekarang Rp. 75.000";
    // point a :
    $number_only = preg_replace('/[^0-9]/', '', $data);
    echo $number_only . "<br />";
    // point b :
    $format_number = str_replace(',', '.', number_format($number_only));
    echo $format_number . "<br />";
}

// satu();

function dua()
{
    $data = "No telp 02123456 an Bambang Pamungkas RpTag:749570 RpAdm:2500 TotalBayar Rp 750.250 segera dibayar ya !!";
    $label_var = array('NoTelp', 'RpTag', 'RpAdm', 'TotalBayar');
    $filter_string = preg_replace('/[^.0-9]/', ' ', $data);
    $array_string = explode(' ', $filter_string);


    $get_number = array();
    for ($i = 0; $i < count($array_string); $i++) {

        if (strlen($array_string[$i]) !== 0) {
            array_push($get_number, $array_string[$i]);
        }
    }

    for ($k = 0; $k < count($get_number); $k++) {
        echo $label_var[$k] . " " . $get_number[$k] . '<br/>';
    }
}
function tiga()
{
    $now = strtotime('2014-07-12 13:32:45'); // or your date as well
    $your_date = strtotime('2014-05-20 04:21:03');
    $datediff = $now - $your_date;

    $tmp = $datediff % 86400;
    // echo round($tmp) . "Hari";

    // echo round($tmp / 3600) . "Jam";
    // echo round($tmp / 60) . "Menit";
    // echo round($tmp / 3600) . "Detik";

    // var_dump($tmp / 86400);

    $ddss =  $datediff          % 86400;
    $dd   = ($datediff - $ddss) / 86400;
    $hhss =  $ddss          %  3600;
    $hh   = ($ddss - $hhss) /  3600;
    $mmss =  $hhss          %    60;
    $mm   = ($hhss - $mmss) /    60;
    $ss   =  $mmss          %    60;

    echo $dd . "hari",  $hh . 'jam', $mm . 'menit', $ss . 'detik' . '<br/>';
}
function empat()
{
    $teks = 'saya ingin     makan      sate';
    echo trim($teks) . '<br/>';
}

function lima($key)
{
    $total = 0;
    for ($i = 0; $i < 100; $i++) {
        $tmp = strval($i);
        for ($j = 0; $j < strlen($tmp); $j++) {
            if ($tmp[$j] == strval($key)) {
                $total++;
            }
        }
    }
    echo $total . '<br/>';
}


satu();
dua();
tiga();
empat();

lima(7);
