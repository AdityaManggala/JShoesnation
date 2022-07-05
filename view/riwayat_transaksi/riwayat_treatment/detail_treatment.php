<div id="detail_or_cs" class="main-content">
   <div class="container">
      <div class="baris">
         <div class="col mt-2">
            <div class="card-md">
               <div class="card-title card-flex">
                  <div class="card-col">
                     <h2>Detail Order</h2>
                  </div>

                  <div class="card-col txt-right">
                     <h3 class="no-order"><small>No Order : </small><?= $data['ID_ORDER'] ?></h3>
                  </div>
               </div>

               <div class="card-body">
                  <div class="jdl-or">
                     <h4>Customer</h4>
                  </div>
                  <table class="detail_customer">
                     <tr>
                        <th>Nama</th>
                        <td><?= $data['NAMA_CUST'] ?></td>
                     </tr>

                     <tr>
                        <th>Nomor Telepon</th>
                        <td><?= $data['NOMOR_CUST'] ?></td>
                     </tr>

                     <tr>
                        <th>Alamat</th>
                        <td><?= $data['ALAMAT_CUST'] ?></td>
                     </tr>

                     <tr>
                        <th>Order Masuk</th>
                        <td><?= $data['TGL_MASUK'] ?></td>
                     </tr>

                     <tr>
                        <th>Diambil Pada</th>
                        <td><?= $data['TGL_KELUAR'] ?></td>
                     </tr>

                     <tr>
                        <th>Durasi Kerja</th>
                        <td><?= $data['WAKTU_TREATMENT'] ?></td>
                     </tr>

                     <tr>
                        <th>Jenis Paket</th>
                        <td><?= $data['NAMA_TREATMENT'] ?></td>
                     </tr>

                     <tr>
                        <th>Deskripsi Barang</th>
                        <td><?= $data['DESKRIPSI'] ?></td>
                     </tr>

                     <tr>
                        <th>Status</th>
                        <?php if ($data['STATUS'] == 1) : ?>
                           <td><span class="success">sukses</span></td>
                        <?php else : ?>
                           <td><span class="danger">gagal</span></td>
                        <?php endif ?>
                     </tr>
                  </table>

                  <div class="mt-1"></div>

                  <div class="jdl-or">
                     <h4>Order</h4>
                  </div>

                  <table class="detail_order">
                     <tr>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Bayar</th>
                     </tr>

                     <tr>
                        <td><?= $data['JMLH_TREATMENT'] . " " ?></td>
                        <td><?= "Rp. " . $data['HRG_TREATMENT'] ?></td>
                        <td><?= "Rp. " . $data['TOTAL_HRG'] ?></td>
                     </tr>

                     <tr>
                        <th colspan="2" style="text-align: center;">Nominal Bayar</th>
                        <td><?= "Rp. " . $data['NOMINAL_BYR'] ?></td>
                     </tr>

                     <tr>
                        <th colspan="2" style="text-align: center;">Uang Kembali</th>
                        <td><?= "Rp. " . $data['KEMBALIAN'] ?></td>
                     </tr>
                  </table>

                  <div class="form-footer_detail">
                     <div class="buttons">
                        <a class="btn-sm bg-primary" href="index.php?page=cetak&aksi=cetak&id=<?= $data['ID_ORDER'] ?>">Cetak Invoice</a>
                        <a class="btn-sm bg-transparent" href="index.php?page=riwayat&aksi=riwayatTransaksi">Kembali</a>
                     </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>