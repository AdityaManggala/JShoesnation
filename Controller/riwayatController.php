<?php
class riwayatController
{
    private $model;
    public function __construct()
    {
        $this->model = new OrderModel();
    }

    public function cetak()
    {
        $id = $_GET['id'];
        $data = $this->model->getdata($id);
        extract($data);
        require_once("view/riwayat_transaksi/riwayat_treatment/cetak_info.php");
    }

    public function detailTreatment()
    {
        $get_id = $_GET['id'];
        $data = $this->model->getdata($get_id);
        extract($data);
        require_once("view/riwayat_transaksi/riwayat_treatment/detail_treatment.php");
    }

    public function riwayatIsi()
    {
        $queryTreat = $this->model->riwayatTransaksi();
        extract($queryTreat);
        require_once("view/riwayat_transaksi/riwayat_treatment/riwayat_treatmentisi.php");
    }

    public function riwayatTrans()
    {
        $id = $_GET['id'];
        $riwayat_treat = $this->model->riwayatTransaksi($id);
        extract($riwayat_treat);
        require_once("view/riwayat_transaksi/riwayat.php");
    }
}
