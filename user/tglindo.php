<?php
function tgl($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
 
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;        
    return($result);
}

function bulan($month) {
$array_bulan=array("01"=>"Januari",
"02"=>"Feb",
"03"=>"Mar",
"04"=>"April",
"05"=>"Mei",
"06"=>"Juni",
"07"=>"Juli",
"08"=>"Agustus",
"09"=>"September",
"10"=>"Oktober",
"11"=>"Nopember",
"12"=>"Desember");
$bln_temp=explode("-",$month);
$bln=$bln_temp[1];
$thn=$bln_temp[0];
$nama_bulan=$array_bulan[$bln];
return $nama_bulan." ".$thn;
}
?>