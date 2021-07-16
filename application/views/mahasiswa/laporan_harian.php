<div class="row">
    <label>
        <h5 class="blue-text darken-3" style="margin-top: 50px; margin-left: 100px;">Laporan Harian</h5>
    </label>
    <br>
    <h5 class="" style="margin-left: 100px;">Pengajuan Status :</h5>
    <!-- partial:index.partial.html -->
    <div class="date-picker col 12" style="margin-left: 25% !important; margin-top: 10px !important;">
        <div class="input">
            <div class="result">Pilih Tanggal: <span></span></div>
            <button><i class="fa fa-calendar"></i></button>
        </div>
        <div class="calendar"></div>
    </div>
    <div class="col s12 m4">
        <div class="card ">
            <div class="card-content center">
                <h6 class="section red lighten-2">Anda telah memilih tanggal 28/06/2021</h6>
                <span>Laporan Harian yang telah anda tulis sebagai berikut:</span>
                <p style="border: solid 0.5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, consectetur repellat? Sapiente ratione eaque illum, exercitationem quo aperiam. Quia, enim.</p>
                <br>
                Status Laporan : <button class="btn-small green">Sudah dilihat dosen</button>
                <button class="btn-small blue">Edit</button>
            </div>
        </div>
        <button class="btn-small grey centered" style="margin-left: 95px;">Tambahkan Laporan Harian</button>
    </div>



    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script>
        $(function() {
            $(".calendar").datepicker({
                dateFormat: 'dd/mm/yy',
                firstDay: 1
            });

            $(document).on('click', '.date-picker .input', function(e) {
                var $me = $(this),
                    $parent = $me.parents('.date-picker');
                $parent.toggleClass('open');
            });


            $(".calendar").on("change", function() {
                var $me = $(this),
                    $selected = $me.val(),
                    $parent = $me.parents('.date-picker');
                $parent.find('.result').children('span').html($selected);
            });
        });
    </script>


    </body>

    </html>