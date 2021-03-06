@extends('main') @section('content') @include('partials._saide')


<div class="col-sm-9">
  <div class="col-xs-12">
    <div class="post-container">
      <div class="post-content">
        <form action="#" method="post" style="widht:100%;margin-bottom:5px">

          <div class="row">
            <div class="col-xs-12">
              <label id="img" style="cursor: pointer;margin:40px 35%;" class="text-center">
                <div id="image_preview"><img id="previewing" src="img/upload.png" /></div>
                <input type="file" id="file" style="display: none;" name="images">
                <h3>Brows...</h3>
              </label>
            </div>
          </div>
          <button id="upload" class="btn btn-primary pull-right" style="display: none;"><i class="fa fa-upload"></i> upload</button>
          <h2 id="message"></h2>
        </form>
      </div>
    </div>
  </div>
</div>




@endsection @section('script')

<script type="text/javascript">
  $(document).ready(function(e) {

    $(function() {
      $("#file").change(function() {
        $("#message").empty(); // To remove the previous error message
        var file = this.files[0];
        var imagefile = file.type;
        var match = ["image/jpeg", "image/png", "image/jpg"];
        if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
          $('#previewing').attr('src', 'img/upload.png');
          $("#message").html("<p id='error'>Please Select A valid Image File</p><h4>Note</h4><span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
          return false;
        } else {
          var reader = new FileReader();
          reader.onload = imageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function imageIsLoaded(e) {
      $("#file").css("color", "green");
      $('#image_preview').css("display", "block");
      $('#previewing').attr('src', e.target.result);

      $('#upload').attr('style', 'display:block');
      $('#img').attr('style', '');
      $('#previewing').attr('width', '100%');
      $('#previewing').attr('height', 'auto');
    };
  });
</script>
@endsection