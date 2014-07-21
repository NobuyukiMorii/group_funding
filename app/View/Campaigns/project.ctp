<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="thumbnail">
                    <img class="img-responsive" src="http://www.f-contents.jp/birthday-present1/img/present-k88.png" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo $data['Campaign']['amount']."円" ;?></h4>
                        <h4><a href="#"><?php echo $data['Campaign']['name'] ;?></a>
                        </h4>
                        <p><?php echo $data['Campaign']['description'] ;?></p>
                    </div>
                </div>

                <div class="well">

<table class="table">
  <thead>
    <tr>
      <th>現在の金額</th>
      <th>30,000円</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>人数</td>
      <td>3人</td>
    </tr>
    <tr>
      <td>１人あたりの金額</td>
      <td>1,500円</td>
    </tr>
    <tr>

      <td>残り日数</td>
      <td>10日</td>
    </tr>
  </tbody>
</table>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013 - Template by <a href="http://maxoffsky.com/">Maks</a>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
