<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/file_upload.css">
  <script scr="/js/file_upload.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
    integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.dropdown-trigger');
      M.Dropdown.init(elems, {
        hover: false,
        coverTrigger: false
      }
      );
    });

    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.modal');
      M.Modal.init(elems);
    });

  </script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teknik Informatika</title>
</head>

<body id="home" class="">

  <!-- Section: Follow -->

  <section class="section grey white-text">
    <div class="row">
      <div class="col s12 left">
        <a href="#" class="brand-logo "><img src="img/logo-kampus-merdeka.png">
        </a>
        <img src="img/avatar-10.png" alt="" class="dropdown-trigger right" data-target="dropdown2"
          style="width: 50px; margin-right: 50px; margin-top: 25px;">
      </div>
      <ul id='dropdown2' class='dropdown-content'>
        <li><a href="#!">Account</a></li>
        <li><a href="#!">Logout</a></li>
      </ul>
    </div>
  </section>
  <!-- Navbar -->
  <div class="navbar">
    <nav class=" #616161 grey lighten-1  black-text">

      <div class="nav-wrapper">
        <ul class="left ">
          <li>
            <a href="#home" class="black-text">Dashboard</a>
          </li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">Pengajuan Usulan<i
                class="material-icons right">arrow_drop_down</i></a></li>
          <li>
            <a href="#program" class="black-text">Profil</a>
          </li>
        </ul>
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#!">Catatan Harian</a></li>
          <li><a href="#!">Laporan Tengah</a></li>
          <li><a href="#!">Laporan Akhir</a></li>
          <li><a href="#!">Pengumuman</a></li>
        </ul>
      </div>
  </div>

  </nav>
  </div>
  <!-- kotak kiri  -->


  <div class="container">
    <div class="row">
      <h5 class="center fixed">Validasi Proposal</h5>
      <div class="row">
        <div class="col s12">

          <table class="centered">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Nama Mahasiswa</th>
                <th>Program Kegiatan</th>
                <th>Proposal</th>
                <th>Validasi</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Lorem ipsum dolor sit amet.</td>
                <td>Michael</td>
                <td>Magang</td>
                <td>
                  <i class="material-icons">picture_as_pdf</i>
                </td>
                <td>
                  <a class="waves-effect waves-light btn-small modal-trigger" href="#modal1">Validasi</a>

                  <div id="modal1" class="modal">
                    <div class="modal-content small">
                      <p>Apa Anda Yakin?</p>
                      <a href="#!" class="modal-close waves-effect waves-light btn-small blue">Agree</a>
                      <a href="#!" class="modal-close waves-effect waves-light btn-small blue">Decline</a>
                    </div>
                  </div>
                </td>
                <td>
                  <p>
                    <label>
                      <input type="checkbox" />
                      <span>&nbsp;</span>
                    </label>
                  </p>
                  </p>
                </td>
              </tr>

              <td>2</td>
              <td>Lorem ipsum dolor sit amet.</td>
              <td>Sutono</td>
              <td>Pertukaran Pelajar</td>
              <td>
                <i class="material-icons">picture_as_pdf</i>
              </td>
              <td>
                <a class="waves-effect waves-light btn-small modal-trigger disabled" href="#modal1">Validasi</a>
              </td>
              <td>
                <p>
                  <label>
                    <input type="checkbox" />
                    <span>&nbsp;</span>
                  </label>
                </p>
                </p>
              </td>
              </tr>

              <td>3</td>
              <td>Lorem ipsum dolor sit amet.</td>
              <td>Sukijang</td>
              <td>Kegiatan Wirausaha</td>
              <td>
                <i class="material-icons">picture_as_pdf</i>
              </td>
              <td>
                <a class="waves-effect waves-light btn-small modal-trigger disabled" href="#modal1">Validasi</a>
              </td>
              <td>
                <p>
                  <label>
                    <input type="checkbox" />
                    <span>&nbsp;</span>
                  </label>
                </p>
                </p>
              </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


</body>

</html>