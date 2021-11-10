<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
    <script>
            $('#myModal').on('shown.bs.modal', function () {
                $('#video1')[0].play();
            })
            $('#myModal').on('hidden.bs.modal', function () {
                $('#video1')[0].pause();
            })
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Promo Video</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/e46AGbBctQk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
<style>
#signup {
  height: auto;
  padding: 20px;
  background: #fff;
  margin: 80px auto;
  position: relative;
  min-height: 300px;
}
#fieldsets {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  overflow: hidden;
}
input[type="text"],
input[type="email"],
input[type="password"],
input[type="tel"],
textarea {
  display: block;
  -webkit-appearance: none;
  -moz-appearance: none;
  width: 100%;
  box-sizing: border-box;
  border: 1px solid #ddd;
  padding: 8px;
  margin-bottom: 8px;
  position: relative;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
input[type="tel"]:focus,
textarea:focus {
  outline: none;
  border: 1px solid #22918b;
}
input[type="radio"] {
  margin: 6px;
  display: inline-block;
}
fieldset {
  border: none;
  position: absolute;
  left: -640px;
  width: 600px;
  padding: 10px 0;
  transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  -ms-transition: all 0.3s linear;
  opacity: 0;
}
fieldset.current {
  left: 20px;
  opacity: 1;
}
fieldset.next {
  left: 640px;
}
input[type="submit"] {
  display: none;
  border: none;
}
#section-tabs {
  font-size: 0.8em;
  height: 50px;
  position: relative;
  margin-top: -50px;
  margin-bottom: 50px;
  padding: 0;
  font-weight: bold;
  list-style: none;
  text-transform: uppercase;
}
#section-tabs li {
  color: #a7a7a7;
  cursor: not-allowed;
  border-left: 1px solid #aaa;
  text-decoration: none;
  padding: 0 6px;
  float: left;
  width: 25%;
  box-sizing: border-box;
  text-align: center;
  font-weight: bold;
  line-height: 30px;
  background: #ddd;
  position: relative;
}
#section-tabs li span {
  color: #bababa;
}
#section-tabs li.active {
  color: #444;
  cursor: pointer;
}
#section-tabs li:after {
  content: "";
  display: block;
  margin-left: 0;
  position: absolute;
  left: 0;
  top: 0;
}
#section-tabs li.current {
  opacity: 1;
  background: #fff;
  z-index: 999;
  border-left: none;
}
#section-tabs li.current:after {
  border: 15px solid transparent;
  border-left: 15px solid #fa7c04;
}
.error {
  color: #bf2424;
  display: block;
}
input.error,
textarea.error {
  border-color: #bf2424;
}
input.error:focus,
textarea.error:focus {
  border-color: #bf2424;
}
label.error {
  margin-bottom: 20px;
}
input.valid {
  color: green;
}
label.valid {
  position: absolute;
  right: 20px;
}
input + .valid,
textarea + .valid {
  display: none;
}
.valid + .valid {
  display: inline;
  position: absolute;
  right: 10px;
  margin-top: -36px;
  color: green;
}
#myquestionmodal .btn {
  border: none;
  padding: 8px;
  background: #fa7c04;
  cursor: pointer;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  color: #fff;
  position: absolute;
  bottom: 20px;
  right: 20px;
  font-family: "Merriweather Sans", sans-serif;
}
#myquestionmodal .btn:hover {
  background: #fa7c04;
  /* color: #fa7c04; */
}

</style>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myquestionmodal">questions</button>

<!-- Modal -->
<div class="modal fade" id="myquestionmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="embed-responsive ">
                <form id="signup" action="somewhere" method="POST">
                    <ul id="section-tabs">
                    <li class="current active"><span>1.</span> Creds</li>
                    <li><span>2.</span> Deets</li>
                    <li><span>3.</span> Settings</li>
                    <li><span>4.</span> Last Words</li>
                    </ul>
                <div id="fieldsets">
                <fieldset class="current">
                    <label for="email">Email:</label>
                    <input name="email" type="email" class="required email" />
                    <label name="password" for="password">Password:</label>
                    <input type="password" minlength="10" class="required">
                </fieldset>
                <fieldset class="next">
                    <label for="username">Username:</label>
                    <input name="username" type="text">
                    <label for="bio">Short Bio:</label>
                    <textarea name="bio" class="required"></textarea>
                </fieldset>
                <fieldset class="next">
                    <label for="interests">Basic Interests:</label>
                    <textarea name="bio"></textarea>
                    <p>Receive newsletter?<br>
                    <input type="radio" name="newsletter" value="yes"><label for="newsletter">yes</label>
                    <input type="radio" name="newsletter" value="no"><label for="newsletter">no</label>
                    </p>
                </fieldset>
                <fieldset class="next">
                    <label for="referrer">Referred by:</label>
                    <input type="text" name="referrer">
                    <label for="phone">Daytime Phone:</label>
                    <input type="tel" name="phone">
                </fieldset>
                <a class="btn" id="next">Next Section ▷</a>
                <input type="submit" class="btn">
                </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<script>

$("body").on("keyup", "form", function(e){
  if (e.which == 13){
    if ($("#next").is(":visible") && $("fieldset.current").find("input, textarea").valid() ){
      e.preventDefault();
      nextSection();
      return false;
    }
  }
});
 
 
$("#next").on("click", function(e){
  console.log(e.target);
  nextSection();
});
 
$("form").on("submit", function(e){
  if ($("#next").is(":visible") || $("fieldset.current").index() < 3){
    e.preventDefault();
  }
});
 
function goToSection(i){
  $("fieldset:gt("+i+")").removeClass("current").addClass("next");
  $("fieldset:lt("+i+")").removeClass("current");
  $("li").eq(i).addClass("current").siblings().removeClass("current");
  setTimeout(function(){
    $("fieldset").eq(i).removeClass("next").addClass("current active");
      if ($("fieldset.current").index() == 3){
        $("#next").hide();
        $("input[type=submit]").show();
      } else {
        $("#next").show();
        $("input[type=submit]").hide();
      }
  }, 80);
 
}
 
function nextSection(){
  var i = $("fieldset.current").index();
  if (i < 3){
    $("li").eq(i+1).addClass("active");
    goToSection(i+1);
  }
}
 
$("li").on("click", function(e){
  var i = $(this).index();
  if ($(this).hasClass("active")){
    goToSection(i);
  } else {
    // alert("Please complete previous sections first.");
  }
});
 
 


</script>










        <div class="row">
            <div class="col-lg-12">
                <marquee><p>Currently we are available in Bangalore only.</p></marquee>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-12">
                <div class=" ">
                    <div class="">
                        <section class="vertical-center-4 slider slideritems d-none d-sm-block">
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe1.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe2.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe3.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe4.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe5.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe6.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe7.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe8.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe9.jpg">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe10.jpg">
                            </a>
                        </section>
                        <section class="vertical-center-4 slider slideritems d-block d-sm-none">
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini1.jpg" class="p-3 m-2" style="max-width:240px;">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini2.jpg" class="p-3 m-2" style="max-width:240px;">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini3.jpg" class="p-3 m-2" style="max-width:240px;">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini4.jpg" class="p-3 m-2" style="max-width:240px;">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini5.jpg" class="p-3 m-2" style="max-width:240px;">
                            </a>
                            <a href="">
                                <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini6.jpg" class="p-3 m-2" style="max-width:240px;">
                            </a>
                            
                            
                        </section>
                    </div>
                </div>

            </div>

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
            <div class="col-lg-12 is-hidden">
                     <div class="iq-card-transparent mb-0">
                        <div class="d-block text-center">
                           <h2 class="mb-3">Search by Book Name</h2>    
                           <div class="w-100 iq-search-filter">
                              <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect1">
                                             <option selected="">All</option>
                                             <option>A Books</option>
                                             <option>the Sun</option>
                                             <option>Harsh book</option>
                                             <option>People book</option>
                                             <option>the Fog</option>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect2">
                                             <option selected="">Genres</option>
                                             <option>General</option>
                                             <option>History</option>
                                             <option>Horror</option>
                                             <option>Fantasy</option>
                                             <option>Literary</option>
                                             <option>Manga</option>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect3">
                                             <option selected="">Year</option>
                                             <option>2015</option>
                                             <option>2016</option>
                                             <option>2017</option>
                                             <option>2018</option>
                                             <option>2019</option>
                                             <option>2020</option>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="search-menu-opt">
                                    <div class="iq-dropdown">
                                       <div class="form-group mb-0">
                                          <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect4">
                                             <option selected="">Author</option>
                                             <option>Milesiy Yor</option>
                                             <option>Ira Membrit</option>
                                             <option>Anna Mull</option>
                                             <option>John Smith</option>
                                             <option>David King</option>
                                             <option>Kusti Franti</option>
                                          </select>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="search-menu-opt">
                                    <div class="iq-search-bar search-book d-flex align-items-center">
                                       <form action="#" class="searchbox">
                                          <input type="text" class="text search-input" placeholder="search here...">
                                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                       </form>
                                       <button type="submit" class="btn btn-primary search-data ml-2">Search</button>
                                    </div>
                                 </li>
                              </ul>
                           </div> 
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 col-lg-3">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                    <div class="iq-card-body p-0">
                                       <div class="d-flex align-items-center">
                                          <div class="col-6 p-0 position-relative image-overlap-shadow">
                                             <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/01.jpg" alt=""></a>
                                             <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-2">
                                                <h6 class="mb-1">A Hunger knut book</h6>
                                                <p class="font-size-13 line-height mb-1">Gurt Mistrioty</p>
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
                                                <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 col-lg-3">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                    <div class="iq-card-body p-0">
                                       <div class="d-flex align-items-center">
                                          <div class="col-6 p-0 position-relative image-overlap-shadow">
                                             <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/02.jpg" alt=""></a>
                                             <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-2">
                                                <h6 class="mb-1">In Cold Blood Book..</h6>
                                                <p class="font-size-13 line-height mb-1">Anna Mull</p>
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
                                                <span class="pr-1 old-price">$129</span>
                                                <h6><b>$99</b></h6>
                                             </div>
                                             <div class="iq-product-action">
                                                <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 col-lg-3">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent m-0 mb-sm-0 mb-md-0 mb-lg-0">
                                    <div class="iq-card-body p-0">
                                       <div class="d-flex align-items-center">
                                          <div class="col-6 p-0 position-relative image-overlap-shadow">
                                             <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/12.jpg" alt=""></a>
                                             <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-2">
                                                <h6 class="mb-1">Think Outside Box</h6>
                                                <p class="font-size-13 line-height mb-1">Bill Emia</p>
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
                                                <span class="pr-1 old-price">$110</span>
                                                <h6><b>$99</b></h6>
                                             </div>
                                             <div class="iq-product-action">
                                                <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            <!-- sunil added code -->
            <!-- sunil added code -->
            <div class="col-lg-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">coming soon</h4>
                        </div>
                        <!-- <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                        </div> -->
                    </div>
                    <div class="iq-card-body single-similar-contens">
                        <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                        <?php if ($coming_soon): ?>
                            <?php for($i=0;$i < count($coming_soon);$i++): ?>
                                <?php
                                
                                if ($book->book_id!=$coming_soon[$i]->book_id) {
                                    # code...
                                //  echo "<pre>";  print_r($cater[$i]->image);echo"</pre>";
                                $image_url = base_url() . 'assets/uploads/book_covers/' . $coming_soon[$i]->image;
                                if ($coming_soon[$i]->image == '') {
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
                                                        <a href="<?php echo base_url('book/' . $coming_soon[$i]->book_id); ?>" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1"><?= $coming_soon[$i]->book_title ?></h6>
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
                                                        <span class="pr-1 old-price d-none">&#8377;. <?= $coming_soon[$i]->price ?></span>
                                                        <h6><b>&#8377;. <?= $coming_soon[$i]->price ?></b></h6>
                                                    </div>

                                                    <!-- -------creator: darshan---------number of copies of book-->
                                                    <div class="">
                                                        <span>Number of Copies: <?=$book_copies;?></span>
                                                    </div>
                                                    <!-- -------creator: darshan---------end number of copies of book-->
                                                    <div class="">
                                                        <a href="<?php echo base_url('book/' . $coming_soon[$i]->book_id); ?>" class="btn btn-sm btn-white" style="background: var(--iq-primary);color: var(--iq-white);border-color: var(--iq-primary);">View Book</a>
                                                        
                                                        
                                                        
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
            <!-- sunil added code -->
            <!-- sunil added code -->
            <div class="col-lg-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">New Books</h4>
                        </div>
                        <!-- <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                        </div> -->
                    </div>
                    <div class="iq-card-body single-similar-contens">
                        <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                        <?php if ($new_books): ?>
                            <?php for($i=0;$i < count($new_books);$i++): ?>
                                <?php
                                
                                if ($book->book_id!=$new_books[$i]->book_id) {
                                    # code...
                                //  echo "<pre>";  print_r($cater[$i]->image);echo"</pre>";
                                $image_url = base_url() . 'assets/uploads/book_covers/' . $new_books[$i]->image;
                                if ($new_books[$i]->image == '') {
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
                                                        <a href="<?php echo base_url('book/' . $new_books[$i]->book_id); ?>" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1"><?= $new_books[$i]->book_title ?></h6>
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
                                                        <span class="pr-1 old-price d-none">&#8377;. <?= $new_books[$i]->price ?></span>
                                                        <h6><b>&#8377;. <?= $new_books[$i]->price ?></b></h6>
                                                    </div>

                                                    <!-- -------creator: darshan---------number of copies of book-->
                                                    <div class="">
                                                        <span>Number of Copies: <?=$book_copies;?></span>
                                                    </div>
                                                    <!-- -------creator: darshan---------end number of copies of book-->
                                                    <div class="">
                                                        <a href="<?php echo base_url('book/' . $new_books[$i]->book_id); ?>" class="btn btn-sm btn-white" style="background: var(--iq-primary);color: var(--iq-white);border-color: var(--iq-primary);">View Book</a>
                                                        
                                                        
                                                        
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
            <!-- sunil added code -->
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
            <div class="col-lg-6 is-hidden">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between mb-0">
                        <div class="iq-header-title">
                            <h4 class="card-title">Featured Books</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton2" data-toggle="dropdown">
                                    This Week<i class="ri-arrow-down-s-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="row align-items-center">
                            <div class="col-sm-5 pr-0">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/page-img/featured-book.png" alt=""></a>
                            </div>
                            <div class="col-sm-7 mt-3 mt-sm-0">
                                <h4 class="mb-2">Casey Christie night book into find...</h4>
                                <p class="mb-2">Author: Gheg origin</p>
                                <div class="mb-2 d-block">
                                    <span class="font-size-12 text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <span class="text-dark mb-3 d-block">Lorem Ipsum is simply dummy test in find a of the printing and typeset ing industry into end.</span>
                                <button type="submit" class="btn btn-primary learn-more">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 is-hidden">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between mb-0">
                        <div class="iq-header-title">
                            <h4 class="card-title">Featured Writer</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton3" data-toggle="dropdown">
                                    This Week<i class="ri-arrow-down-s-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/01.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Brandon Guidelines</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/02.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Hugh Millie-Yate</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">432</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/03.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Nathaneal Down</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">5471</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/04.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Thomas R. Toe</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">8764</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/05.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Druid Wensleydale</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">8987</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/06.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/07.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Desmond Eagle</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">4324</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/08.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Lurch Schpellchek</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">012</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/09.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/10.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/11.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                </div>
                            </li>
                            <li class="col-sm-6 d-flex mb-3 align-items-center">
                                <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="images/user/01.jpg" alt=""></a>
                                </div>
                                <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 is-hidden">
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
                                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
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
                                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
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
                                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
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
                                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
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
