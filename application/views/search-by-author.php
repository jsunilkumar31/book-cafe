<style>
body {
	background: #fff;
}
.accordion .card {
	background: none;
	border: none;
}
.accordion .card .card-header {
	background: none;
	border: none;
	padding: .4rem 1rem;
	font-family: "Roboto", sans-serif;
}
.accordion .card-header h2 span {
	float: left;
	margin-top: 10px;
}
.accordion .card-header .btn {
	color: #2f2f31;
	font-size: 1.04rem;
	text-align: left;
	position: relative;
	font-weight: 500;
	padding-left: 2rem;
}
.accordion .card-header i {
	font-size: 1.2rem;
	font-weight: bold;
	position: absolute;
	left: 0;
	top: 9px;
}
.accordion .card-header .btn:hover {
	color: #ff8300;
}
.accordion .card-body {
	color: #324353;
	padding: 0.5rem 3rem;
}
.page-title {
	margin: 3rem 0 3rem 1rem;
	font-family: "Roboto", sans-serif;
	position: relative;
}
.page-title::after {
	content: "";
	width: 80px;
	position: absolute;
	height: 3px;
	border-radius: 1px;
	background: #73bb2b;
	left: 0;
	bottom: -15px;
}
.accordion .highlight .btn {
	color: #74bd30;
}
.accordion .highlight i {
	transform: rotate(180deg);
}
.responsive {
  width: 100%;
  max-width: 400px;
  height: auto;
}
</style>
<script>
$(document).ready(function(){
	// Add minus icon for collapse element which is open by default
	$(".collapse.show").each(function(){
		$(this).prev(".card-header").addClass("highlight");
	});
	
	// Highlight open collapsed element 
	$(".card-header .btn").click(function(){
		$(".card-header").not($(this).parents()).removeClass("highlight");
		$(this).parents(".card-header").toggleClass("highlight");
	});
});
</script>
<div id="content-page" class="content-page">
    <div class="container-fluid">

        <div class="row">
        <!-- sunil added code -->
        <div class="col-lg-12">
                     <div class="iq-card-transparent mb-0">
                        <div class="d-block text-center">
                           <h2 class="mb-3">Search by Author Name</h2>    
                           <div class="w-100 iq-search-filter">
                           <form action="<?= base_url(); ?>Search_by_author/index" method="post" id="author_name_serach">
                              <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                             
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="author_name" name="author_name">
                                             <option selected="">Author</option>
                                             <?php
                                            //  print_r($all_authors);exit;
                                             foreach ($all_authors as $author_name) {
                                                 # code...
                                                 ?>
                                                 <option <?php echo $author_name->id; ?>><?php echo $author_name->author_name; ?></option>
                                                 <?php
                                             }
                                             ?>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="search-menu-opt">
                                    <div class="iq-search-bar search-book d-flex align-items-center">
                                       
                                           <!-- <div class="searchbox">
                                           <input type="text" class="text search-input" placeholder="search here...">
                                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                         
                                           </div> -->
                                           <button type="submit" id="authorInput" class="btn btn-primary search-data ml-2">Search</button>
                                    </div>
                                 </li>
                              </ul>
                              
                                 </form>
                           </div> 
                        </div>
                     </div>
                     <div class="iq-card">
                     <div class="iq-card-body">  
                    <div class="row">
                        <?php
                        //echo '<pre>';
                        //var_export($categories);
                        //echo '</pre>';
                        ?>

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
                                                    <div class="view-book">
                                                        <a href="<?php echo base_url('book/' . $book->book_id); ?>" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1"><?= $book->book_title ?></h6>
                                                        
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
                                                        <a href="<?php echo base_url('book/' . $book->book_id); ?>" class="btn btn-sm btn-white" style="background: var(--iq-primary);color: var(--iq-white);border-color: var(--iq-primary);">View Book</a>
                                                        
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
            <!-- sunil added code -->    
       
        </div>
    </div>
</div>