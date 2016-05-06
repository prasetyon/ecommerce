<?php
    include "connect.php";
	//include ('connection/connect_to_oracle.php');
 
     $query = "update PRODUK set nama_produk='$_POST[nama_produk]',
                             deskripsi_produk='$_POST[deskripsi_produk]',
                             harga_produk=$_POST[harga_produk]
          where id_produk=$_POST[id_produk]";
	//echo $query;
	//if($conn->exec($query))
    //mysqli_query($query);
 
	if(mysql_query($query))
    {
		header("Location:edit_product.php?status=OK");	
	}
	else
	{
        echo $_POST[nama_produk];
        echo $_POST[deskripsi_produk];
        echo $_POST[harga_produk];
		//header("Location:edit_product.php?status=FAIL");
	}
?>