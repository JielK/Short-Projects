<!DOCTYPE html>
<html id="input">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/fa/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <title>JielComics | READ COMICS FOR FREE</title>
</head>
<body>
<div class="add-container container text bg-dark mt-5" style="width: 700px;">
  <h1 class="text-center pt-3">ADD COMIC</h1>
  <hr>
  <form id="form1" method="post" action="add_comic_function.php"  enctype="multipart/form-data" autocomplete="off">
    <br>
    <div class="div-img">
      <label for="inputTag" class="label-img">
        <br>
        <span>Select Cover</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag" class="input-img" type="file"  name="cover_img"/>
        <br/>
        <span id="imageName"></span>
      </label>
    </div>
    <br>
    <label>Create Directory/Folder Name</label><br>
    <input placeholder="e.g doctors-rebirth" type="text" name="folder" class="mb-4" autofocus="" required="">
    <br>
    <label>Title</label><br>
    <input type="text" name="title" class="mb-4" required="">
    <br>
    <label>Author</label><br>
    <input type="text" name="author" class="mb-4" required="">
    <br>
    <label>Artist</label><br>
    <input type="text" name="artist" class="mb-4" required="">
    <br>
    <label>Synopsis</label><br>
    <textarea name="synopsis" rows="9" cols="80" class="mb-4" required=""></textarea>
    <br>
    <label>Type</label><br>
    <input type="text" name="type" class="mb-4" required=""><br>
    <label>Status</label><br>
            
           <label><input type="checkbox" class="radio" name="status" value="Ongoing">Ongoing<span class="checkmark"></span></label>
         
           <label><input type="checkbox" class="radio" name="status" value="Completed">Completed<span class="checkmark"></span></label>
          
           <label><input type="checkbox" class="radio" name="status" value="Hiatus">Hiatus<span class="checkmark"></span></label>

           <label><input type="checkbox" class="radio" name="status" value="Dropped">Dropped<span class="checkmark"></span></label>

           <label class="mb-4"><input type="checkbox" class="radio" name="status" value="Coming Soon">Coming Soon<span class="checkmark"></span></label><br>
    <label>Genre</label><br>
    <input type="text" name="genre" class="mb-4" required=""><br>
    <label>Sub-Genre</label><br>
    <input type="text" name="sub_genre" class="mb-4" required=""><br>
    <label>Sub-Genre</label><br>
    <input type="text" name="sub_genre2" class="mb-4" required=""><br>
    <br>
    <input class="addcontent" id="btn-submit" type="submit" name='submit' value="ADD">
  </form>
  <a href="admin_page.php"><button class="back">BACK</button></a>
  <br><br>
</div>
<br><br><br><br><br><br><br><br><br><br>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script>
        let input = document.getElementById("inputTag");
        let imageName = document.getElementById("imageName")

        input.addEventListener("change", ()=>{
            let inputImage = document.querySelector("input[type=file]").files[0];

            imageName.innerText = inputImage.name;
        })
</script>
<script type="text/javascript">
  // the selector will match all input controls of type :checkbox
  // and attach a click event handler 
  $("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>
</body>
</html>
