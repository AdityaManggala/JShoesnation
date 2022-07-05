<div id="order_treat" class="main-content">
   <div class="container">
      <div class="baris">
         <div class="col mt-2">
            <div class="card">
               <div class="card-title card-flex">
                  <div class="card-col">
                     <h2>Treatment</h2>
                  </div>

                  <div class="card-col txt-right">
                     <a href="index.php?page=order&aksi=order" class="btn-xs bg-primary">Kembali</a>
                  </div>
               </div>

               <div class="card-body">
                  <form action="index.php?page=order&aksi=storePemesanan" method="post">
                     <input type="hidden" name="id_user" value="<?= $_SESSION['karyawan']['ID_USER'] ?>">
                     <div class="row-input">
                        <div class="col-form m-1">
                           <div class="form-grup">
                              <label for="nama">Nama Pelanggan</label>
                              <input type="text" name="nama_cus" placeholder="Nama lengkap" autocomplete="off" id="nama">
                           </div>

                           <div class="form-grup">
                              <label for="no-telp">Nomor Telepon</label>
                              <input type="text" name="no_telp" placeholder="Nomor Telepon" autocomplete="off" id="no-telp">
                           </div>

                           <div class="form-grup">
                              <label for="alamat">Alamat</label>
                              <textarea name="alamat" rows="4" id="alamat"></textarea>
                           </div>
                        </div>

                        <div class="col-form m-1">
                           <div class="form-grup">
                              <label for="pilih_treatment">Pilih Treatment</label>
                              <select name="jen_treatment" id="pilih_treatment">
                                 <option>-- Pilih Jenis Paket --</option>
                                 <?php foreach ($isi as $treat) : ?>
                                    <option value="<?= $treat['ID_TREATMENT'] ?>"><?= $treat['NAMA_TREATMENT'] ?></option>
                                 <?php endforeach ?>
                              </select>
                           </div>

                           <div class="form-grup">
                              <label for="kuantitas">Jumlah Order </label>
                              <input type="number" name="jmlh_treatment" placeholder="Jumlah Order" autocomplete="off" id="kuantitas">
                           </div>

                           <div class="form-grup">
                              <label for="deskripsi">Deskripsi Barang </label>
                              <input type="text" name="deskripsi" placeholder="deskripsi" autocomplete="off" id="deskripsi">
                           </div>

                           <div class="form-grup">
                              <label for="tgl_order_msk">Tanggal Order Masuk</label>
                              <input type="date" name="tgl_msk" autocomplete="off" id="tgl_order_msk">
                           </div>

                           <div class="form-grup">
                              <label for="tgl_order_klr">Tanggal Order Keluar</label>
                              <input type="date" name="tgl_kluar" autocomplete="off" id="tgl_order_klr">
                           </div>

                           <div class="form-footer">
                              <div class="buttons">
                                 <button type="submit" name="order_treat" class="btn-sm bg-primary">Pesan</button>
                                 <button type="reset" class="btn-sm bg-transparent">Batal</button>
                              </div>
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>