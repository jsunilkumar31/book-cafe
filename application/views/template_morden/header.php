<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= $page_title; ?> | Online Business Books Rental Marketplace</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/front-theme/images/favicon.ico?v=2" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/front-theme/css/bootstrap.min.css">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/front-theme/css/typography.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/front-theme/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/front-theme/css/responsive.css">
           <!-- jQuery UI CSS -->
  
        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script type="text/javascript">
            baseUrl = "<?= base_url(); ?>";
            issue_conf = "<?= $settings->issue_conf; ?>";
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-B63ZVZ84N6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-B63ZVZ84N6');
        </script>
    </head>
    <body class="<?= $body_class; ?>">
        <!-- loader Start -->
        <div id="loadingx">
            <div id="loading-centerx">
            </div>
        </div>

        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- Sidebar  -->
            <div class="iq-sidebar">
                <div class="iq-sidebar-logo d-flex justify-content-between">
                    <a href="<?= base_url(); ?>" class="header-logo">
                        <img src="<?= base_url(); ?>assets/front-theme/images/logo-new-mini.png" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                            <span class="text-primary text-uppercase"><?= $settings->title; ?></span>
                        </div>
                    </a>
                    <div class="iq-menu-bt-sidebar">
                        <div class="iq-menu-bt align-self-center">
                            <div class="wrapper-menu">
                                <div class="main-circle"><i class="las la-bars"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $firstMenu = false;
                $secondMenu = false;
                $is_first_collapse = '';
                $is_second_collapse = '';
                $is_first_active = '';
                $is_second_active = '';
                if ($this->uri->segment(1) == "donate-book" || $this->uri->segment(1) == "about" || $this->uri->segment(1) == "contact") {
                    $firstMenu = true;
                    $is_first_collapse = 'show';
                    $is_first_active = 'active';
                }

                if ($this->uri->segment(1) == "category") {
                    $secondMenu = true;
                    $is_second_collapse = 'show';
                    $is_second_active = 'active';
                }
                ?>
                <div id="sidebar-scrollbar">
                    <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">

                            <li class="<?= $is_second_active; ?> active-menu">
                                <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="<?= $secondMenu; ?>"><span class="ripple rippleEffect"></span><i class="ri-search-line"></i><span>Browse by Categories</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="admin" class="iq-submenu collapse <?= $is_second_collapse; ?>" data-parent="#iq-sidebar-toggle">
                                    <li <?php
                                    if ($this->uri->segment(2) == "3" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/3'); ?>"><i class="ri-numbers-line"></i>Sales / Marketing</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "1" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/1'); ?>"><i class="
la la-hand-o-right"></i>Management / Leadership</a></li>
                                     <li <?php
                                    if ($this->uri->segment(2) == "9" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/9'); ?>"><i class="
la la-magic"></i>Start-Up / Entrepreneurship</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "2" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/2'); ?>"><i class="ri-focus-2-line"></i>Productivity / Strategy</a></li>
                                     <li <?php
                                    if ($this->uri->segment(2) == "4" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/4'); ?>"><i class="ri-user-follow-line"></i>Biographies / Business Stories</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "5" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/5'); ?>"><i class="ri-filter-line"></i>Creativity / Innovation</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "6" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/6'); ?>"><i class="ri-funds-box-line"></i>Finance / Economics</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "11" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/11'); ?>"><i class="ri-user-search-line"></i>Self Help</a></li>
                                     <li <?php
                                    if ($this->uri->segment(2) == "22" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/22'); ?>"><i class="ri-open-arm-line"></i>Health / Fitness</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "15" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/15'); ?>"><i class="ri-parent-line"></i>Parenting</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "10" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/10'); ?>"><i class="ri-checkbox-multiple-blank-line"></i>Magazine</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "17" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/17'); ?>"><i class="ri-book-2-line"></i>E-Books</a></li>
                                    <li class="d-none" <?php
                                    if ($this->uri->segment(2) == "1" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>><a href="<?= base_url('category/1'); ?>"><i class="ri-book-2-line"></i>Leadership</a></li>
                                    <li <?php
                                    if ($this->uri->segment(2) == "7" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?> ><a href="<?= base_url('category/7'); ?>"><i class="la la-gears"></i>Case Studies / White Papers</a></li>
                                     <li class="d-none" <?php
                                    if ($this->uri->segment(2) == "7" && $secondMenu == true) {
                                        echo 'class="active active-menu"';
                                    }
                                    ?> ><a href="<?= base_url('category/7'); ?>"><i class="ri-book-2-line"></i>Case Studies / White Papers</a></li>
                                   
                                   
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url('book-plan'); ?>"><i class="ri-function-line"></i><span>browse by author/publisor</span></a>
                            </li>
                            <li>
                                <a href="<?= base_url('book-plan'); ?>"><i class="ri-function-line"></i><span>Coming soon</span></a>
                            </li>
                            <li <?php
                            if ($this->uri->segment(1) == "book-plan") {
                                echo 'class="active active-menu"';
                            }
                            ?>>
                                <a href="<?= base_url('book-plan'); ?>"><i class="ri-function-line"></i><span>Book A Plan</span></a>
                            </li>
                            <li <?php
                            if ($this->uri->segment(1) == "reading-helps") {
                                echo 'class="active active-menu"';
                            }
                            ?>>
                                <a href="<?= base_url('reading-helps'); ?>"><i class="ri-book-open-fill"></i><span>How Reading Helps?</span></a>
                            </li>
                            <li <?php
                            if ($this->uri->segment(1) == "faqs") {
                                echo 'class="active active-menu"';
                            }
                            ?>>
                                <a href="<?= base_url('faqs'); ?>"><i class="ri-questionnaire-line"></i><span>FAQ's</span></a>
                            </li>
                            
                            
                            <!-- Creator: Darshan ----------To redirect to BizHub for morethan 2lack subscribers starts-->
                            <?php 
                                $users_count = $this->home_model->getUsersCount();

                                if($users_count > 200000){
                            ?>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="ri-key-line"></i><span>BizHub</span></a>
                            </li>
                            <?php }else{ ?>
                                <li><a href="http://bookscafe.co.in/bizhub/"><i class="ri-key-line"></i><span>BizHub</span></a></li>
                            <?php } ?>
                            <!-- Creator: Darshan ----------To redirect to BizHub for morethan 2lack subscribers ends-->

                            <li>
                                <a href="https://bookscafe.co.in/resources/"><i class="ri-file-pdf-line"></i><span>Resources</span></a>
                            </li>
                            <li class="<?= $is_first_active; ?> active-menu">
                                <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="<?= $firstMenu; ?>"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Home</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="dashboard" class="iq-submenu collapse <?= $is_first_collapse; ?>" data-parent="#iq-sidebar-toggle">

                                    <li class="d-none" <?php
                                    if ($this->uri->segment(1) == "donate-book") {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>>
                                        <a href="<?= base_url('donate-book'); ?>"><i class="ri-book-line"></i><span>Donate Book</span></a>
                                    </li>

                                    <li <?php
                                    if ($this->uri->segment(1) == "about") {
                                        echo 'class="active active-menu"';
                                    }
                                    ?>>
                                        <a href="<?= base_url('about'); ?>"><i class="ri-checkbox-multiple-blank-line"></i><span>About</span></a>
                                    </li>
                                    <li <?php
                                    if ($this->uri->segment(1) == "contact") {
                                        echo 'class="active active-menu"';
                                    }
                                    ?> >
                                        <a href="<?= base_url('contact'); ?>"><i class="ri-heart-line"></i><span>Contact</span></a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div id="sidebar-bottom" class="p-3 position-relative">
                        <div class="iq-card">
                            <div class="iq-card-body">
                                <div class="sidebarbottom-content">
                                    <center><div class="image"><img src="assets/uploads/logos/4a00928db5d5c73291fe9997872450ee.png" alt=""></div></center>    
                                    <a href="<?= base_url('new-member'); ?>" class="btn w-100 btn-primary mt-4 view-more">Become Member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TOP Nav Bar -->
            <div class="iq-top-navbar">
                <div class="iq-navbar-custom">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="iq-menu-bt d-flex align-items-center">
                            <div class="wrapper-menu">
                                <div class="main-circle"><i class="las la-bars"></i></div>
                            </div>
                            <div class="iq-navbar-logo d-flex justify-content-between">
                                <a href="<?= base_url(); ?>" class="header-logo">
                                    <img src="<?= base_url(); ?>assets/front-theme/images/logo-mini.jpeg" class="img-fluid rounded-normal" alt="">
                                    <div class="logo-title">
                                        <span class="text-primary text-uppercase"><?= $settings->title; ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="navbar-breadcrumb">
                            <h5 class="mb-0">&nbsp;</h5>
                            <nav aria-label="breadcrumb" class="is-hidden">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="iq-search-bar">
                            <form action="<?= base_url(); ?>home/index" class="searchbox">
                                <input name="book_title" type="text" id="ajax_search" class="text search-input" placeholder="Search Here...">
                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                <!-- <p id="show_search_results"></p> -->
                            </form>

                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list">
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <form action="#" class="search-box p-0">
                                        <input type="text" class="text search-input" placeholder="Type here to search...">
                                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                    </form>
                                </li>
                                <a class="btn  btn-primary view-more" href="<?= base_url('panel'); ?>" role="button">Sign In<i class="ri-login-box-line ml-2"></i></a>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- TOP Nav Bar END -->
            <!-- Creator: Darshan ----------Popup To redirect to BizHub for morethan 2lack subscribers starts-->
                <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <?php 
                                    if($this->ion_auth->logged_in()){ ?>
                                        <p>Please <a href="<?=base_url()?>panel"><button class="btn btn-primary btn-sm">Click Here</button></a> to continue.</p>
                                <?php
                                    }else{ ?>
                                        <p>Please <a href="<?=base_url()?>panel"><button class="btn btn-primary btn-sm">Sign In</button></a> to continue.</p>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="modal-footer" style="padding: 0px !important;">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Creator: Darshan ----------Popup To redirect to BizHub for morethan 2lack subscribers ends-->
<style>
    #ui-id-1{
        top: 72px!important;
        left: 480px!important;
        width: 600px!important;
        background: #fa7c04;
        color: #ffffff;
        padding: 0;
        height: 300px;
        overflow: auto;
        
    position: fixed!important;
    }
    #ui-id-1 .ui-menu-item{
        text-decoration: none;
        list-style-type: none;
        padding:10px 20px;
        border-bottom:2px solid whitesmoke;
    }
</style>