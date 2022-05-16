<section id="covidindo">
    <div class="container">
        <h3 class="my-4">Data Sebaran COVID-19 Indonesia</h3>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="card">
                    <img src="https://source.unsplash.com/1980x1440/?covid" class="card-img-top" alt="Nanti Ada Gambar">
                    <div class="card-body">
                        <p class="card-text text-center fs-1 fw-bolder text-warning"><?php echo $row['jumlah_positif']?></p>
                        <h5 class="fs-6 text-center mt-3"> Positif</h5>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="card">
                    <img src="https://source.unsplash.com/1980x1440/?graveyard" class="card-img-top" alt="Nanti Ada Gambar">
                    <div class="card-body">
                        <p class="card-text text-center fs-1 fw-bolder text-danger"><?php echo $row['jumlah_meninggal']?></p>
                        <h5 class="fs-6 text-center mt-3"> Meninggal</h5>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="card">
                    <img src="https://source.unsplash.com/1980x1440/?smile" class="card-img-top" alt="Nanti Ada Gambar">
                    <div class="card-body">
                        <p class="card-text text-center fs-1 fw-bolder text-info"><?php echo $row['jumlah_sembuh']?></p>
                        <h5 class="fs-6 text-center mt-3"> Sembuh</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>