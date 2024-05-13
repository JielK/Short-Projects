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
  <h1 class="text-center pt-3">ADD CHAPTER</h1>
  <hr>
  <form id="form1" method="post" action="add_chapter_function.php"  enctype="multipart/form-data" autocomplete="off">
    <br>
    <div class="div-img">
      <label for="inputTag" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag" class="input-img" type="file"  name="chapter_img1"/>
        <br/>
        <span id="imageName"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag2" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag2" class="input-img" type="file"  name="chapter_img2"/>
        <br/>
        <span id="imageName2"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag3" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag3" class="input-img" type="file"  name="chapter_img3"/>
        <br/>
        <span id="imageName3"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag4" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag4" class="input-img" type="file"  name="chapter_img4"/>
        <br/>
        <span id="imageName4"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag5" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag5" class="input-img" type="file"  name="chapter_img5"/>
        <br/>
        <span id="imageName5"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag6" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag6" class="input-img" type="file"  name="chapter_img6"/>
        <br/>
        <span id="imageName6"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag7" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag7" class="input-img" type="file"  name="chapter_img7"/>
        <br/>
        <span id="imageName7"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag8" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag8" class="input-img" type="file"  name="chapter_img8"/>
        <br/>
        <span id="imageName8"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag9" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag9" class="input-img" type="file"  name="chapter_img9"/>
        <br/>
        <span id="imageName9"></span>
      </label>
    </div><br>
    <div class="div-img">
      <label for="inputTag10" class="label-img">
        <br>
        <span>Insert Chapter Image</span> <br/>
        <i class="fa fa-2x fas fa-image mt-5"></i><br>
        <input id="inputTag10" class="input-img" type="file"  name="chapter_img10"/>
        <br/>
        <span id="imageName10"></span>
      </label>
    </div><br>
    <label>Chapter Number</label><br>
    <input type="number" name="chapter_number" class="mb-4" required="" value="">
    <input type="hidden" name="folder" class="mb-4" required="" value="<?php echo $_GET['comic']; ?>">    <br>
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
            let inputImage = document.querySelector("#inputTag").files[0];

            imageName.innerText = inputImage.name;
        })

        let input2 = document.getElementById("inputTag2");
        let imageName2 = document.getElementById("imageName2")

        input2.addEventListener("change", ()=>{
            let inputImage2 = document.querySelector("#inputTag2").files[0];

            imageName2.innerText = inputImage2.name;
        })

        let input3 = document.getElementById("inputTag3");
        let imageName3 = document.getElementById("imageName3")

        input3.addEventListener("change", ()=>{
            let inputImage3 = document.querySelector("#inputTag3").files[0];

            imageName3.innerText = inputImage3.name;
        })

        let input4 = document.getElementById("inputTag4");
        let imageName4 = document.getElementById("imageName4")

        input4.addEventListener("change", ()=>{
            let inputImage4 = document.querySelector("#inputTag4").files[0];

            imageName4.innerText = inputImage4.name;
        })

        let input5 = document.getElementById("inputTag5");
        let imageName5 = document.getElementById("imageName5")

        input5.addEventListener("change", ()=>{
            let inputImage5 = document.querySelector("#inputTag5").files[0];

            imageName5.innerText = inputImage5.name;
        })

        let input6 = document.getElementById("inputTag6");
        let imageName6 = document.getElementById("imageName6")

        input6.addEventListener("change", ()=>{
            let inputImage6 = document.querySelector("#inputTag6").files[0];

            imageName6.innerText = inputImage6.name;
        })

        let input7 = document.getElementById("inputTag7");
        let imageName7 = document.getElementById("imageName7")

        input7.addEventListener("change", ()=>{
            let inputImage7 = document.querySelector("#inputTag7").files[0];

            imageName7.innerText = inputImage7.name;
        })

        let input8 = document.getElementById("inputTag8");
        let imageName8 = document.getElementById("imageName8")

        input8.addEventListener("change", ()=>{
            let inputImage8 = document.querySelector("#inputTag8").files[0];

            imageName8.innerText = inputImage8.name;
        })

        let input9 = document.getElementById("inputTag9");
        let imageName9 = document.getElementById("imageName9")

        input9.addEventListener("change", ()=>{
            let inputImage9 = document.querySelector("#inputTag9").files[0];

            imageName9.innerText = inputImage9.name;
        })

        let input10 = document.getElementById("inputTag10");
        let imageName10 = document.getElementById("imageName10")

        input10.addEventListener("change", ()=>{
            let inputImage10= document.querySelector("#inputTag10").files[0];

            imageName10.innerText = inputImage10.name;
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
