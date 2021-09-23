
  <div class="container">
 <!-- Outer Row -->
 <div class="row justify-content-center">
 <div class="col-lg-7">
 <div class="card o-hidden border-0 shadow-lg my-5">
 <div class="card-body p-0">
 <!-- Nested Row within Card Body -->
 <div class="row">
 <div class="col-lg">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb4">Hasil Data Toko Sepatu</h1>
 </div>
   <div class="mb-3">
     <label>Nama</label>
     <input class="form-control" value="<?= $nama; ?>" disabled>
   </div>

   <div class="mb-3">
     <label>Nomor Handphone</label>
     <input class="form-control" value="<?= $nohp; ?>" disabled>
   </div>

 <div class="mb-3">
        <label>Merk Sepatu</label>
        <input class="form-control" value="<?= $merk; ?>" disabled>

    </div>
    <div class="mb-3">
           <label>Ukuran Sepatu</label>
           <input class="form-control" value="<?= $size; ?>" disabled>

       </div>
       <div class="mb-3">
              <label>Harga Sepatu</label>
              <input class="form-control" value="<?= $harga; ?>" disabled>

          </div>
        <a href="<?= base_url('Sepatu');?>" type="submit" class="btn btn-primary btn-user btn-block">Kembali
        </a>
       <hr>
       <div class="container my-auto">
           <div class="copyright text-center my-auto">
              <!--- <span>Copyright &copy; Your Website 2020</span> !-->
                Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://facebook.com/adie.gan" target="_blank"> Adi Darmawan.</a>

           </div>
       </div>
      </div>

     </div>
    </div>
   </div>
 </div>
 </div>
 </div>
</div>
