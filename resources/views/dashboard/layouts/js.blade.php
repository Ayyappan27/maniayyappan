<script type="text/javascript">
    document.onreadystatechange = function() { 
    if (document.readyState !== "complete") { 
        document.querySelector("body").style.visibility = "hidden"; 
        document.querySelector(".preloadersection").style.visibility = "visible"; 
    } else { 
        document.querySelector(".preloadersection").style.display = "none"; 
        document.querySelector("body").style.visibility = "visible"; 
    } 
};
</script>
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('/dashboard/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/chart.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/chartist.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/morris.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset('/dashboard/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<script src="{{ asset('/dashboard/app-assets/js/scripts/pages/dashboard-crypto.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/js/scripts/forms/switch.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/js/scripts/forms/custom-file-input.js')}}"></script>
<!-- END: Page JS-->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote();
    });
</script>