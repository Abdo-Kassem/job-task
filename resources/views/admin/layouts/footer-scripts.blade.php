<script src="{{ asset('assets') }}/dashboard/css/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- <script src="{{ asset('js/jquery-ui.min.js') }}"></script> -->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>


<!-- SlimScroll -->
<script src="{{ asset('assets') }}/dashboard/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('assets') }}/dashboard/plugins/fastclick/fastclick.js"></script>
<!-- Select2 -->
<script src="{{ asset('assets') }}/dashboard/plugins/select2/select2.full.min.js"></script>

<!-- include summernote js -->
<!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
<script src="{{ asset('assets/js') }}/summernote.min.js"></script>

<!-- Color Picker -->
<script src="{{ asset('assets') }}/dashboard/dist/js/bootstrap-colorpicker.min.js"></script>

<!-- AdminLTE App -->
<script>
  var AdminLTEOptions = {
    /*https://adminlte.io/themes/AdminLTE/documentation/index.html*/
    sidebarExpandOnHover: true,
    navbarMenuHeight: "200px", //The height of the inner menu
    animationSpeed: 250,
  };
</script>
<script src="{{asset('assets') }}/dashboard/dist/js/app.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets') }}/dashboard/dist/js/demo.js"></script>
<!-- page script -->
<!--Toastr notification -->
<script src="{{asset('assets') }}/toastr/toastr.js"></script>

<!--Toastr notification end-->

<!-- Custom JS -->
<script src="{{asset('assets') }}/dashboard/js/special_char_check.js"></script>
<script src="{{asset('assets') }}/dashboard/js/custom.js"></script>

<!-- Pace Loader -->
<script src="{{asset('assets') }}/dashboard/plugins/pace/pace.min.js"></script>
<script type="text/javascript">
$(document).ajaxStart(function() { Pace.restart(); }); 
</script>  
<!-- Sweet alert -->
<script src="{{asset('assets') }}/dashboard/js/sweetalert.min.js"></script>
<!-- iCheck -->
<script src="{{asset('assets') }}/dashboard/plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-orange',
      /*uncheckedClass: 'bg-white',*/
      radioClass: 'iradio_square-orange',
      increaseArea: '10%' // optional
    });
  });
</script>


<!-- Color Picker  -->
<script>
  //Colorpicker
  $(document).ready(function(){
    $('#color_hex').colorpicker();    
  });
</script>


<!-- Initialize Select2 Elements -->
<script type="text/javascript"> $(".select2").select2(); </script>
<!-- Initialize toggler -->
<script type="text/javascript">
  $(document).ready(function(){
      $('[data-toggle="popover"]').popover();   
  });
</script>

<script type="text/javascript">
    $(document).ready(function () { setTimeout(function() {$( ".alert-dismissable" ).fadeOut( 1000, function() {});}, 10000); });
</script>
<script type="text/javascript">
  function round_off(input=0){
          return input;
      }
</script>
<!-- bootstrap datepicker -->

<!-- ChartJS 1.0.1 -->
<script src="{{asset('assets') }}/dashboard/plugins/chartjs/Chart.min.js"></script>


<!-- Sparkline -->
<script src="{{asset('assets') }}/dashboard/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{asset('assets') }}/dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('assets') }}/dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

 <!-- BAR CHART -->
<script src="{{asset('assets') }}/dashboard/plugins/highcharts/highcharts.js"></script>
<script src="{{asset('assets') }}/dashboard/plugins/highcharts/highcharts-more.js"></script>
<script src="{{asset('assets') }}/dashboard/plugins/highcharts/exporting.js"></script>
<!-- BAR CHART END -->
<!-- PIE CHART -->
<script src="{{asset('assets') }}/dashboard/plugins/highcharts/export-data.js"></script>
<!-- PIE CHART END -->



<!-- validation -->
<script src="{{ asset('assets/js/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/validation/additional-methods.min.js') }}"></script>


<!-- lobilist -->
<!-- custom -->
<!-- <script src="{{ asset('js/custom.js') }}"></script> -->
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>