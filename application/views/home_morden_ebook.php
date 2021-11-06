<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">  
                    <div class="iq-card-body">  
                        <div class="row">       
                            <?php
                                if (!parse_url($book_sample->digital_file, PHP_URL_SCHEME)) {
                                    $book_sample->digital_file = base_url().'files/'.$book_sample->digital_file; 
                                }
                            ?>
                            <iframe src="<?= base_url();?>assets/pdf/web/viewer.html?file=<?= $book_sample->digital_file;?>" width="100%" height="600px" /></iframe>   
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
