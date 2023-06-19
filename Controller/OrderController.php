<?php
class orderController
{
    private $model;
    private $treatment;
    public function __construct()
    {
        $this->model = new OrderModel();
        $this->treatment = new treatmentModel();
    }

    public function prosesBayar()
    {
        $nomor_order = $_POST['or_number'];
        $nominal = $_POST['nominal'];
        $total = $_POST['total'];
        $this->model->transaksi_treatment($nomor_order, $total, $nominal);
        $query_treat = $this->model->riwayatTransaksi();
        extract($query_treat);
        header("location: index.php?page=riwayat&aksi=riwayatIsiTransaksi");
    }

    public function bayar()
    {
        $nomor_order = $_POST['or_number'];
        $data = $this->model->getdata($nomor_order);
        extract($data);
        require_once("view/detail_order/bayar.php");
    }

    public function detailOrder()
    {
        $no_treat = $_GET['id'];
        $data = $this->model->getdata($no_treat);
        extract($data);
        require_once("view/detail_order/detail_order_treatment.php");
    }

    public function index()
    {
        $daftarorder = $this->model->get();
        extract($daftarorder);
        require_once("view/daftar_order/daftarorder.php");
    }

    public function storePemesanan()
    {
        $id_user = $_POST['id_user'];
        $nama_cus = $_POST['nama_cus'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $jen_treatment = $_POST['jen_treatment'];
        $jmlh_treatment = $_POST['jmlh_treatment'];
        $tgl_msk = $_POST['tgl_msk'];
        $tgl_kluar = $_POST['tgl_kluar'];
        $desc = $_POST['deskripsi'];
        $data = $this->treatment->getDataTreatment($jen_treatment);
        if (!empty($data)) {
            $biaya_treat = $data['BIAYA_TREATMENT'];
            $totBayar_treatment = $data['BIAYA_TREATMENT'] * $jmlh_treatment;
            // Generate Nomor Order
            $noTreat = uniqid();
            $limitNo_treat = substr($noTreat, 0, 7);
            $orderNum_treat = 'treatment-' . strtoupper($limitNo_treat);
            $this->model->orderTreatment(
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
                $desc
            );
            header("location: index.php?page=home&aksi=view");
        }
        header("location: index.php?page=home&aksi=view");
    }


    public function Ordertreatment()
    {
        $isi = $this->treatment->getAllTreatment();
        extract($isi);
        require_once("view/order/order_treat.php");
    }

    public function deleteorder()
    {
        $nomor_order = $_GET['id'];
        $this->model->deleteOrder($nomor_order);
        header("location: index.php?page=karyawan&aksi=view");
    }
    public function Order()
    {
        require_once("View/order/order.php");
    }
}
