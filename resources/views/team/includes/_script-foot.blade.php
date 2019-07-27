<!-- jquery -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
<script src="{{ asset('assets/argon/vendor/jquery/dist/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/argon/vendor/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
<!-- datatable -->
<script src="{{ asset('/assets/argon/vendor/datatable.js/datatables.min.js') }}" defer></script>
<script>
    $(document).ready(function() {
        $('#list_anggota').DataTable();
    });
</script>
<!-- bootstrap -->
<script src="{{ asset('assets/argon/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- js files -->
<script src="{{ asset('assets/argon/js/argon-dashboard.min.js') }}"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-dashboard-free"
        });
</script>

