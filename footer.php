

<div class="container-fluid bg-dark text-white mt-5">
<br>
<div class="container mt-3">
    <footer>
        <div class="row">
      

            <div class="col-md-12">
                <center>
                   <p>  <img src="img/footer.png"></p> 
                   <p><img src="img/email.png"> creatorjobsplatform@gmail.com
 </p>  
               
                    <p>Privacy Policy</p>
                    <p>Terms & Conditions</p>

                    <p style="font-size:10px">Copyright © 2023 creatorjobs, All Rights Reserved</p>

                </center>
            </div>

        

        </div>
    </footer>
</div>






  <script src="dist/wow.js"></script>
 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-4"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {



      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 2
      });

      
    });
</script>


  <script>


    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };




  </script>


</body>
</html>