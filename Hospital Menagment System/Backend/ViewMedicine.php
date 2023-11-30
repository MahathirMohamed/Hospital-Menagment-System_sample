<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="row">
        <div class="col">
            <div class="card mt-5">
                <h3 class="card-header text-uppercase bg-info text-white">Medicine</h3>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Medicine ID</th>
                                <th scope="col">Medicine Name</th>
                                <th scope="col">Medicine Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'PHP/conn.php';

                            $sql = "SELECT * FROM medicine";

                            $result = mysqli_query($con, $sql);

                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                                    <tr>
                                        <td> <?php echo $row['id'] ?> </td>
                                        <td> <?php echo $row['name'] ?> </td>
                                        <td> <?php echo $row['price'] ?> </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No Record";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</body>

</html>