<div class="card">
   <div class="card-title card-flex">
      <div class="card-col">
         <h2>Daftar Transaksi - Treatment</h2>
      </div>
   </div>

   <div class="card-body">
      <div class="tabel-kontainer">
         <table class="tabel-transaksi">
            <thead>
               <tr>
                  <th class="sticky">No</th>
                  <th class="sticky">tgl</th>
                  <th class="sticky">No. Order</th>
                  <th class="sticky">Nama</th>
                  <th class="sticky">Jenis Treatment</th>
                  <th class="sticky">Total</th>
                  <th class="sticky">Uang Bayar</th>
                  <th class="sticky">Kembalian</th>
                  <th class="sticky" style="text-align: center;">Aksi</th>
               </tr>
            </thead>

            <tbody>
               <?php if (!empty($queryTreat)) : ?>
                  <?php $i = 1;
                  foreach ($queryTreat as $data) : ?>
                     <tr>
                        <td><?= $i ?></td>
                        <td><?= $data['TGL_KELUAR'] ?></td>
                        <td><?= $data['ID_ORDER'] ?></td>
                        <td style="max-width: 150px; overflow:hidden;"><?= $data['NAMA_CUST'] ?></td>
                        <td><?= $data['NAMA_TREATMENT'] ?></td>
                        <td><?= "Rp. " . $data['TOTAL_HRG'] ?></td>
                        <td><?= "Rp. " . $data['NOMINAL_BYR'] ?></td>
                        <td><?= "Rp. " . $data['KEMBALIAN'] ?></td>
                        <td align="center">
                           <a href="index.php?page=riwayat&aksi=detailTreatment&id=<?= $data['ID_ORDER'] ?>" class="btn btn-edit">Detail</a><br />
                           <a href="index.php?page=cetak&aksi=cetak&id=<?= $data['ID_ORDER'] ?>" class="btn btn-hapus">Cetak Bukti</a>
                        </td>
                     </tr>
                     <?php $i++ ?>
                  <?php endforeach ?>

               <?php else : ?>
                  <tr>
                     <td colspan="10" class="txt-center">Data tidak tersedia</td>
                  </tr>
               <?php endif ?>
            </tbody>
         </table>
      </div>
   </div>
</div>