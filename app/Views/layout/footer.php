      <!-- FOOTER -->
      <div class="text-center center-block">
               <p class="txt-railway">- About Us -</p>
               <a href="#"><img src="/img/instagram-landing-page.png"></a>
               <a href="#"><img src="/img/facebook-landing-page.png"></a>
               <a href="#"><img src="/img/twitter-landing-page.png"></a>
               <p><br>Made with ❤️ by Badut 2021</p>
            </div>
            <hr />
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
      </script>
    </body>
</html>