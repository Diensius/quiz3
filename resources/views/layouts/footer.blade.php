<!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
            </div>
        </div>
    </footer>
<!-- End of Footer -->

<!-- Bootstrap core JavaScript-->
<script src="{{asset('/sbadmin2/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/sbadmin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/sbadmin2/js/sb-admin-2.min.js')}}"></script>

<!-- script tambahan sweet alert, bukan dari bawaan sb-admin-2 -->
<script src="{{asset('/sbadmin2/js/swal.min.js')}}"></script>
@stack('scripts')