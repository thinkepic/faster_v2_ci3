<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Faster | <?= @get_desc()?></title>

		<link rel="shortcut icon" href='<?= base_url()?>assets/media/logos/favicon.ico'  />
		<link rel="stylesheet" href="<?= base_url()?>assets/plugins/custom/datatables/datatables.bundle.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/plugins/global/plugins.bundle.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/style.bundle.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/fonts.css">
    <?php $this->load->assets('css'); ?>
	</head>
  <body id="kt_body" class='header-tablet-and-mobile-fixed aside-enabled'>
    <div class='d-flex flex-column flex-root'>
      <div class='page d-flex flex-row flex-column-fluid'>
        <!-- start left menu  -->
        <? include(APPPATH.'views/template/components/left/index.php');?>
        <!-- end left menu  -->

        <div class='wrapper d-flex flex-column flex-row-fluid' id='kt_wrapper'>
          <!-- start header section -->
          <? include(APPPATH.'views/template/components/header/index.php');?>
          <!-- end header section  -->

          <!-- start content section  -->
          <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="post d-flex flex-column-fluid" id='kt_post'>
              <div class="container-xxl" id='kt_content_container'>
                <?php print_r($content)?>
              </div>
            </div>
          </div>
          <!-- end content section  -->

          <!-- start footer section -->
          <?include(APPPATH.'views/template/components/footer/index.php');?>
          <!-- end footer section -->
        </div>
      </div>
    </div>
    <script src='<?= base_url()?>assets/plugins/global/plugins.bundle.js'></script>
    <script src='<?= base_url()?>assets/js/scripts.bundle.js'></script>
    <script src='<?= base_url()?>assets/js/custom.js'></script>
    <?php $this->load->assets('js'); ?>
  </body>
</html>