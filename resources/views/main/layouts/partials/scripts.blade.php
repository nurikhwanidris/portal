<!-- Vendor -->
<script src="/main/vendor/jquery/jquery.min.js"></script>
<script src="/main/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="/main/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/main/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="/main/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/main/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="/main/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/main/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="/main/vendor/lazysizes/lazysizes.min.js"></script>
<script src="/main/vendor/isotope/jquery.isotope.min.js"></script>
<script src="/main/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/main/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/main/vendor/vide/jquery.vide.min.js"></script>
<script src="/main/vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/main/js/theme.js"></script>

<!-- Circle Flip Slideshow Script -->
<script src="/main/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<!-- Current Page Views -->
<script src="/main/js/views/view.home.js"></script>

<!-- Theme Custom -->
<script src="/main/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/main/js/theme.init.js"></script>

<!-- Script Cak Cak Menu -->
<script src="/main/js/jupem-js-sara.js"></script>

<!-- Baboon -->
<!-- Admin Extension Specific Page Vendor -->
<script src="/main/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script>
    // Bootstrap Datepicker No Conflict
    if (typeof($.fn.datepicker) != 'undefined') {
        $.fn.bootstrapDP = $.fn.datepicker.noConflict();
    }
</script>
{{-- <script src="/main/vendor/jquery-ui/jquery-ui.js"></script> --}}
{{-- <script src="/main/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script> --}}

<!-- Script Pagination -->
{{-- <script src="/main/js/jquery-bootpag.js"></script> --}}

<!-- Datatable -->
<script src="/main/js/jquery.datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Datatable
        $('table').DataTable({
            "pagingType": "full_numbers"
        });


        $('#dynamic_select').on('change', function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {
            element.addEventListener('click', function(e) {
                let nextEl = element.nextElementSibling;
                let parentEl = element.parentElement;

                if (nextEl) {
                    e.preventDefault();
                    let mycollapse = new bootstrap.Collapse(nextEl);

                    if (nextEl.classList.contains('show')) {
                        mycollapse.hide();
                    } else {
                        mycollapse.show();
                        // find other submenus with class=show
                        var opened_submenu = parentEl.parentElement.querySelector(
                            '.submenu.show');
                        // if it exists, then close all of them
                        if (opened_submenu) {
                            new bootstrap.Collapse(opened_submenu);
                        }
                    }
                }
            }); // addEventListener
        }) // forEach
    });
</script>
