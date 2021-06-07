<form method="post" action="{{ route('user.update', ['user' => $user->id]) }}" enctype="multipart/form-data">
  @csrf
  @method('PATCH')

  <label for="image">プロフィール画像</label>

  <label for="image" class="btn">
    <img src="{{ asset('storage/profiles/'.$user->image) }}" id="img">
    <input id="image" type="file"  name="image" onchange="previewImage(this);">
  </label>

  <button type="submit" class="btn btn-primary">
    変更
  </button>
</form>

<script>
  function previewImage(obj)
  {
    var fileReader = new FileReader();
    fileReader.onload = (function() {
      document.getElementById('img').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
  }
</script>