<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>booksearch.com</title>
  <link href="css/kadai.css" rel="stylesheet">
  <!-- <style>div{padding: 10px;font-size:16px;}</style> -->
  </head>
<body>
<!-- Head[Start] -->
<header class="header">
<div class="imgbox">
  <p id="image1"><img src="img/book9.jpeg" alt=""></p>
  <p id="ln">KEEP CALM, AND READ BOOK</p>
</div>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">DATA</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset class="fs">
    <legend>BookSearch</legend>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
    <div class="box">
     <label>Title：<input type="text" name="title"></label><br>
     <label>Product id：<input type="text" name="id"></label><br>
     <label>Contents：<textArea name="contents" rows="4" cols="40"></textArea></label><br>
     <!-- <input type="submit" value="GO"> -->
     <input type="submit" value="GO" style="background-color:#ffff99" 
     onmouseover="this.style.background='#99ccff'" onmouseout="this.style.background='#ffff99'">
    </div>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<footer class="fotter">
<div class="imgbox2">
<p id="image2"><img src="img/book2.jpeg" alt=""></p>
<p id="image4"><img src="img/book5.jpg" alt=""></p>

</div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <script src="kadai.js"></script>
</body>
</html>