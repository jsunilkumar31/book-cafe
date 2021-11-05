<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body">

                        <section class="py-5">

                            <div class="container text-center">
                                <h2 class="mb-4">Donate A Book</h2>
                                <p class="lead mb-5">Donating Book is very simple now. Here's how it works.</p>
                                <div>
                                    <div class="row align-items-center text-md-left mb-5">
                                        <div class="col-md-3 order-1 order-md-0">
                                            <img class="img-fluid" src="<?= base_url('assets/front-theme/images/new_realeases/business.png');?>" alt="">
                                        </div>
                                        <div class="col-md-9 mb-4 mb-md-0">
                                            <span class="display-3 mb-2">01</span>
                                            <h3 class="mb-4">Submit Book Details</h3>
                                            <p>Using our Piper Assistant application, you can move your data to be stored our decentralized network with simple drag &amp; drop.</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center text-md-right mb-5">
                                        <div class="col-md-3 order-1">
                                            <img class="img-fluid" src="<?= base_url('assets/front-theme/images/new_realeases/education.png');?>" alt="">
                                        </div>
                                        <div class="col-md-9 mb-4 mb-md-0 order-0">
                                            <span class="display-3 mb-2">02</span>
                                            <h3 class="mb-4">Book We collect</h3>
                                            <p>We want to make sure that you can keep using the software that you use to manage your business.</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center text-md-left mb-5">
                                        <div class="col-md-3 order-1 order-md-0">
                                            <img class="img-fluid" src="<?= base_url('assets/front-theme/images/new_realeases/selfhelp.png');?>" alt="">
                                        </div>
                                        <div class="col-md-9 mb-4 mb-md-0">
                                            <span class="display-3 mb-2">03</span>
                                            <h3 class="mb-4">Get Rewards</h3>
                                            <p>As with all innovative technologies, sometimes unpredictable things will happen, and you can always count on our support to solve issues for you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="container">

                                <div class="col-sm-12 sign-in-page-data">
                                    <div class="sign-in-from border  rounded">
                                        <h3 class="mb-0 text-center ">Donation Form</h3>
                                        <p class="text-center">Enter your details, Book you wanted to donate & We collect from you.</p>
                                        <?php echo validation_errors(); ?>
                                        <?php if (!empty($status)) { ?>
                                            <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
                                        <?php } ?>
                                        <form class="mt-4 form-text" action="" method="post">
                                            <div class="form-group">
                                                <label class="text-dark" for="yourname">Your Full Name</label>
                                                <input type="text"  name="name" class="form-control mb-0" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" id="yourname" placeholder="Your Full Name">
                                                <?php echo form_error('name','<p class="field-error">','</p>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-dark" for="yourmob">Your Phone No</label>
                                                <input type="phone" name="yourmob" value="<?php echo !empty($postData['yourmob'])?$postData['yourmob']:''; ?>" class="form-control mb-0" id="yourmob" placeholder="Enter Phone No">
                                                <?php echo form_error('yourmob','<p class="field-error">','</p>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-dark" for="youremail">Email address</label>
                                                <input type="email" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" class="form-control mb-0" id="youremail" placeholder="Enter email">
                                                <?php echo form_error('email','<p class="field-error">','</p>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-dark" for="youraddress">Address</label>
                                                <textarea name="address" class="form-control mb-0" id="youraddress" placeholder="Your Address">
                                                    <?php echo !empty($postData['address'])?$postData['address']:''; ?>
                                                </textarea>
                                                <?php echo form_error('address','<p class="field-error">','</p>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-dark" for="yourbook">Book name you wanted to Donate</label>
                                                <input type="text" name="bookname" class="form-control mb-0" value="<?php echo !empty($postData['bookname'])?$postData['bookname']:''; ?>" id="yourbook" placeholder="Book Name">
                                                <?php echo form_error('bookname','<p class="field-error">','</p>'); ?>
                                            </div>

                                            <div class="sign-info text-center">
                                                <input type="submit" name="bookSubmit" class="btn btn-primary d-block w-100 mb-2" value="Submit Details">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>