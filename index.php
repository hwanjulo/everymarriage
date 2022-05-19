<!DOCTYPE html>
<html>
<head>
  <title>Every Marriage</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="indexframestyle.css">

<style>

</style>

</head>

<body>

  <!--outer-grid 시작-->
  <div id="outer-grid">

<!--좌측 여백 시작-->
    <div>
    </div>
<!--좌측 여백 종료-->

<!--main-grid 시작-->
    <div id="main-grid">

      <!--헤더 시작-->
        <div id="header">
          <h1><a href="index.php">Every Marriage</a></h1>
        </div>
      <!--헤더 종료-->

      <!--메뉴 시작-->
        <div>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?id=schedule">Schedule</a></li>
            <li><a href="index.php?id=budget">Budget</a></li>
            <li><a href="index.php?id=people">People</a></li>
        </div>
      <!--메뉴 종료-->

      <?php

      if(isset($_GET['id'])){
          echo file_get_contents($_GET['id'].".php");
      }

      else
          echo file_get_contents("homecontent.php");
       ?>


      <!--푸터 시작-->
        <div id="footer">
        <a>Copyright by BBANGJU
        </div>
      <!--푸터 종료-->

    </div>
  <!--main-grid 종료-->

<!--우측 여백 시작-->
    <div>
    </div>
<!--<우측 여백 종료-->

</div>
<!--outer-grid 종료-->



</body>
</html>
