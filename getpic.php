<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel= "stylesheet" type= "text/css" href="./styleling.css">
    <title>Docpic</title>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">IMG.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="codepic.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="getpic.php">Table</a>
                </li>

            </ul>

        </div>
    </nav>
    <div class="container mt-5">
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="table table-dark">
                <thead>
                    <tr>

                        <th class="text-center" scope="col">Roll No</th>
                        <th class="text-center" scope="col">Names</th>
                        <th class="text-center" scope="col">Images</th>
                    </tr>
                </thead>

                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'Gallery');

                $query = " SELECT *  FROM `pics` ";
                $query_run = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                <tbody>
                    <tr>

                        <td class="text-center"> <?php echo $row['roll_no']; ?></td>
                        <td class="text-center"> <?php echo $row['name'];  ?></td>

                        <td class="text-center">
                            <?php echo '<img src="data:image;base64, '.base64_encode($row['images']).'" alt="Image" style="widht: 100px; height: 100px;" >';?>
                        </td>
                    </tr>

                    <?php
                }
                ?>


            </table>



        </form>
    </div>

        <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    </body>

</html>