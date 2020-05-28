<!doctype html>
<html lang="en">

<head>
    <! -- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Forums</title>
</head>

<body>
    <?php include 'partials/_header.php'; ?>
    <?php include '_dbconnect.php'; ?>

    <?php
    $id = $_GET['catid'];
      $sql = "SELECT * FROM `categories` WHERE category_id= $id";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
          $catname = $row['category_name'];
          $catdesc = $row['category_description'];

      }
    ?>
    <!-- Category container starts here -->
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> forums</h1>
            <p class="lead"><?php echo $catdesc; ?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing knowledge with each other.
                No Spam / Advertising / Self-promote in the forums is not allowed.
                Do not post copyright-infringing material.
                Do not post “offensive” posts, links or images.
                Do not cross post questions.
                Remain respectful of other members at all times.
            </p>
            <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

    <div class="container">
        <h1 class="py-2">Browse Questions</h1>
        <?php
        $id = $_GET['catid'];
      $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
          $id = $row['thread_id'];
          $title = $row['thread_title'];
          $desc = $row['thread_desc'];



        echo '<div class="media my-3">
            <img src="img/userdefault.webp" width="54px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0"><a class="text-dark" href="thread.php">'. $title .'</a></h5>
                '.$desc.'
            </div>
        </div>';
    }

    ?>
        
    

    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html
