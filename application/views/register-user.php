<body>
  <div style="background-image: url('assets/img/mountain.jpg');background-repeat: repeat-y;">

    <main class="main">
      <!-- <section class="bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/img/mountain.jpg');background-repeat: repeat-y;"> -->
      <span class="mask bg-primary alpha-6"></span>
      <div class="container d-flex align-items-center no-padding">
        <div class="col">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="card bg-primary text-white mt-5">
                <div class="card-body">
                  <span class="clearfix"></span>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"><img class="ml-3" src="assets/img/stetoscope.png" style="width: 150px"></div>
                    <div class="col-md-4"></div>
                  </div>
                  <h4 class="heading h5 text-white text-center pt-4 pb-2">Hai :D<br>
                    silahkan isi data-data berikut untuk mendaftar sebagai User</h4>
                  <p class="text-center">atau klik <a href="register-teknisi.html" class="text-white"> <u>Disini</u></a> untuk mendaftar sebagai Teknisi </p>
                  <?php
                  if ($this->session->flashdata('message') != '') {
                  ?>
                    <div class="alert alert-primary">
                      <?php echo $this->session->flashdata('message'); s?>
                    </div>
                  <?php
                  }
                  ?>
                  <form class="form-primary" action="<?php echo site_url(); ?>register/register_user_process" method="POST">
                    <div class="form-group">
                      <label> Username</label>
                      <input type="text" class="form-control" id="user" name="user" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label> Alamat</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                      <label>Telepon</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon" required>
                    </div>

                    <div class="mt-4 text-center">
                      <p><input type="checkbox" required>&nbsp Saya menerima <a href="#" class="text-white"> <u>Syarat & Ketentuan dari IT-Clinic</u></a> </p>
                    </div>
                    <!-- <button class="btn btn-block btn-lg bg-white mt-4 text-primary" data-toggle="modal" data-target="#modal_1">Daftar</button> -->
                    <button class="btn btn-block btn-lg bg-white mt-4 text-primary" type="submit">Daftar</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
    </main>
  </div>

  <!-- cdn js -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="assets/js/theme.js"></script>
  <script src="assets/js/demo.js"></script>
</body>

</html>