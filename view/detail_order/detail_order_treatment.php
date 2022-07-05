<?php if (isset($_POST['bayar_treat'])) : ?>
   <script>
      window.location = "index.php?page=bayar&aksi=bayar?or_number=<?= $no_treat ?>"
   </script>
<?php endif ?>

<div id="detail_or_treat" class="main-content">
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
                  <form action="index.php?page=bayar&aksi=bayar" method="post">
                     <input type="hidden" name="or_number" value="<?= $data['ID_ORDER'] ?>">
                     <div class="jdl-or">
                        <h4>Customer</h4>
                     </div>
                     <table class="detail_customer">
                        <tr>
                           <th>Nama</th>
                           <td><input type="text" name="nama_cus" disabled value="<?= $data['NAMA_CUST'] ?>"></td>
                        </tr>

                        <tr>
                           <th>Nomor Telepon</th>
                           <td><input type="text" name="no_telp" disabled value="<?= $data['NOMOR_CUST'] ?>"></td>
                        </tr>

                        <tr>
                           <th>Alamat</th>
                           <td>
                              <textarea name="alamat" disabled class="txt-area">
                                    <?= $data['ALAMAT_CUST'] ?>
                                 </textarea>
                           </td>
                        </tr>

                        <tr>
                           <th>Order Masuk</th>
                           <td><input type="text" name="tgl_msk" disabled value="<?= $data['TGL_MASUK'] ?>"></td>
                        </tr>

                        <tr>
                           <th>Diambil Pada</th>
                           <td><input type="text" name="tgl_kluar" disabled value="<?= $data['TGL_KELUAR'] ?>"></td>
                        </tr>

                        <tr>
                           <th>Durasi Kerja</th>
                           <td><input type="text" name="wkt_kerja" disabled value="<?= $data['WAKTU_TREATMENT'] ?>"></td>
                        </tr>

                        <tr>
                           <th>Jenis Treatment</th>
                           <td><input type="text" name="jen_treatment" disabled value="<?= $data['NAMA_TREATMENT'] ?>"></td>
                        </tr>

                        <tr>
                           <th>Deskripsi Barang</th>
                           <td><input type="text" name="deskripsi" disabled value="<?= $data['DESKRIPSI'] ?>"></td>
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
                           <td><input type="text" name="jmlh_treatment" disabled value="<?= $data['JMLH_TREATMENT'] ?>"></td>
                           <td><input type="text" name="hrg_treatment" disabled value="<?= 'Rp. ' . $data['HRG_TREATMENT'] ?>"></td>
                           <td><input type="text" name="total" disabled value="<?= 'Rp. ' . $data['TOTAL_HRG'] ?>"></td>
                        </tr>
                     </table>

                     <div class="form-footer_detail">
                        <div class="buttons">
                           <button type="submit" name="bayar_treat" class="btn-sm bg-primary">Bayar Sekarang</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</body>

</html>