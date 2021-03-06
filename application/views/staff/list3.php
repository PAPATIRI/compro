<div id="content" role="main">
<div class="page-header dark larger larger-desc">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1><?php echo $title ?></h1>
    </div><!-- End .col-md-6 -->
</div><!-- End .row -->
</div><!-- End .container -->
</div><!-- End .page-header -->

<div class="mb40"></div><!-- space -->

<div class="container">
<?php 
foreach($kategori as $kategori) { 
$id_kategori_staff  = $kategori->id_kategori_staff;
$staff              = $this->staff_model->kategori($id_kategori_staff);

if(count($staff) > 0) {
?>
  <h2 class="title-underblock custom mb50 text-center"><?php echo $kategori->nama_kategori_staff ?></h2>
<div class="row text-center">
  
  <?php foreach($staff as $staff) { ?>

  <div class="col-md-3 col-xs-6 team-member-container">
    <div class="team-member team-member-box custom text-center">
        <figure>
            <a href="<?php echo base_url('staff/detail/'.$staff->id_staff) ?>">
            <img src="<?php echo base_url('assets/filemanager/userfiles/image/thumbs/'.$staff->gambar) ?>" alt="<?php echo $staff->nama ?>" class="img-responsive">
            </a>
        </figure>
        <h3><?php echo $staff->nama ?></h3>
        <p class="member-desc"><?php echo $staff->jabatan ?></p>
    </div><!-- End .team-member -->
  </div><!-- End .member-container -->
  
  <?php }} ?>

  </div>
<?php } ?>

<div class="clearfix"></div>
<div class="col-md-12 text-center pagination pagin">
  <div class="clearfix"></div>
  <?php //if(isset($pagin)) { echo $pagin; }  ?>
  <div class="clearfix"></div>
</div>

</div><!-- End .row -->
</div><!-- End .container -->

<div class="mb20"></div><!-- space -->

</div><!-- End #content -->