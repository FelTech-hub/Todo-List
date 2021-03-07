<?php 
    ob_start();
    // Database Connection
    $connect = mysqli_connect('localhost', 'root', '', 'todolist') or  die("Database Failed" . mysqli_error($connect));

    // Inserting Data
  function InserList(){
      global $connect;
    if(isset($_POST['submit'])){
        $todo_list = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['todo_list']));


        $insert = "INSERT INTO todos (todo_list) VALUES ('{$todo_list}')";

        $result = mysqli_query($connect, $insert) or die("Query Failed");

        header("Location: index.php");

    }
  }

//   Displaying and Reading Data
  function readList(){
    global $connect;

    $query = "SELECT * FROM todos";
    $result = mysqli_query($connect, $query);

    while($row = mysqli_fetch_assoc($result)){
        $todo_id = $row['todo_id'];
        $todo_list = $row['todo_list'];

      echo " <tr>";
       echo  "<td>$todo_id</td>";
      echo " <td>$todo_list</td>";
      echo " <td><a href='index.php?delete= $todo_id'>Delete</a></td>";
       echo " </tr>";
  }

}

function deleteList(){
    global $connect;
    if(isset($_GET['delete'])){
        $get_list_id = $_GET['delete'];


        $delete = "DELETE FROM todos WHERE  todo_id= $get_list_id";

        $result = mysqli_query($connect, $delete);

        if(!$result){
            die("Delete Failed");
        } 

        header("Location: index.php");
    }
}

    ob_flush();

?>