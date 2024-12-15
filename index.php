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
    

    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-6 offset-3">
                <h2 class="text-center mb-4">Form Data</h2>
                <hr>
                <div class="card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <input type="text" placeholder="Name" class="form-control mb-2">
                                <input type="text" placeholder="Age" class="form-control mb-2">
                                <input type="text" placeholder="Skill" class="form-control mb-2">
                                <input type="text" placeholder="Location" class="form-control mb-2">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Skill</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gouranga Roy</td>
                            <td>23</td>
                            <td>Laravel Dev</td>
                            <td>Thakurgaon</td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       
    </script>
</body>
</html>