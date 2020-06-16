<script>
    var base_url = '<?= base_url() ?>' // Buat variabel base_url agar bisa di akses di semua file js
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right mb-3">
                <span class="glyphicon glyphicon-plus"></span> Tambah Data
            </button>

            <div id="view" style="margin: 10px 20px;">
                <?php $this->load->view('siswa/view', array('model' => $siswa)); // Load file view.php dan kirim data siswanya 
                ?>
            </div>

            <!--form tambah dan edit -->
            <div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="addSubModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><span id="modal-title"></span></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="nis" id="nis" class="form-control" placeholder="NIS">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="">--selected--</option>
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telp" id="telp" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- beri loading-simpan ketika tombol save di klik-->
                                <div id="loading-simpan" class="pull-left">
                                    <b>please wait..</b>
                                </div>
                                <!-- beri loading-ubah ketika tombol edit di klik-->
                                <div id="loading-ubah" class="pull-left">
                                    <b>please wait..</b>
                                </div>
                                <!-- beri id btn-simpan untuk tombol simpan-->
                                <button type="button" class="btn btn-primary" id="btn-simpan">save</button>
                                <!-- beri id btn-simpan untuk tombol simpan-->
                                <button type="submit" class="btn btn-primary" id="btn-ubah">Edit</button>
                                <button type="button" class="btn btn-secondary" data-dismis="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Beri id "form-modal" untuk tag div tersebut
            -->
            <div id="delete-modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">
                                Konfirmasi
                            </h4>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <!-- Beri id "loading-hapus" untuk loading ketika klik tombol hapus -->
                            <div id="loading-hapus" class="pull-left">
                                <b>please wait...</b>
                            </div>
                            <!-- Beri id "btn-hapus" untuk tombol hapus nya -->
                            <button type="button" class="btn btn-primary" id="btn-hapus">Ya</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
                </d </div> <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <script src="<?= base_url('assets/'); ?>js/custom.js"></script>