  <footer>
  <div class="ContainerGeneral">
        <div class="centradoFooterLink">
            <a href="index.php" class="footerLink">Home</a>
           <!-- <a href="nosotros.php" class="footerLink">Nosotros</a>-->
            <a href="productos.php" class="footerLink">Productos</a>
            <a href="contacto.php" class="footerLink">Contacto</a>
        </div>
      <div class="seccionFooter">
        <fot>&copy Oncetex Todos los derechos reservados</a></fot>
      </div>
      <div class="seccionFooter">
        <fot>Desarrollado por <a href="http://www.twindevelop.com" target="_blank">TwinDevelop</a></fot>
      </div>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/sweetalert2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  	loop:true,
  	autoplay:false,
    margin:10,
    autoHeight:true,
    nav:false,
    dots:false,
    items:1
  });
var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})

});
</script>
</body>
</html>