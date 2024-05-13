<!DOCTYPE html>
<html id="admin">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/fa/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <title>JielComics | READ COMICS FOR FREE</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <img class="logo" src="assets/img/logo.png" width="45px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" >
            <a class="nav-link" href="admin_page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="allcomics.php?admin">Comics</a>
          </li>
          <form action="search.php?admin" method="POST" class="form-search">
            <input class="mr-sm-2 search" type="text" placeholder="Search . ." aria-label="Search" name="search" autocomplete="off">
            <button type="submit" id="gosearch">
              <i class="fa-solid fa-magnifying-glass my-2"></i>
            </button>
          </form>
          <div class="theme-switch-wrapper my-2">
          <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox" />
              <div class="slider round"></div>
          </label>
           </div>
           <a href="logout.php"><button class="logout pt-2"><i class="fa-solid fa-right-from-bracket"></i></button></a>
        </ul>
     </div>
</nav>

  <br><br>

<div class="box1" >

<div class='titletext'>
  <p class="tpick">Today's Picks<span class="popular">Popular This Week</span></p>
 </div>

<div class="owl-carousel owl-theme"  style="width: 700px; height: 300px;">
  <?php include('owlfig.php'); ?>
  <?php while($row = $owlcarousel->fetch_assoc()) { ?>
  <div class="item">
    <div style="
    background: rgba(0, 0, 0, 0.6) url(comics/<?php echo $row['folder']; ?>/<?php echo $row['cover_img']; ?>);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover; 
    filter: blur(8px);
    -webkit-filter: blur(23px);   
    z-index: -1;
    background-blend-mode: darken;
    ">
    </div>
  <div class="carouselcover">
    <img src="comics/<?php echo $row['folder']; ?>/cover.png">
  </div>
  <div class="owldesc">
      <span class="owltitle"><?php echo $row['title']; ?></span>
      <span class="owltype"><?php echo $row['type']; ?></span>
      <span class="owlgenre"><?php echo $row['genre']; echo ',&nbsp' . $row['sub_genre']; echo ',&nbsp' . $row['sub_genre2'] ?></span>
      <span class="owlsum"><span class="owlsumt">SUMMARY<br></span><?php echo $row['synopsis']; ?></span>
      <span class="owlstatus">Status : <?php echo $row['status']; ?></span>
      <span class="owlauthor">Author : <?php echo $row['author']; ?></span>
  </div>
  </div>
  <?php } ?>
</div>
  <?php include('popular.php'); ?>
  <?php while($row = $popular->fetch_assoc()) { ?>
  <div class="popular">
      <img src="comics/<?php echo $row['folder']; ?>/<?php echo $row['cover_img']; ?>" width='200px' height='280px' style='position: absolute; left: 800px; top: 175px;'>
      <span class="populartitle"><?php echo $row['title']; ?></span>
      <span class="populartype"><?php echo $row['type']; ?></span>
      <span class="popularsyn">SUMMARY <br> <?php echo $row['synopsis'] ?></span>
      <span class="populargenre"><?php echo $row['genre']; echo ',&nbsp' . $row['sub_genre']; echo ',&nbsp' . $row['sub_genre2'] ?></span>
    </div>
  <?php } ?>
<div class="owl-dots">
  <button role="button" class="owl-dot active" ><span></span></button>
  <button role="button" class="owl-dot"><span></span></button>
  <button role="button" class="owl-dot"><span></span></button>
  <button role="button" class="owl-dot"><span></span></button>
</div>
<div class="line1"></div>

</div>

<div class="latest" id="latest">
  <span class="latest-text mx-4">Latest Updates</span>
  <a href="add_comic.php" ><button class="add"><i class="fa-solid fa-plus"></i> &nbspADD</button></a>
  <hr class="chunkyhr">
  <div class="mt-2 row mx-auto container-fluid">
    <?php include('home_comics_config.php'); ?>
    <?php while($row = $homecomics->fetch_assoc()) { ?>
    <div onclick="window.location.href='<?php echo "comic.php?comic_id=". $row['comic_id'] . '&admin';?>';" class="col-lg-3 col-md-4 col-sm-12 pt-2">
      <div>
        <img class="comic-cover img-fluid mb-5" src="comics/<?php echo $row['folder']; ?>/cover.png">
        <a href="delete_comic.php?comic_id=<?php echo $row['comic_id']; ?>" class='confirmation' style="float: right;"><button class="delete_comic"><i class="fa-solid fa-trash-can text"></i></button></a>
        <span class="comictitle">&nbsp<?php echo $row['title']; ?></span>
        <?php include ('chapters.php'); ?>
        <?php while($rowc = $chapters->fetch_assoc()) { ?>
          <a class="chapter mx-2" href="<?php echo 'chapter.php?chapter_id=' . $rowc['chapter_id'] . '&admin'; 
          if(isset($_GET['user_id'])){
              echo '&user_id=' . $user;
          } ?>"><i class="fas fa-circle text-primary"></i>&nbsp&nbspChapter <?php echo $rowc['chapter_number']; ?></a><br>
        <?php } ?>
        <a href="edit_comic.php?comic_id=<?php echo $row['comic_id']; ?>" ><button class="edit_comic float-start"><i class="fa-solid fa-pen-to-square"></i>&nbspEDIT</button></a>
        <a href="add_chapter.php?comic=<?php echo $row['folder']; ?>"><button class="add_chapter float-start"><i class="fa-solid fa-plus"></i>&nbspADD CHAPTER</button></a>

      </div>
    </div>
    <?php } ?>
</div>
</div>



<br><br><br><br><br><br><br>
<div class="footer">
  <center>
    <div class="policy mb-3 pt-2 pb-1">
      <a href="copyright/privacy_policy.php">Privacy Policy</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="copyright/digital_millenium_copyright_act.php">Digital Millenium Copyright Act</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="copyright/terms_of_service.php">Terms Of Service</a>
    </div>
    <div class="pb-3">
      <img src="assets/img/logo.png" width="45px">
      <br>
      <span class="business ">Any business-related queries or advertising, please contact us at <a href="mailto:business.jielcomics@gmail.com">business.jielcomics@gmail.com</a></span>
    </div>
  </center>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
</body>
<script type="text/javascript">
  const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

  function switchTheme(e) {
      if (e.target.checked) {
          document.documentElement.setAttribute('data-theme', 'light');
      }
      else {
          document.documentElement.setAttribute('data-theme', 'dark');
      }    
  }

  toggleSwitch.addEventListener('change', switchTheme, false);

  function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light'); //add this
    }
    else {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); //add this
    }    
}
  const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

  if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'light') {
        toggleSwitch.checked = true;
    }
}
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  autoplayTimeout: 5000,
  dots: true,
  dotsData:true,
  dotsContainer: '.owl-dots',
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 1
    }
  }
})
jQuery(document).ready(function($) {
  $(".owl-carousel").each(function(index, el) {
    var containerHeight = $(el).height();
    $(el).find("img").each(function(index, img) {
      var w = $(img).prop('naturalWidth');
      var h = $(img).prop('naturalHeight');
      $(img).css({
        'width': Math.round(containerHeight * w / h) + 'px',
        'height': containerHeight + 'px'
      });
    }),
    $(el).owlCarousel({
      autoWidth: true
    });
  });
});
   var elems = document.getElementsByClassName('confirmation');
   var confirmIt = function (e) {
       if (!confirm('This Comic will be REMOVED PERMANENTLY, ARE YOU SURE?')) e.preventDefault();
   };
   for (var i = 0, l = elems.length; i < l; i++) {
       elems[i].addEventListener('click', confirmIt, false);
   }
</script>
</html>
