<?php
    include "connect.php";
	//include ('connection/connect_to_oracle.php');
    $query = "insert into produk values(DEFAULT, 'admin', '$_POST[nama_produk]', '$_POST[deskripsi_produk]',   $_POST[harga_produk])";
	//echo $query;
	//if($conn->exec($query))
    //mysqli_query($query);
	if(mysql_query($query))
    {
		header("Location:view_product.php?status=sukses");	
	}
	else
	{
		header("Location:view_product.php?status=gagal");
	}
?>