<?php fuel_set_var('layout', '')?>
<?php $this->load->view('_blocks/header')?>
<ul class="bxslider">
  <li><img src="<?php echo $this->asset->img_path('1.jpg', '', TRUE); ?>"></li>
  <li><img src="<?php echo $this->asset->img_path('2.jpg', '', TRUE); ?>"></li>
  <li><img src="<?php echo $this->asset->img_path('3.png', '', TRUE); ?>"></li>
</ul>
<?php $this->load->view('_blocks/footer')?>
