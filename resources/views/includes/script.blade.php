<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}" type="text/javascript"></script>


<script src="{{ asset('js/vendor/jquery-1.11.3.min.js')}}"></script>

<script src="{{ asset('js/bootstrap.min.js')}}"></script>

<script src="{{ asset('js/wow.min.js')}}"></script>

<script src="{{ asset('js/jquery-price-slider.js')}}"></script>


<script src="{{ asset('js/jquery.meanmenu.js')}}"></script>

<script src="{{ asset('js/owl.carousel.min.js')}}"></script>


<script src="{{ asset('js/jquery.sticky.js')}}"></script>

<script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>

<script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js')}}"></script>

<script src="{{ asset('js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{ asset('js/metisMenu/metisMenu-active.js')}}"></script>

<script src="{{ asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('js/sparkline/jquery.charts-sparkline.js')}}"></script>

<script src="{{ asset('js/calendar/moment.min.js')}}"></script>
<script src="{{ asset('js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{ asset('js/calendar/fullcalendar-active.js')}}"></script>


<script src="{{ asset('js/tab.js')}}"></script>
<script src="{{ asset('js/plugins.js')}}"></script>

<script src="{{ asset('js/main.js')}}"></script>
<script>

       $(document).ready(function(){
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });

           $(".saveNote").on('change', function postinput(){

                matchvalue = $(this).val(); // this.value

               console.log(matchvalue);
               console.log("matiere",$(this).attr("dataMatiereId"));

               console.log("matricule",$("#matricule").val());
               console.log("compo",$(this).attr("dataCompo"));
              $.ajax({
                  url:"{{ route('saveNote.post') }}",
                   data: {matiere:$(this).attr("dataMatiereId"), note: matchvalue,inscription:$("#matricule").val(),filiere:$("#filiere").val(),niveau:$("#niveau").val(),compo:$(this).attr("dataCompo") },
                   type: 'post'
               }).done(function(responseData) {
                   console.log('Done: ', responseData);
               }).fail(function(error) {
                   console.log('Failed',error);
               });
           });
       });
</script>

