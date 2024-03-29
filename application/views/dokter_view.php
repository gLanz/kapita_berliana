<?php 
    $this->load->view('header.php'); 
    $this->load->view('menu.php');
?>
 
<section class="content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Dokter</h3>
                    </div>
                    <div class="card-body">
            
            <a href="<?=base_url()?>dokter/tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Dokter</a>

            <div class="my-3">
                <?php if($this->session->flashdata('message_sukses')): ?>
                    <div class="alert alert-success text-white">
                        <?=$this->session->userdata('message_sukses');?> 
                    </div>
                <?php endif ?>
            </div>

            <table class="table table-bordered table-striped table-sm" id="dataBasic2">
                  <thead>
                    <tr>
                      <th style="width: 7%" class="text-center">No</th>
                      <th>Nama</th>  
                      <th>Spesialisasi</th> 
                      <th>Jenis Kelamin</th> 
                      <th>Handphone</th> 
                      <th style="width:20%;" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    foreach($query as $rowdokter){
                        $no++;
                        ?>
                    <tr>
                      <td class="text-center"><?=$no?></td>
                      <td><?=$rowdokter->nama_dokter?></td>  
                      <td><?=$rowdokter->spesialisasi?></td>
                      <td><?=getJK($rowdokter->jenis_kelamin)?></td>  
                      <td><?=$rowdokter->no_hp?></td>  
                      <td class="text-center">

                        <a href="<?=base_url()?>dokter/edit/?kode=<?=$rowdokter->id_dokter?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>

                        <a href="<?=base_url()?>dokter/hapus/?kode=<?=$rowdokter->id_dokter?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin  ingin menghapus data dokter ini ?')"><i class="fa fa-trash"></i> Hapus</a> 

                      </td>  
                    </tr>

                <?php }?>
                   
                </tbody>
            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    $this->load->view('footer.php'); 
?>
 