<?php
    session_start();
    include "config/classDB.php";
    if(!empty($_SESSION['cart'])){
        //simpan  ke table tblorder
        $insertOrder = $dbo->insert("tblorder(idorder,idpelanggan,tglorder)","null,".$_SESSION['iduser'].",now()");
        $idorder = $dbo->lastInsert();
        if($insertOrder){
            //simpan ke tblorderdetail
            foreach($_SESSION['cart'] as $id=>$val){
                $menu = $dbo->select('tblmenu where idmenu='.$id);
                foreach($menu as $row){

                }
                $harga = $row['harga'];
                $insertDetail = $dbo->insert("tblorderdetail","null,'$idorder',$id,$val,$harga,''");
                unset ($_SESSION['cart'][$id]);
            }
        }
    }

?>
<script>
    location.href='index.php';
</script>    