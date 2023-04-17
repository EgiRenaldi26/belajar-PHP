<?php 

//switch

$level = "";

switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari Javascript";
        break;
    case 4:
        echo "Pelajari PHP";
        break;
    default:
        echo "Kamu bukan programmer!";
}

//kita bermain pada variable level , jika variable tidak memiliki nilai atau 0 maka output yang keluar adalah "kamu bukan programer"
?>