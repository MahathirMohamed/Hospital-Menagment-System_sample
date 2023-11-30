<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    .error {
      color: #F00;
    }
  </style>

</head>

<body>
  <div class="row">
    <div class="card mt-5">
      <h3 class="card-header text-uppercase bg-info text-white">Registration</h3>
      <div class="card-body">
        <form id="save">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Doctor ID</label>
              <input type="text" name="id" id="id" class="form-control" placeholder="enter doctor ID">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="enter doctor name">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Special In</label>
              <select name="specialIn" id="specialIn" class="form-control">
                <option selected>select a special in</option>
                <option value="Pediatrician">Pediatrician</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Oncologist">Oncologist</option>
                <option value="Family medicine">Family medicine</option>
                <option value="Surgeon">Surgeon</option>
                <option value="Pathologists">Pathologists</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Time</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="available time">
          </div>

          <button type="submit" class="btn btn-success btn-lg save">Appoint Success</button>
        </form>
      </div>
    </div>
  </div>

  <script src="script.js"></script>

  <script src="js/validation/jquery.validate.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>