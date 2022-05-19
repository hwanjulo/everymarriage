<!DOCTYPE html>
<html>
<head>
  <title>모두의 결혼 준비</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="indexframestyle.css">
  <link rel="stylesheet" href="contentframestyle.css">

<style>

</style>

</head>

<body>
<!--content-grid 시작-->
  <div id="content-grid">
    <div id="leftsection">
      <div>
       <h4 class="contentheader"> My Budget </h4>
      </div>
      <div>
        <input type="button" value="EXPORT" id="tools" name="linedelete" onclick="alert('클릭')"></input>
        <input type="button" value="DELETE" id="tools" name="export" onclick="alert('클릭')"></input>
      </div>
    </div>

    <div id="rightsection">
      <div>
      <h4 class="contentheader">Add New Budget </h4>
      </div>
      <div>
        <label for="stype">Type : </label><input type="text" id="stype" name="stype"></input><br>
        <label for="ssubject">Subject : </label><input type="text" id="ssubject" name="ssubject"></input><br>
        <label for="schedule">Time : </label><input type="datetime-local" id="schedule" name="schedule"></input><br>
        <label for="venue">Location : </label><input type="text" id="venue" name="venue"></input><br>

        <div>
          <input type="button" value="SAVE" id="tools" name="save"  onclick="alert('클릭')"></input>
        </div>
      </div>
    </div>

  </div>
<!--content-grid 종료-->

</body>
</html>
