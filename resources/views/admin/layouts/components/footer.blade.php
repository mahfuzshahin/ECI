<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="ChangePassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title pull-left">Change your password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
            <form action="{{ route('admin.password.change') }}" method="POST">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="application_id" id="application_id" value="">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="ad_bank_name">Old Password</label>
                            <input type="password" name="old_password" id="old_password" class="form-control" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="ad_branch_name">New Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control" required>
                        </div>


                    </div>                   
                    
                </div>                
                <div class="modal-footer">
                    <div class="form-group pull-right">
                        <input type="submit" value="Update Password" class="btn btn-primary">
                    </div>
                </div>
            </form>
      </div>
      
    </div>
  </div>
</div>
 
 
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 02.0.0
    </div>
    <strong>Copyright &copy; <?=date('Y')?> Powerd By<a href="https://eci.org.bd/" target="_blank"> ECI</a></strong> All rights
    {{-- <strong>Copyright &copy;  Powerd By<a href="#" target="_blank">ECI</a>.</strong> All rights --}}
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('admin_assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin_assets/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin_assets/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('admin_assets/js/fastclick.js')}}"></script>
<!-- w3zones App -->
<!-- DataTables -->
<script src="{{ asset('admin_assets/ckeditor/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace( 'post_description' );
</script>
<script>
    CKEDITOR.replace( 'project_description' );
</script>
<script src="{{ asset('admin_assets/js/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/datatables/buttons.flash.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/datatables/jszip.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/datatables/pdfmake.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/datatables/vfs_fonts.js')}}"></script>
<script src="{{ asset('admin_assets/js/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/w3zones.min.js')}}"></script>
<!-- w3zones for demo purposes -->
<script src="{{ asset('admin_assets/js/select2.full.min.js')}}"></script>
<script src="{{ asset('admin_assets/js/demo.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example2, .example2').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
                // 'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        } );

        //Initialize Select2 Elements
        $('.select2').select2({ width: '100%' }); 

    } );

  function showImage(postimage,target) 
  {
    var fr = new FileReader();
    fr.onload = function(e) { target.src = this.result; };
    postimage.addEventListener("change",function() {
      fr.readAsDataURL(uploadsrc.files[0]);
    });
  }
  var uploadsrc = document.getElementById("postimage");
  var showimageurl = document.getElementById("showimageurl");
  showImage(uploadsrc,showimageurl);


    function ChangePassword() {
        $('#ChangePassword').modal('show');
        return false;
    }

</script>

@stack('scripts')

@if(session()->has('FlsMsg'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var msg = "{{ session('FlsMsg') }}";
        swal("Good job!", `${msg}` , "success");
    </script>
@endif

@if(session()->has('FlsMsgEr'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var msg = "{{ session('FlsMsgEr') }}";
        swal("Sorry!", `${msg}` , "error");
    </script>
@endif


</body>
</html>