<p>Click on the "Choose File" button to upload a file:</p>

<form method="post" action="{{route('upload-image')}}"  enctype="multipart/form-data">
    @csrf

  <input type="file" id="myFile" name="myfile">
  <input type="submit">
  
</form>
