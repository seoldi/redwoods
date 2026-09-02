<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// 전화번호
$wr_1 = "$hp[0]-$hp[1]-$hp[2]";

// 관심형태
$wr_4 = implode(',', $_POST['check']);

// 주소
$wr_5 = "$ex_zip|$ex_addr1|$ex_addr2|$ex_addr3|$ex_jibeon";
sql_query(" update $write_table set wr_5 = '$wr_5' where wr_id = '$wr_id' ");

?>