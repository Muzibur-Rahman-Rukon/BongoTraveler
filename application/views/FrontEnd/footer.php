 </div>
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <?php 
          if ($allPlace) {
            foreach ($allPlace as $p) {
              # code...
           
       ?>
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img class="img-fluid" src="<?php echo base_url('assets/images/'.$p->img) ?>">
         <!--  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
            alt=""> -->
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->
     <?php 
          }
        }
      ?>
   
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Footer -->
</div>
<style type="text/css">
  .boro{
    color:green;
  }
</style>

<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/popper.js') ?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/Isotope/isotope.pkgd.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/scrollTo/jquery.scrollTo.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/parallax-js-master/parallax.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<?php  
          
          
  if($this->session->flashdata('order')){  ?>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#order_modal').modal('show');
    });
</script>
<?php } ?>
</body>
</html>