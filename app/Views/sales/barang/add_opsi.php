<?= $this->extend('sales/layout'); ?>
<?= $this->section('link'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>sales/plugins/select2/select2.min.css">
<?= $this->endSection() ?>
<?= $this->section('home'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Barang Katalog
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <form role="form" method="POST" action="<?= base_url(); ?>sales/store_opsi">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Tambahkan Opsi</h3>
                        </div>
                        <div class="box-body">
                            <div id="actions" class="row">
                                <div class="col-lg-6">
                                    <div class="btn-group w-100">
                                        <span class="btn btn-success add-variasi col fileinput-button">
                                            <i class="fa fa-plus"></i>
                                            <span>Add Variasi</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="hidden" class="form-control" name="id_variasi" value="<?= $variasi['id']; ?>">
                                
                            </div>
                            <div class="form-group col-md-12">
                                <label>Opsi</label>
                                <input type="text" class="form-control" name="nama_opsi[]" placeholder="Enter nama variasi">
                               
                            </div>
                            <div class="form-group col-md-12">
                                <label>Harga</label>
                                <input type="text" class="form-control" name="harga[]" placeholder="Enter nama variasi">
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <div class="add-more-variasi">
                       
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </section><!-- /.content -->
</div>

<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<script>
    $(".add-variasi").on("click", function() {
        // uniqueId++;
        var card =
            '<div class="box box-default">' +
            '<div class="box-body">' +
            ' <div class="form-group col-md-12">' +
            '<label>Opsi</label>' +
            '<input type="text" class="form-control" name="nama_opsi[]" placeholder="Enter nama variasi">' +
            " </div>" +
            '<div class="form-group col-md-12">' +
            " <label>Harga</label>" +
            ' <input type="text" class="form-control" name="harga[]" placeholder="Enter nama variasi">' +
            '  </div>' +
            '  </div>' +
            '  </div>' ;
            $(".add-more-variasi").append(card);
        $(".select2").select2({
            tags: true
        });
    });

    $(".add-more-data").delegate(".delete", "click", function() {
        $(this).parent().parent().remove();
    });
</script>
<script>
    $(document).ready(function() {
        $('#id_kategori').change(function(e) {
            var id_kategori = $('#id_kategori').val();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('/sales/sub_kategori'); ?>",
                data: {
                    id_kategori: id_kategori
                },

                success: function(response) {
                    $("#id_sub_kategori").html(response);
                }
            })
        })
    })
</script>
<?= $this->endSection() ?>