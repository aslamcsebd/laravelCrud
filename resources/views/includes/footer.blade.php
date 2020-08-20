<!-- Footer -->
  {{--  <footer class="footer">
      <div class="text-center">
         © <?= date('Y'); ?> Copyright       
            <a href="#" target="_blank">Alternative Route Ltd</a><br>
      </div>
   </footer> --}}
   <!-- Footer -->


<!-- Scripts -->
   <script src="{{ asset('assets/js/app.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
   <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>     -->
   <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>   

   <!-- add singer -->
   <script>
      $('#datepicker').datepicker({
         uiLibrary: 'bootstrap'
      });
   </script>


   <script type="text/javascript">
      window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 5000);
   </script>

   <script type="text/javascript">
      $(".alert").each(function(){
        var txt =  $(this).text().replace(/\s+/g,' ').trim() ;
        $(this).text(txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase());
      });
   </script>

   <!-- {{-- DataTable --}} -->

   <script type="text/javascript">
      $(document).ready( function () {
         $('.table').DataTable();
      } );
   </script> 

  