<?php include("./todo_list.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <main class="py-5">
        <div class="container">
            <h1 class="text-primary text-center">My Todo List</h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 py-3">
                        <div class="card">
                            <?php InserList(); ?>
                            <div class="card-body">
                               <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" name="todo_list"  class="form-control" placeholder="Enter Task....." >
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
                               </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <br><br>
                <div class="row mt-4">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <table class="table table-bordered table-hover">
                       <thead>
                           <tr>
                           <th>Todo Id</th>
                            <th>Todo List</th>
                            <th>Todo Date</th>
                            <th>Dalete</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php readList() ?>
                       </tbody>
                    </table>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <?php  deleteList(); ?>
         </div>
    </main>

    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>