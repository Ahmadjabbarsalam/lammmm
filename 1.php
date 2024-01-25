<?php

function PesertaDidik($noAbsen, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7){
    for($noAbsen; $noAbsen <= $kondisiTerminasi; $noAbsen++){
        if($noAbsen == $kt1 || $noAbsen == $kt2 || $noAbsen == $kt6){
            echo "peserta didik no $noAbsen tidak hadir <br/>";
        } else if($noAbsen == $kt3 || $noAbsen == $kt4){
            echo "peserta didik no $noAbsen terlambat <br/>";
        } else if($noAbsen == $kt5 || $noAbsen == $kt7 ){ 
            echo "peserta didik no $noAbsen sakit <br/>";
        } else {
            echo "peserta didik no $noAbsen hadir <br/> ";
        }
    }
}
echo PesertaDidik(1, 15, 2, 3, 6, 8, 9, 10,13);

?>