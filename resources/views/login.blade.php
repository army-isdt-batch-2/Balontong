<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="bg-info bg-gradient">
    
    <div class="container">
        <div class="row align-items-center">

            <div class="col"></div>
            
            <div class="col-4 mt-5">
                <div class="card">
                    <div class="card-body text-center">
                        <img width="30%" src="data:image/png;base64,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" alt="">
                        <br>
                         LitMatch Make Your Friends
                         <br><br><br>
                         Log In to your Account
                        <br><br>
                         <form class="text-start">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary rounded-pill" type="button">Log In</button>
                              </div>
                          </form>
                    </div>
                </div>
            </div>

            <div class="col"></div>

        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>