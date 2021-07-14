<div class="row">
    <h5 class="center fixed">Validasi Program Kegiatan</h5>

</div>
<div class="container">
    <div class="row">
        <div class="col s12">

            <h5><i class="material-icons">arrow_forward</i>Penelitian / Riset </h5>
            <table class="centered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Kegiatan</th>
                        <th>Dosen Pembimbing</th>
                        <th>Validasi</th>
                        <th>Anggota</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>181106041136</td>
                        <td>Michael</td>
                        <td>Riset</td>
                        <td>Pak Agus</td>
                        <td>
                            <a class="waves-effect waves-light btn-small modal-trigger" href="#modal1">Validasi</a>

                            <div id="modal1" class="modal" style="width: 400px;">
                                <div class="modal-content">
                                    <p>Validasi Program kegiatan?</p>
                                    <a href=" #!" class="modal-close waves-effect waves-light btn blue">Terima</a>
                                    <a href="#!" class="modal-close waves-effect waves-light btn red">Tolak</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="no-link" href="<?= base_url() ?>daftar_anggota"><i class="material-icons">remove_red_eye</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>