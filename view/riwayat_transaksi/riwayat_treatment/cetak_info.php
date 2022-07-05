<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Invoice <?= $data['ID_ORDER']; ?></title>
   <link rel="shortcut icon" href="_assets/img/logo/favicon.svg" type="image/x-icon">
   <link rel="stylesheet" href="_assets/css/invoice.css">
</head>

<body>
   <div class="invoice">
      <div class="invoice-content">
         <div class="invoice-header">
            <div class="logo">
               <img src="_assets/img/logo/logonama4.png" width="145" alt="Logo shoes treatment">
            </div>
            <div class="invoice-no_order">
               <span>Invoice number : <?= $data['ID_ORDER'] ?></span>
            </div>
         </div>

         <h4 style="text-align: center; color:#4d4d4d;">Bukti Transaksi</h4>

         <div class="invoice-body">
            <table class="table-invoice">
               <tr>
                  <th>Nama pelanggan</th>
                  <td><?= $data['NAMA_CUST'] ?></td>
               </tr>
               <tr>
                  <th>Nomor telepon</th>
                  <td><?= $data['NOMOR_CUST'] ?></td>
               </tr>
               <tr>
                  <th>Alamat</th>
                  <td><?= $data['ALAMAT_CUST'] ?></td>
               </tr>
            </table>

            <table class="table-invoice">
               <tr>
                  <th>Tanggal order</th>
                  <td><?= $data['TGL_MASUK'] ?></td>
               </tr>
               <tr>
                  <th>Diambil pada</th>
                  <td><?= $data['TGL_KELUAR'] ?></td>
               </tr>
            </table>

            <table class="byr">
               <tr>
                  <th class="heading">Jenis</th>
                  <th class="heading">Jumlah</th>
                  <th class="heading">Harga</th>
               </tr>
               <tr>
                  <td><?= $data['NAMA_TREATMENT'] ?></td>
                  <td><?= $data['JMLH_TREATMENT'] . " Pcs" ?></td>
                  <td><?= "Rp. " . $data['HRG_TREATMENT'] . " x " . $data['JMLH_TREATMENT'] ?></td>
               </tr>
               <tr>
                  <th colspan="2" class="ub">Total</th>
                  <td class="ub-col"><?= "Rp. " . $data['TOTAL_HRG'] ?></td>
               </tr>
               <tr>
                  <th colspan="2" class="ub">Nominal Bayar</th>
                  <td class="ub-col"><?= "Rp. " . $data['NOMINAL_BYR'] ?></td>
               </tr>
               <tr>
                  <th colspan="2" class="ub">Uang kembali</th>
                  <td class="ub-col"><?= "Rp. " . $data['KEMBALIAN'] ?></td>
               </tr>
               <tr>
                  <th>Deskripsi Barang</th>
                  <td><?= $data['DESKRIPSI'] ?></td>
               </tr>
            </table>

            <div class="invoice-footer">
               <h3 class="foot_logo"><span>Shoes</span> Treatment</h3>
               <p>Terima kasih telah menggunakan jasa kami.</p>
            </div>

         </div>
      </div>


      <a href="index.php?page=riwayat&aksi=riwayatTransaksi" class="btn-back">Kembali</a>
   </div>

   <div class="printbtn" id="btnPrint">
      <img src="_assets/img/printer.svg" width="48" alt="print icon">
      <span>Cetak Invoice</span>
   </div>

   <script>
      let print = document.getElementById('btnPrint');
      print.addEventListener('click', function() {
         return window.print();
      });
   </script>
</body>

</html>