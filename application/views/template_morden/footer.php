
</div>
<!-- Wrapper END -->
<!-- Footer -->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="<?= base_url('terms-of-service') ?>">Terms of Use</a></li>
                    <li class="list-inline-item"><a href="<?= base_url('damage-policy') ?>">Damage Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright <?= date('Y') ?> <a href="<?= base_url() ?>"><?= $settings->title; ?></a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url(); ?>assets/front-theme/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/front-theme/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/front-theme/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/front-theme/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/core.js"></script>
<!-- am charts JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/worldLow.js"></script>
<!-- Raphael-min JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/raphael-min.js"></script>
<!-- Morris JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/morris.js"></script>
<!-- Morris min JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/morris.min.js"></script>
<!-- Flatpicker Js -->
<script src="<?= base_url(); ?>assets/front-theme/js/flatpickr.js"></script>
<!-- Style Customizer -->
<script src="<?= base_url(); ?>assets/front-theme/js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="<?= base_url(); ?>assets/front-theme/js/custom.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript">
    // $('select').select2();
    $('#authors').select2({
        minimumInputLength: 2,
        placeholder: "Select Author(s)",
        ajax: {
            url: '<?= base_url(); ?>home/searchAuthors',
            data: function (params) {
                var query = {
                    search: params.term,
                }
                // Query parameters will be ?search=[term]&page=[page]
                return query;
            }
        }
    });

    $('#categories').select2({
        minimumInputLength: 2,
        placeholder: "Select Category(s)",
        ajax: {
            url: '<?= base_url(); ?>home/searchCategories',
            data: function (params) {
                var query = {
                    search: params.term,
                }
                // Query parameters will be ?search=[term]&page=[page]
                return query;
            }
        }
    });

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/60f921c3649e0a0a5ccd64c5/1fb6inpip';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- <script src="">
    $("#ajax_search").keyup(function () {
        $.ajax({
      type: "POST",
      url: "<?=base_url()?>index.php/Home/userList",
      data: ({string: $("#ajax_search").val()}),
      success: function(data) {
        $("#show_search_results").show();  
       $("#show_search_results").html(data); 
       $('#show_search_results > li > a').click(function(){
        var search_resultList = $(this).text();
        $("#ajax_search").val(search_resultList); 
        $("#show_search_results").hide();         
      });
      }      
    }); 
   });
</script> -->
<!-- // sunil added code -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type='text/javascript'>
  $(document).ready(function(){
  
     $( "#ajax_search" ).autocomplete({
      source: function( request, response ) {
       // Fetch data
       $.ajax({
        url: "<?=base_url()?>index.php/Home/searchList",
        type: 'post',
        dataType: "json",
        data: {
         search: request.term
        },
        success: function( data ) {
         response( data );
        
        }
       });
      },
      select: function (event, ui) {
       // Set selection
       $('#ajax_search').val(ui.item.label); // display the selected text
       
       return false;
    //    location.reload();
      },
      focus: function(event, ui){
         $( "#ajax_search" ).val( ui.item.label );
         return false;
       },
      
     });
  });


  </script>
  
</body>
</html>