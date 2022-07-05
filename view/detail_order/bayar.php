<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bayar Order <?= $data['or_number'] ?></title>
   <link rel="stylesheet" href="_assets/css/payments.css">
   <link rel="shortcut icon" href="_assets/img/logo/favicon.svg" type="image/x-icon">
</head>

<body>

   <div class="card-payment">
      <div class="icon-header">
         <img src="_assets/img/payment.svg" alt="Icon Payment" width="178">
      </div>

      <div class="txt">
         <h3>#no_order: <?= $data['ID_ORDER'] ?></h3>
         <p>Masukkan nominal untuk melakukan transaksi</p>
      </div>
      <form action="index.php?page=order&aksi=prosesBayar" method="post">
         <input type="hidden" name="or_number" value="<?= $data['ID_ORDER'] ?>">
         <input type="hidden" name="total" value="<?= $data['TOTAL_HRG'] ?>">
         <input type="text" name="nominal" required autofocus autocomplete="off" placeholder="<?= $data['TOTAL_HRG'] ?>">
         <button type="submit" name="bayar">Bayar</button>
      </form>
   </div>
</body>

</html>