<!DOCTYPE html>

<html lang="hu">
<head>
  <title>Rövidpályás gyorskorcsolya a téli olimpiai játékokon</title>
  <link rel="stylesheet" href="olimpia2018.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<form action="index.php" method="post">
        <label for="">Éremszerzők listája: </label>
        <input type="text" name="country" placeholder="country">
        <input type="submit" name="submit">
    </form>


<div>
    <div>
<h1>Téli olimpiai játékok</h1>
    </div>
    <div>
    <div>
        <h3>Kinai téli olompiai játékok</h3>
        <p><img src=""/>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac sapien volutpat, sagittis ligula a, vestibulum nulla. Vivamus leo quam, commodo ut ex in, ornare imperdiet turpis. Vivamus aliquam leo vitae turpis tempus, quis imperdiet lectus volutpat. Nam quis turpis eu eros ullamcorper laoreet non non nunc. Nam id turpis quis risus sodales ullamcorper. Nullam ipsum mauris, gravida vel ornare ut, efficitur at lacus. Mauris velit ante, laoreet vel magna ut, auctor finibus libero. Duis vel diam metus. Nam a velit a nunc dictum pulvinar id vel nunc. Etiam tristique eu ligula aliquam dapibus. Cras consequat ligula sit amet tortor sodales tristique. Aliquam dignissim tortor eu ante laoreet vulputate. Quisque maximus nulla id nulla hendrerit ultricies. Duis eu nisl ullamcorper, egestas quam ac, facilisis augue. 
        </p>
        <div>
            <div>
                <h3>Helyszinek:</h3>
                <table>
                    <thead>
                    <tr>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>


<div>
  <div>
      <div>
          <h3>Rövidpályás gyorskorcsolya a téli olimpiai játékokon</h3>

          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac sapien volutpat, sagittis ligula a, vestibulum nulla. Vivamus leo quam, commodo ut ex in, ornare imperdiet turpis. Vivamus aliquam leo vitae turpis tempus, quis imperdiet lectus volutpat. Nam quis turpis eu eros ullamcorper laoreet non non nunc. Nam id turpis quis risus sodales ullamcorper. Nullam ipsum mauris, gravida vel ornare ut, efficitur at lacus. Mauris velit ante, laoreet vel magna ut, auctor finibus libero. Duis vel diam metus. Nam a velit a nunc dictum pulvinar id vel nunc. Etiam tristique eu ligula aliquam dapibus. Cras consequat ligula sit amet tortor sodales tristique. Aliquam dignissim tortor eu ante laoreet vulputate. Quisque maximus nulla id nulla hendrerit ultricies. Duis eu nisl ullamcorper, egestas quam ac, facilisis augue. 
      </div>
    <div>
      <h3>Téli olimpia története</h3>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac sapien volutpat, sagittis ligula a, vestibulum nulla. Vivamus leo quam, commodo ut ex in, ornare imperdiet turpis. Vivamus aliquam leo vitae turpis tempus, quis imperdiet lectus volutpat. Nam quis turpis eu eros ullamcorper laoreet non non nunc. Nam id turpis quis risus sodales ullamcorper. Nullam ipsum mauris, gravida vel ornare ut, efficitur at lacus. Mauris velit ante, laoreet vel magna ut, auctor finibus libero. Duis vel diam metus. Nam a velit a nunc dictum pulvinar id vel nunc. Etiam tristique eu ligula aliquam dapibus. Cras consequat ligula sit amet tortor sodales tristique. Aliquam dignissim tortor eu ante laoreet vulputate. Quisque maximus nulla id nulla hendrerit ultricies. Duis eu nisl ullamcorper, egestas quam ac, facilisis augue. 
    </div>

    <div>
      <h3>Rövid pályás gyorskorcsolya Magyarország</h3>
        
    </div>      
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac sapien volutpat, sagittis ligula a, vestibulum nulla. Vivamus leo quam, commodo ut ex in, ornare imperdiet turpis. Vivamus aliquam leo vitae turpis tempus, quis imperdiet lectus volutpat. Nam quis turpis eu eros ullamcorper laoreet non non nunc. Nam id turpis quis risus sodales ullamcorper. Nullam ipsum mauris, gravida vel ornare ut, efficitur at lacus. Mauris velit ante, laoreet vel magna ut, auctor finibus libero. Duis vel diam metus. Nam a velit a nunc dictum pulvinar id vel nunc. Etiam tristique eu ligula aliquam dapibus. Cras consequat ligula sit amet tortor sodales tristique. Aliquam dignissim tortor eu ante laoreet vulputate. Quisque maximus nulla id nulla hendrerit ultricies. Duis eu nisl ullamcorper, egestas quam ac, facilisis augue. 

   </div>
</div>
    <div class="container-fluid">
       <div>
           <div>
                 <h3>Éremszerző helyek listálya:</h3>
                   <table class="table table-striped">
                     <thead>
                       <tr>
                       
                      </tr>
                    </thead>
                   <tbody>
                    
                </tbody>
            </table>
           </div>
           <div class="col-md-5">
           <h3>Magyar éremszerzők listája</h3>
                <h6>A kiválasztott éremszerző adatai jelennek meg.</h6>
                
           </div>
       </div>
    </div>
</body>
</html>

<?php
include("connect.php");

$sql = "SELECT * FROM sportagak";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["varos"] . "<br>";
        echo $row["sportagneve"] . "<br>";
        echo $row["helyszin"] . "<br>";
        echo $row["versenyszamok"] . "<br>";
    };
} else {
    echo "No user found";
}



$sql = "SELECT * FROM helyezettek";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["orszag"] . "<br>";
        echo $row["arany"] . "<br>";
        echo $row["ezust"] . "<br>";
        echo $row["bronz"] . "<br>";
    };
} else {
    echo "No user found";
}


if (isset($_POST["submit"])) {
  $text = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);
  if (empty($text)) {
      echo "Írjon be egy országot";
  } else {
      $sql = "SELECT helyezes, SUM(arany + ezust + bronz) AS ermek
      FROM helyezettek WHERE orszag = '$text'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo $row["helyezes"] . "<br>";
              echo $row["ermek"] . "<br>";
          };
      } else {
          echo "No user found";
      }
  }
}
mysqli_close($conn);
?>


