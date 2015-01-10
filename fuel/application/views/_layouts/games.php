     
<?php $this->load->view('_blocks/header')?>
     
    <div id="main">
        <div class="wrapper">
             
            <article id="primary">
                <?=fuel_var('h1', ''); ?>
 
                <?php foreach($sections as $section) :
                    // 'block_name' contains the hidden field value that automatically set to the name of the selected block
                    $block_name = $section['block']['block_name'];
                    if (!empty($block_name)) :
                ?>
                <?=fuel_block('sections/'.$block_name, $section['block']) ?>
                <?php endif; ?>
                <?php endforeach; ?>
            </article>
        </div>
    </div>
     
<?php $this->load->view('_blocks/footer')?>
