<?php 
if(isset($_GET['user_id'])){
$user = $_GET['user_id'];
}
?>
<!DOCTYPE html>
<html id="<?php 
  if(isset($_GET['user_id'])){ echo "user";
  }elseif(isset($_GET['admin'])){ echo "admin";
  }
  else{
  }  ?>"
>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/fa/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <title>JielComics | READ COMICS FOR FREE</title>
</head>
<body>
<?php
  include('config.php'); 
  if(isset($_GET['comic_id'])){
    $comic_id = $_GET['comic_id'];
    $stmt = $conn->prepare("SELECT * FROM comics WHERE comic_id = ?");
    $stmt->bind_param("i",$comic_id);
    $stmt->execute();
    $comic = $stmt->get_result();

  }else{
    header('location: index.php');
  }
?>
<nav class="navbar navbar-expand-lg">
    <img class="logo" src="assets/img/logo.png" width="45px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" >
            <a class="nav-link" href="<?php 
            if(isset($_GET['user_id'])){ echo 'user_page.php?user_id=' . $user; 
            }elseif(isset($_GET['admin'])){
              echo "admin_page.php";
            }else{
              echo "index.php"; 
            }?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="allcomics.php?<?php if(isset($_GET['user_id'])){ 
              echo 'user_id=' . $user;
            }elseif(isset($_GET['admin'])){ 
              echo 'admin';
            } ?>">Comics</a>
          </li>
          <?php 
            if(isset($_GET['user_id'])){ include 'assets/php/bookmark.php';
            }?>
         <?php  
          if(isset($_GET['admin'])){ echo '<form action="search.php?admin" method="POST" class="form-search">
            <input class="mr-sm-2 search" type="text" placeholder="Search . ." aria-label="Search" name="search" autocomplete="off">
            <button type="submit" id="gosearch">
              <i class="fa-solid fa-magnifying-glass my-2"></i>
            </button>
          </form>';
          }elseif(isset($_GET['user_id'])){ include 'assets/php/searchuser.php';
          }else{
            echo '<form action="search.php" method="POST" class="form-search">
            <input class="mr-sm-2 search" type="text" placeholder="Search . ." aria-label="Search" name="search" autocomplete="off">
            <button type="submit" id="gosearch">
              <i class="fa-solid fa-magnifying-glass my-2"></i>
            </button>
          </form>';
          }
            
          ?>
          <div class="theme-switch-wrapper my-2">
          <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox" />
              <div class="slider round"></div>
          </label>
           </div>
           <?php 
            if(isset($_GET['user_id'])){ echo '<a href="logout.php"><button class="logout pt-2"><i class="fa-solid fa-right-from-bracket"></i></button></a>';
            }elseif(isset($_GET['admin'])){ echo '<a href="logout.php"><button class="logout pt-2"><i class="fa-solid fa-right-from-bracket"></i></button></a>';
            }else{
              echo '<li class="nav-item">
            <a class="nav-link" href="register.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>';
            }?>
           
        </ul>
     </div>
</nav>
<br>
<?php while($row = $comic->fetch_assoc()){ ?>
  <div class="comic-container container rounded">
    <div class="comic-content ms-2 pt-4 container">
      <img  class="img-fluid mb-5 float-start" src="comics/<?php echo $row['folder'] ?>/cover.png" style='width: 250px; height: 350px;'>
      <?php if(isset($_GET['status'])){
          echo '<button class="bookmarked" type="submit">Bookmarked <i class="far fa-bookmark"></i></button>';
        }elseif(isset($_GET['user_id'])){
          include 'assets/php/alsobookmark.php';
        }else{
          include 'assets/php/guestbookmark.php';
        }
      ?>
        <div class="text">
          <span class="comic-title"><?php echo $row['title'] ?></span><br>
          <p class="littledark-text pt-4">Synopsis Of <?php echo $row['title']; ?></p>
          <p class="me-5 mt-2 darker-text"><?php echo $row['synopsis'] ?></p>
          <br>
          <table>
            <tr class="littledark-text">
              <td width="500px">Author</th>
              <td>Artist</td>
            </tr>
            <tr class="darker-text">
              <td><?php echo $row['author'] ?></td>
              <td><?php echo $row['artist'] ?></td>
            </tr>
          </table>
          <br><br>
          <table>
            <tr class="littledark-text">
              <td width="500px">Status</th>
              <td>Genres</td>
            </tr>
            <tr class="darker-text">
              <td><?php echo $row['status'] ?></td>
              <td><?php echo $row['genre']; echo ',&nbsp' . $row['sub_genre']; echo ',&nbsp' . $row['sub_genre2'] ?></td>
            </tr>
          </table>
          <br>
        </div>
    </div>
    <br><br>
    <hr>
    <div class="chapters pb-4">
      <h4>Chapters</h4>
        <div class="scroller" style=" ">
          <?php include ('chapterscomic.php'); ?>
          <?php while($rowc = $chapters->fetch_assoc()) { ?>
          <div class="chapter mb-2" onclick="window.location.href='<?php echo 'chapter.php?chapter_id=' . $rowc['chapter_id'];  
          if(isset($_GET['user_id'])){
            echo '&user_id=' . $user;
          } ?>';">
            <span class="ps-3 mt-2" style="line-height: 60px;">Chapter <?php echo $rowc['chapter_number']; ?></span>
          </div>
          <?php } ?>
        </div>
    </div>
  </div>


<?php } ?>
<br><br><br><br><br><br>
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
</script>
</html>
