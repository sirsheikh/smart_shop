<script>
    $(document).ready(function (){
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
      }
    });
</script>

<div class="col-md-3">
    @if (Session::get('success'))
    <script>
        var message="{{Session::get('success')}}";
        $(document).ready(function (){
            toastr["success"](message,"Success");

        });
    </script>
    <?php 
        Session::forget('success')
     ?>    
    @endif
    @if (Session::get('error'))
    <script>
        var message="{{Session::get('error')}}";
        $(document).ready(function (){
            toastr["error"](message,"Error");

        });
    </script>
    <?php 
        Session::forget('error')
     ?>  
    @endif
     @if (Session::get('info'))
    <script>
        var message="{{Session::get('info')}}";
        $(document).ready(function (){
            toastr["info"](message,"Information");

        });
    </script>
    <?php 
        Session::forget('info')
     ?>  
    @endif
    @if (Session::get('warning'))
    <script>
        var message="{{Session::get('warning')}}";
        $(document).ready(function (){
            toastr["warning"](message,"Warning");

        });
    </script> 
    <?php 
        Session::forget('warning')
     ?> 
    @endif
</div>