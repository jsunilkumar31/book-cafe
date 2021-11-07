<div id="content-page" class="content-page">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0 " style="color: #fa7c04;"><i>Book Description</i></h4>
                    </div>
                    <div class="iq-card-body pb-0">
                        <div class="description-contens align-items-top row">
                            <div class="col-md-3">
                            <div class="iq-social d-flexx align-items-center " style="position: absolute;left:5px;">
                                            
                                    <ul class="list-inline  p-0 mb-0 align-items-center">
                                        <li>
                                            <a href="#"
                                                class="avatar-40 rounded-circle bg-primary mb-2 facebook"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="avatar-40 rounded-circle bg-primary mb-2 twitter"><i
                                                    class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="avatar-40 rounded-circle bg-primary mb-2 youtube"><i
                                                    class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i
                                                    class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                        <div class="row align-items-center">
                                            <?php
                                            $image_url = base_url() . 'assets/uploads/book_covers/' . $book->image;
                                            if ($book->image == '') {
                                                $image_url = base_url() . 'assets/uploads/book_covers/no_image.png';
                                            }
                                            ?>

                                            <div class="col-12">
                                                <ul id="description-sliderx"
                                                    class="list-inlinex d-block mx-auto align-items-center">
                                                    <img src="<?php echo $image_url; ?>"
                                                         class="img-fluid w-75 rounded" alt="">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-blockx ">
                                        <h4>Amazon Ratings : </h4>
                                        <span class="font-size-20 text-warning">
                                            <?php 
                                            if ($book->amazon_rating == "" || $book->amazon_rating == 0)
                                                # code...
                                                echo "Ratings not available";
                                           
                                            if ($book->amazon_rating > 5) {
                                                # code...
                                                for ($i=0; $i < 5; $i++):
                                                    # code...
                                                    ?>
                                                    <i class="fa fa-star mr-1"></i>
                                                    <?php endfor; ?>
                                                <?php }else{
                                                for ($i=0; $i < $book->amazon_rating; $i++):
                                                    # code...
                                                    ?>
                                                    <i class="fa fa-star mr-1"></i>
                                                    <?php endfor;}
                                            ?>
                                        </span>
                                    </div>
                                    <div class="mb-3 d-blockx ">
                                        <h4>Goodreads Ratings: </h4>
                                        <span class="font-size-20 text-warning">
                                        <?php 
                                            if ($book->goodreads_rating == "" || $book->goodreads_rating == 0 )
                                                # code...
                                                echo "Ratings not available";
                                            if ($book->goodreads_rating > 5) {
                                                # code...
                                                for ($i=0; $i < 5; $i++):
                                                    # code...
                                                    ?>
                                                    <i class="fa fa-star mr-1"></i>
                                                    <?php endfor; ?>
                                                <?php }else{
                                                for ($i=0; $i < $book->goodreads_rating; $i++):
                                                    # code...
                                                    ?>
                                                    <i class="fa fa-star mr-1"></i>
                                                    <?php endfor;}
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-9">
                               
                                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                        <h3 class="mb-3" style="color: #fa7c04;"><i><?php echo $book->book_title; ?></i></h3>
                                        <div class="price d-flex align-items-center font-weight-500 mb-2">
                                            <span class="font-size-20 pr-2 old-price d-none">Rs
                                                <?php echo $book->price; ?></span>
                                            <span class="font-size-24 text-dark">&#8377;. <?php echo $book->price; ?></span>
                                        </div>
                                        <div class="mb-3 d-blockx d-none">
                                            <span class="font-size-20 text-warning">
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <span class="text-dark mb-4 pb-4 iq-border-bottom d-block">
                                            <?php echo $book->description; ?>
                                        </span>
                                        <div class="text-primary mb-4">Author: <span
                                                class="text-body"><?php echo $book->author_name; ?></span></div>
                                        <div class="mb-4 d-flexx align-items-center d-nonex">
                                            <a href="<?php echo base_url('panel');?>" class="btn btn-primary view-more mr-2">Add To Borrow</a>
                                            <a href="book-pdf.html" class="btn btn-primary view-more mr-2 ">Read
                                                Sample</a>
                                        </div>
                                        <div class="mb-3">
                                            <a href="#" class="text-body text-center"><span
                                                    class="avatar-30 rounded-circle bg-primary d-inline-block mr-2"><i
                                                        class="ri-heart-fill"></i></span><span>Add to
                                                    Wishlist</span></a>
                                        </div>
                                        <div class="iq-social d-flexx align-items-center " style="float:right;">
                                            <h5 class="mr-2">Share:</h5>
                                            <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                                <li>
                                                    <a href="#"
                                                       class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i
                                                            class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i
                                                            class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i
                                                            class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Similar Books</h4>
                        </div>
                        <!-- <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                        </div> -->
                    </div>
                    <div class="iq-card-body single-similar-contens">
                        <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                        <?php if ($cater): ?>
                            <?php for($i=0;$i < count($cater);$i++): ?>
                                <?php
                                
                                if ($book->book_id!=$cater[$i]->book_id) {
                                    # code...
                                //  echo "<pre>";  print_r($cater[$i]->image);echo"</pre>";
                                $image_url = base_url() . 'assets/uploads/book_covers/' . $cater[$i]->image;
                                if ($cater[$i]->image == '') {
                                    $image_url = base_url() . 'assets/uploads/book_covers/no_image.png';
                                }

                                // -------creator: darshan---------number of copies of book
                                $book_copies = $book->book_copies;
                                if($book_copies == 0){
                                    $book_copies = 'In Circulation';
                                }
                                ?>
                                <li>
                                    <div class="">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="<?= $image_url; ?>" alt=""></a>
                                                                <div class="view-book">
                                                        <a href="<?php echo base_url('book/' . $cater[$i]->book_id); ?>" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1"><?= $cater[$i]->book_title ?></h6>
                                                        <p class="font-size-13 line-height mb-1"><?php //$cater[$i]->author_name ?></p>
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
                                                        <span class="pr-1 old-price d-none">&#8377;. <?= $cater[$i]->price ?></span>
                                                        <h6><b>&#8377;. <?= $cater[$i]->price ?></b></h6>
                                                    </div>

                                                    <!-- -------creator: darshan---------number of copies of book-->
                                                    <div class="">
                                                        <span>Number of Copies: <?=$book_copies;?></span>
                                                    </div>
                                                    <!-- -------creator: darshan---------end number of copies of book-->
                                                    <div class="">
                                                        <a href="<?php echo base_url('book/' . $cater[$i]->book_id); ?>" class="btn btn-sm btn-white" style="background: var(--iq-primary);color: var(--iq-white);border-color: var(--iq-primary);">View Book</a>
                                                        
                                                        
                                                        
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
                                             
                                </li>
                            <?php }else{ } endfor; ?>
                                <?php else: ?>
                                <!-- Creator - Darshan - Just to check for pdf of e book -->
                                <a href="<?php echo base_url('view_ebook/72'); ?>" class="btn btn-sm btn-white">Read Book</a>
                                
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 ">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div
                        class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Trendy Books</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                        </div>
                    </div>
                    <div class="iq-card-body trendy-contens">
                        <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/01.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The Word Books Day..</h6>
                                            <p class="font-size-13 line-height mb-1">Paul Molive</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$99</span>
                                            <h6><b>$89</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/02.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The catcher in the Rye</h6>
                                            <p class="font-size-13 line-height mb-1">Anna Sthesia</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$89</span>
                                            <h6><b>$79</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/03.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Little Black Book</h6>
                                            <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$100</span>
                                            <h6><b>$89</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/04.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Take The Risk Book</h6>
                                            <p class="font-size-13 line-height mb-1">Smith goal</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$120</span>
                                            <h6><b>$99</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/05.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The Raze Night Book </h6>
                                            <p class="font-size-13 line-height mb-1">Paige Turner</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$150</span>
                                            <h6><b>$129</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/06.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Find the Wave Book..</h6>
                                            <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$120</span>
                                            <h6><b>$100</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Favorite Reads</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                        </div>
                    </div>
                    <div class="iq-card-body favorites-contens">
                        <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                            <li class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                        <a href="javascript:void();">
                                            <img src="images/favorite/01.jpg" class="img-fluid rounded w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                        <p class="mb-2">Author : Pedro Araez</p>
                                        <div
                                            class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                            <span>Reading</span>
                                            <span class="mr-4">78%</span>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-primary">
                                                <span class="bg-primary" data-percent="78"></span>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                        <a href="javascript:void();">
                                            <img src="images/favorite/02.jpg" class="img-fluid rounded w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <h5 class="mb-2">Casey Christie night book into find...</h5>
                                        <p class="mb-2">Author : Michael klock</p>
                                        <div
                                            class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                            <span>Reading</span>
                                            <span class="mr-4">78%</span>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-danger">
                                                <span class="bg-danger" data-percent="78"></span>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                        <a href="javascript:void();">
                                            <img src="images/favorite/03.jpg" class="img-fluid rounded w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <h5 class="mb-2">The Secret to English Busy People..</h5>
                                        <p class="mb-2">Author : Daniel Ace</p>
                                        <div
                                            class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                            <span>Reading</span>
                                            <span class="mr-4">78%</span>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-info">
                                                <span class="bg-info" data-percent="78"></span>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                        <a href="javascript:void();">
                                            <img src="images/favorite/04.jpg" class="img-fluid rounded w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <h5 class="mb-2">The adventures of Robins books...</h5>
                                        <p class="mb-2">Author : Luka Afton</p>
                                        <div
                                            class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                            <span>Reading</span>
                                            <span class="mr-4">78%</span>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-success">
                                                <span class="bg-success" data-percent="78"></span>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>