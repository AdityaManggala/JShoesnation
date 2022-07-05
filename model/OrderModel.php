<?php
class orderModel
{

	function jmlOrder()
	{
		$jumlah_order = "SELECT COUNT(transaksi.id_order) as jumlah FROM transaksi";
		$query = koneksi()->query($jumlah_order);
		$hasil = $query->fetch_assoc();
		return $hasil;
	}

	function get()
	{
		$data_treat = "SELECT transaksi.ID_ORDER,
		transaksi.TGL_MASUK,
		transaksi.NAMA_CUST,
		treatment.NAMA_TREATMENT,
		transaksi.JMLH_TREATMENT FROM TRANSAKSI
		JOIN treatment ON transaksi.ID_TREATMENT = treatment.ID_TREATMENT
		WHERE status =0";
		$query = koneksi()->query($data_treat);
		$hasil = [];
		while ($data = $query->fetch_assoc()) {
			$hasil[] = $data;
		}
		return $hasil;
	}
	function orderTreatment(
		$orderNum_treat,
		$id_user,
		$nama_cus,
		$no_telp,
		$alamat,
		$jen_treatment,
		$jmlh_treatment,
		$biaya_treat,
		$tgl_msk,
		$tgl_kluar,
		$totBayar_treatment,
		$desc,
	) {
		$query_treatment = "INSERT INTO transaksi(id_order,id_user,nama_cust,nomor_cust,alamat_cust,id_treatment,jmlh_treatment,hrg_treatment,tgl_masuk,tgl_keluar,total_hrg,deskripsi,status) 
	VALUES ( '$orderNum_treat',$id_user,'$nama_cus','$no_telp','$alamat','$jen_treatment',$jmlh_treatment,$biaya_treat,'$tgl_msk','$tgl_kluar',$totBayar_treatment,'$desc',0 );";
		return $query = koneksi()->query($query_treatment);
	}

	function getdata($no_treat)
	{
		$data = "SELECT transaksi.ID_ORDER,
		transaksi.NAMA_CUST,
		transaksi.ALAMAT_CUST,
		transaksi.NOMOR_CUST,
		transaksi.TGL_MASUK,
		transaksi.TGL_KELUAR,
		transaksi.TOTAL_HRG,
		transaksi.HRG_TREATMENT,
		transaksi.JMLH_TREATMENT,
		treatment.WAKTU_TREATMENT,
		treatment.NAMA_TREATMENT,
		transaksi.DESKRIPSI,
		transaksi.NOMINAL_BYR,
		transaksi.KEMBALIAN,
		transaksi.STATUS
		FROM transaksi 
		JOIN treatment ON transaksi.ID_TREATMENT = treatment.ID_TREATMENT
		WHERE id_order = '$no_treat'";
		$query = koneksi()->query($data);
		return $query->fetch_assoc();
	}

	// Batal/Hapus Daftar Orderan Treatment
	function deleteOrder($or_numb)
	{
		$deleteOrder = "DELETE FROM transaksi WHERE id_order='$or_numb'";
		$query = koneksi()->query($deleteOrder);
		return $query;
	}

	function formatDate($tgl)
	{
		$tgl = explode('-', $tgl);

		if ($tgl[1] == '01') {
			$tgl[1] = "Januari";
		} else if ($tgl[1] == '02') {
			$tgl[1] = "Februari";
		} else if ($tgl[1] == '03') {
			$tgl[1] = "Maret";
		} else if ($tgl[1] == '04') {
			$tgl[1] = "April";
		} else if ($tgl[1] == '05') {
			$tgl[1] = "Mei";
		} else if ($tgl[1] == '06') {
			$tgl[1] = "Juni";
		} else if ($tgl[1] == '07') {
			$tgl[1] = "Juli";
		} else if ($tgl[1] == '08') {
			$tgl[1] = "Agustus";
		} else if ($tgl[1] == '09') {
			$tgl[1] = "September";
		} else if ($tgl[1] == '10') {
			$tgl[1] = "Oktober";
		} else if ($tgl[1] == '11') {
			$tgl[1] = "November";
		} else if ($tgl[1] == '12') {
			$tgl[1] = "Desember";
		}

		$tgl = $tgl[2] . ' ' . $tgl[1] . ' ' . $tgl[0];
		return $tgl;
	}

	function transaksi_treatment($or_number, $total, $nominal_bayar)
	{

		if ($nominal_bayar < $total) {
			return false;
		}

		// Menghitung kembalian
		$kembalian = $nominal_bayar - $total;

		$bayar = "UPDATE transaksi SET
		NOMINAL_BYR= $nominal_bayar,KEMBALIAN=$kembalian,STATUS=1 WHERE id_order = '$or_number'";
		return koneksi()->query($bayar);
	}

	function riwayatTransaksi()
	{
		$sql = "SELECT 
		transaksi.TGL_KELUAR,
		transaksi.ID_ORDER,
		transaksi.NAMA_CUST,
		treatment.NAMA_TREATMENT,
		transaksi.TOTAL_HRG,
		transaksi.NOMINAL_BYR,
		transaksi.KEMBALIAN
		FROM transaksi 
		JOIN treatment ON transaksi.ID_TREATMENT = treatment.ID_TREATMENT
		WHERE STATUS=1";
		$hasil = [];
		$query = koneksi()->query($sql);
		while ($data = $query->fetch_assoc()) {
			$hasil[] = $data;
		}
		return $hasil;
	}
}
