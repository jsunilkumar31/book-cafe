<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <script>
            function add_to_wishlist(bookId){
                $.post("<?=base_url("addBookToWishlist");?>",{"bookId": bookId},function(response){ 
                    if(response == 'true'){
                        alert('Wishlist successfully added');
                    }else{
                        alert('Please contact admin to proceed');
                    }
                });
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Browse Books

                                <?php
                                if (isset($category_name)) {
                                    echo'By Category : <strong>' . $category_name . '</strong>';
                                }
                                ?>
                            </h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">                              
                            <a href="category.html" class="btn btn-sm btn-primary view-more is-hidden">View MoreX</a>
                        </div>

                    </div> 
                    <div class="iq-card-body">  
                        <div class="row">
                            <?php if ($books): ?>
                                <?php foreach ($books as $book): ?>
                                    <?php
                                    $image_url = base_url() . 'assets/uploads/book_covers/' . $book->image;
                                    if ($book->image == '') {
                                        $image_url = base_url() . 'assets/uploads/book_covers/no_image.png';
                                    }

                                    // -------creator: darshan---------number of copies of book
                                    $book_copies = $book->book_copies;
                                    if($book_copies == 0){
                                        $book_copies = 'In Circulation';
                                    }
                                    ?>

                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="<?= $image_url; ?>" alt=""></a>
                                                        <!-- <div class="view-book">
                                                            <a href="<?php echo base_url('book/' . $book->book_id); ?>" class="btn btn-sm btn-white">Add to Wishlist</a>
                                                        </div> -->
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1"><?= $book->book_title ?></h6>
                                                            <p class="font-size-13 line-height mb-1"><?= $book->author_name ?></p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning d-none">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>                                             
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                        <div class="price d-flex align-items-center">
                                                            <span class="pr-1 old-price d-none">&#8377;. <?= $book->price ?></span>
                                                            <h6><b>&#8377;. <?= $book->price ?></b></h6>
                                                        </div>

                                                        <!-- -------creator: darshan---------number of copies of book-->
                                                        <div class="">
                                                            <span>Number of Copies: <?=$book_copies;?></span>
                                                        </div>
                                                        <!-- -------creator: darshan---------end number of copies of book-->
                                                        <div class="">
                                                            <!--<a href="<?php echo base_url('book/' . $book->book_id); ?>" class="btn btn-sm btn-white" style="background: var(--iq-primary);color: var(--iq-white);border-color: var(--iq-primary);">Add to Wishlist</a>-->

                                                            <button class="btn btn-sm btn-white" style="background: var(--iq-primary);color: var(--iq-white);border-color: var(--iq-primary);" onclick="add_to_wishlist(<?php echo $book->book_id;?>);">Add to Wishlist</button>
                                                            
                                                            <?php if($read_book == 'view_ebook'){ ?>
                                                                <a href="<?php echo base_url('view_ebook/' . $book->book_id); ?>" class="btn btn-sm btn-white">Read Book</a>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="iq-product-action d-none">
                                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                        </div>   
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <!-- Creator - Darshan - Just to check for pdf of e book -->
                                <a href="<?php echo base_url('view_ebook/72'); ?>" class="btn btn-sm btn-white">Read Book</a>
                                
                                <div class="text-center">
                                    <h4 class="text-center">Please check with our Support Team for the Book.</h4>
                                    <a href="<?php echo base_url('contact'); ?>" class="btn btn-primary text-center">Contact Us</a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="row  p-4">
                            <div class="col-md-12">
                                <div class="row text-center">
                                    <nav  aria-label="Page navigation example">
                                        <?php echo $links; ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="col-lg-12">
                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
                    <div class="newrealease-contens">
                        <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                            <li class="item">
                                <a href="<?= base_url('home/?categories=2'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/Productivity.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?= base_url('home/?categories=3'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/Sales_and_Marketing.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?= base_url('home/?categories=9'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/StartUp_Entreprenuership.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                             <li class="item">
                                <a href="<?= base_url('home/?categories=17'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/E_Books.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?= base_url('home/?categories=5'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/Creativity_Innovation.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?= base_url('home/?categories=11'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/Self_Help.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?= base_url('home/?categories=17'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/E_Books.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?= base_url('home/?categories=7'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/Case_studies.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?= base_url('home/?categories=6'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/Finance.png" class="img-fluid w-100 rounded" alt="">
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?= base_url('home/?categories=4'); ?>">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/new_realeases/Biographies.png" class="img-fluid w-100 rounded" alt="">
                                </a>                              
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
