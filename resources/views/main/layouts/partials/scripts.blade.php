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
        // Tender Table
        var tenderTable = $('#tender-table').DataTable();

        // Piagam Table
        var piagamTable = $('#piagam-table').DataTable();

        // Pengumuman Table
        var pengumumanTable = $('#pengumuman-table').DataTable();

        // SebutHarga Table
        var sebutHargaTable = $('#sebutHarga-table').DataTable();

        // Perolehan Table
        var perolehanTable = $('#perolehan-table').DataTable();

        // BeritaTerkini Table
        var beritaTerkiniTable = $('#beritaTerkini-table').DataTable();

        // Piagam Filter by text
        $('#piagam-filter-text').keyup(function() {
            piagamTable.search($(this).val()).draw();
        })

        // Piagam Filter by year
        $('#piagam-filter-year').change(function() {
            piagamTable.columns([2]).search($(this).val()).draw();
        })

        // Pengumuman Filter by text
        $('#pengumuman-filter-text').keyup(function() {
            pengumumanTable.search($(this).val()).draw();
        })

        // Pengumuman Filter by year
        $('#pengumuman-filter-year').change(function() {
            pengumumanTable.columns([2]).search($(this).val()).draw();
        })

        // Tender Filter by text
        $('#tender-filter-text').keyup(function() {
            tenderTable.search($(this).val()).draw();
        })

        // Tender Filter by year
        $('#tender-filter-year').change(function() {
            tenderTable.columns([2]).search($(this).val()).draw();
        })

        // Sebut-harga Filter by text
        $('#sebut-harga-filter-text').keyup(function() {
            sebutHargaTable.search($(this).val()).draw();
        })

        // SebutHarga Filter by year
        $('#sebut-harga-filter-year').change(function() {
            sebutHargaTable.columns([2]).search($(this).val()).draw();
        })

        // Perolehan-berjaya Filter by text
        $('#perolehan-berjaya-filter-text').keyup(function() {
            perolehanTable.search($(this).val()).draw();
        })

        // Perolehan-berjaya Filter by year
        $('#perolehan-berjaya-filter-year').change(function() {
            perolehanTable.columns([2]).search($(this).val()).draw();
        })

        // BeritaTerkini Filter by text
        $('#beritaTerkini-filter-text').keyup(function() {
            beritaTerkiniTable.search($(this).val()).draw();
        })

        // BeritaTerkini Filter by year
        $('#beritaTerkini-filter-year').change(function() {
            beritaTerkiniTable.columns([2]).search($(this).val()).draw();
        })

        $("#contact-us").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".jupem").not("#" + optionValue).hide();
                    $("#" + optionValue).show();
                } else {
                    $(".jupem").hide();
                }
            });
        }).change();
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
<script>
    function changeWhite() {
        document.body.style.color = "gray";
        return false;
    }

    function changeGreen() {
        document.body.style.color = "green";
        return false;
    }

    function changeRed() {
        document.body.style.color = "red";
        return false;
    }

    function changeBlue() {
        document.body.style.color = "blue";
        return false;
    }

    function changeYellow() {
        document.body.style.color = "yellow";
        return false;
    }

    function change80() {
        document.body.style.fontSize = "80%";
        return false;
    }

    function change100() {
        document.body.style.fontSize = "100%";
        return false;
    }

    function change150() {
        document.body.style.fontSize = "150%";
        return false;
    }

    $(document).ready(function() {
        $("#tukarMerah").click(function() {
            $("p:first").addClass("intro");
        });
    });
</script>
