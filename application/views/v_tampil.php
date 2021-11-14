<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>TES IT - EDULAB</h1></center>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>USER ID</th>
			<th>CABANG BELAJAR</th>
			<th>TOTAL BIAYA</th>
			<th>POTONGAN</th>
            <th>DP</th>
            <th>ANGSURAN 1</th>
            <th>ANGSURAN 2</th>
            <th>PRICE</th>
            <th>ARP</th>
            <th>ARO</th>
            <th>STATUS</th>
            <th>PERSENTASE BAYAR</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->user_id ?></td>
			<td><?php echo $u->cabang_belajar ?></td>
			<td><?php echo $u->total_biaya ?></td>
            <td><?php echo $u->potongan ?></td>
            <td><?php echo $u->dp ?></td>
            <td><?php echo $u->angsuran1 ?></td>
            <td><?php echo $u->angsuran2 ?></td>
            <td><?php $price = $u->total_biaya - $u->potongan?>
                <?php echo $price ?></td>
            <td><?php $arp = $u->angsuran1 + $u->angsuran2?>
                <?php echo $arp ?></td>
            <td><?php $aro = $price - $arp?>
                <?php echo $aro ?></td>
            <td><?php $status = $price - $arp?>
                <?php if ($status==0) {echo "SUDAH LUNAS";}
                else {echo"BELUM LUNAS";} ?></td>
            <td><?php $persen = ($arp/$price)*100; ?>
            <?php echo round($persen)."%" ?></td>
			<!-- <td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td> -->
		</tr>
		<?php } ?>
	</table>

    <center><h1>STATISTIK - EDULAB</h1></center>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			
			<th>CABANG BELAJAR</th>
			<th>JUMLAH USER</th>
			<th>SUDAH LUNAS</th>
			<th>BELUM LUNAS</th>
            <th>TOTAL BIAYA</th>
            <th>SUDAH BAYAR</th>
            <th>BELUM DIBAYAR</th>
            <th>JUMLAH ANGGOTA BAYAR > 50%</th>
            <th>JUMLAH ANGGOTA BAYAR < 50%</th>
		</tr>
		
		<tr>
			
			<td>A</td>
			<td> <?php echo $jumlah_user->jumlah_user ?></td>
            <td> <?php echo $sudah_lunas->sudah_lunas ?></td>
            <td> <?php echo $belum_lunas->belum_lunas ?></td>
            <td> <?php echo $total->total ?></td>
            <td> <?php echo $sudah_bayar->sudah_bayar ?></td>
            <td> <?php echo $belum_bayar->belum_bayar ?></td>
            <td> <?php echo $sudah_bayar50->sudah_bayar50 ?></td>
            <td> <?php echo $belum_bayar50->belum_bayar50 ?></td>

		</tr>
        <tr>
			
			<td>B</td>
			<td> <?php echo $jumlah_user2->jumlah_user2 ?></td>
            <td> <?php echo $sudah_lunas2->sudah_lunas2 ?></td>
            <td> <?php echo $belum_lunas2->belum_lunas2 ?></td>
            <td> <?php echo $total2->total2 ?></td>
            <td> <?php echo $sudah_bayar2->sudah_bayar2 ?></td>
            <td> <?php echo $belum_bayar2->belum_bayar2 ?></td>
            <td> <?php echo $sudah_bayar502->sudah_bayar502 ?></td>
            <td> <?php echo $belum_bayar502->belum_bayar502 ?></td>

		</tr>
        <tr>
			
			<td>C</td>
			<td> <?php echo $jumlah_user3->jumlah_user3 ?></td>
            <td> <?php echo $sudah_lunas3->sudah_lunas3 ?></td>
            <td> <?php echo $belum_lunas3->belum_lunas3 ?></td>
            <td> <?php echo $total3->total3 ?></td>
            <td> <?php echo $sudah_bayar3->sudah_bayar3 ?></td>
            <td> <?php echo $belum_bayar3->belum_bayar3 ?></td>
            <td> <?php echo $sudah_bayar503->sudah_bayar503 ?></td>
            <td> <?php echo $belum_bayar503->belum_bayar503 ?></td>

		</tr>

        <tr>
			
			<td>D</td>
			<td> <?php echo $jumlah_user4->jumlah_user4 ?></td>
            <td> <?php echo $sudah_lunas4->sudah_lunas4 ?></td>
            <td> <?php echo $belum_lunas4->belum_lunas4 ?></td>
            <td> <?php echo $total4->total4 ?></td>
            <td> <?php echo $sudah_bayar4->sudah_bayar4 ?></td>
            <td> <?php echo $belum_bayar4->belum_bayar4 ?></td>
            <td> <?php echo $sudah_bayar504->sudah_bayar504 ?></td>
            <td> <?php echo $belum_bayar504->belum_bayar504 ?></td>

		</tr>

	</table>
   

   

    <form method="post" action="http://localhost/Tes-edulab/index.php/export">

<input type="submit" name="export" class="btn btn-success" value="Export" />

</form>
</body>
</html>