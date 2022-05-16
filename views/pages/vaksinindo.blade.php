<section id="covidindo">
    <div class="container">
        <h3 class="my-4">Data Vaksin Indonesia</h3>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 my-2">
                <div class="card">
                    <img src="https://source.unsplash.com/1980x1440/?vaccinated" class="card-img-top" alt="Nanti Ada Gambar">
                    <div class="card-body">
                        <p class="card-text text-center fs-1 fw-bolder text-primary"><?php echo $row['jumlah_vaksinasi_1']?></p>
                        <h5 class="fs-6 text-center mt-3">Telah divaksin dosis pertama</h5>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 my-2">
                <div class="card">
                    <img src="https://source.unsplash.com/1980x1440/?vaccination" class="card-img-top" alt="Nanti Ada Gambar">
                    <div class="card-body">
                        <p class="card-text text-center fs-1 fw-bolder text-success"><?php echo $row['jumlah_vaksinasi_2']?></p>
                        <h5 class="fs-6 text-center mt-3"> Telah divaksin dosis kedua</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>