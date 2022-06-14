@include('front-end.layout.style')

 @yield('content')

    @include('front-end.layout.footer')


    <div class="scroll-btn">

    </div>




    @include('front-end.layout.script')

   {{-- @yield('content') --}}
  <script>
   new WOW().init();
   	 particlesJS.load('particles-js', 'particles.json', function(){
         console.log('particles.json loaded...');
       });
   	 $.fn.extend({
       animateCss: function (animationName, callback) {
           var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
           this.addClass('animated ' + animationName).one(animationEnd, function() {
               $(this).removeClass('animated ' + animationName);
               if (callback) {
                 callback();
               }
           });
           return this;
       }
   });
    
</script>

</body>

</html>