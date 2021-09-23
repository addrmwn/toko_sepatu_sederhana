
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
 <h1 class="h4 text-gray-900 mb4">Form Input Data Toko Sepatu</h1>
 <br>
 </div>
 <form action="<?= base_url('Sepatu/hasil'); ?>" method="post" >
   <div class="mb-3">
     <label>Nama Anda</label>
     <input class="form-control" name="nama" id="nama" type="text" placeholder="Masukan Nama Anda">
   </div>

   <div class="mb-3">
     <label>Nomor Handphone</label>
     <input class="form-control" name="nohp" id="nohp" type="text" placeholder="Masukan Nomor Handphone Anda">
   </div>

 <div class="mb-3">
        <label>Merk Sepatu</label>
        <select class="form-control" name="merk" id="merk">
          <option value="">Pilih Merk Sepatu</option>
          <option value="Nike">Nike</option>
          <option value="Adidas">Adidas</option>
          <option value="Kickers">Kickers</option>
          <option value="Eiger">Eiger</option>
          <option value="Bucherri">Bucherri</option>
        </select>
    </div>
    <div class="mb-3">
           <label>Ukuran Sepatu</label>
           <select class="form-control" name="size" id="size">
             <option value="">Pilih ukuran Sepatu</option>
             <option value="32">32</option>
             <option value="33">33</option>
             <option value="34">34</option>
             <option value="35">35</option>
             <option value="36">36</option>
             <option value="37">37</option>
             <option value="38">38</option>
             <option value="39">39</option>
             <option value="40">40</option>
             <option value="41">41</option>
             <option value="42">42</option>
             <option value="43">43</option>
             <option value="44">44</option>
           </select>
       </div>
        <button type="submit" value="submit" class="btn btn-primary btn-user btn-block">Submit
         </button>
       </form>
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
