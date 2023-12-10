<script src="{{asset('storage/inspinia/js/jquery-3.1.1.min.js')}}"></script>
<!-- Mainly scripts -->
<script src="{{asset('storage/inspinia/js/popper.min.js')}}"></script>
<script src="{{asset('storage/inspinia/js/bootstrap.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Flot -->
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.spline.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.pie.js')}}"></script>

<!-- Peity -->
<script src="{{asset('storage/inspinia/js/plugins/peity/jquery.peity.min.js')}}"></script>
<!-- <script src="{{asset('storage/inspinia/js/demo/peity-demo.js')}}"></script> -->

<!-- Custom and plugin javascript -->
<script src="{{asset('storage/inspinia/js/inspinia.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/pace/pace.min.js')}}"></script>

<!-- jQuery UI -->
<!-- <script src="{{asset('storage/inspinia/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script> -->

<!-- GITTER -->
<script src="{{asset('storage/inspinia/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('storage/inspinia/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Sparkline demo data  -->
<script src="{{asset('storage/inspinia/js/demo/sparkline-demo.js')}}"></script>

<!-- ChartJS-->
<script src="{{asset('storage/inspinia/js/plugins/chartJs/Chart.min.js')}}"></script>

<!-- Toastr -->
 <script src="{{asset('storage/inspinia/js/plugins/toastr/toastr.min.js')}}"></script>

<script type="text/javascript">
	
	$( document ).ready(function() {
		$('.dataTables').DataTable({
			pageLength: 25,
			responsive: true,
			dom: '<"html5buttons"B>lTfgitp',
			buttons: [
				{extend: 'csv'},
				{extend: 'excel', title: 'productInfo'},
				{extend: 'pdf', title: 'productInfo'},

				{extend: 'print',
				customize: function (win){
					$(win.document.body).addClass('white-bg');
					$(win.document.body).css('font-size', '10px');

					$(win.document.body).find('table')
					.addClass('compact')
					.css('font-size', 'inherit');
				}
			}
			]

		});
	});
	
</script>
<!-- ========================= JS here ========================= -->
    <script src="{{asset('storage/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('storage/assets/js/glightbox.min.js')}}"></script>
    <script src="{{asset('storage/assets/js/main.js')}}"></script>
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>