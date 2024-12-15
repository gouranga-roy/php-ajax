<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
    <div class="pages mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col text-center g-4">
                    <button class="btn btn-primary" id="home">Home</button>
                    <button class="btn btn-info" id="about">About</button>
                    <button class="btn btn-warning" id="contact">Contact</button>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row" id="page-content">
                
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('.alert_btn').click(function() {
        //         $.ajax({
        //             url: "./ajax.php?name=Gouranga",
        //             success: (data) => {
        //                 alert(data);
        //             }
        //         });
        //     });
        // });

        $(document).ready(function() {
            $('#home').click(function() {
                $.ajax({
                    url: "./pages/home.php",
                    success: (data) => {
                        $('#page-content').html(data);
                    },
                    error: (err) => {
                        console.log(err);
                    }
                });
            });
            $('#about').click(function() {
                $.ajax({
                    url: "./pages/about.php",
                    success: (data) => {
                        $('#page-content').html(data);
                    }
                });
            });
            $('#contact').click(function() {
                $.ajax({
                    url: "./pages/contact.php",
                    success: (data) => {
                        $('#page-content').html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>