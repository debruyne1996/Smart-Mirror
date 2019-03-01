<?php
/**
 * Created by PhpStorm.
 * User: mayomi
 * Date: 9/3/17
 * Time: 9:40 AM
 */

require_once 'db_connect.php';//bring the database connection file in
if(isset($_POST['submit'])) {
    $task = $_POST['task'];// grap what was filled in title field

    // check strings
    function check($string){
        $string  = htmlspecialchars($string);
        $string = strip_tags($string);
        $string = trim($string);
        $string = stripslashes($string);
        return $string;
    }

    // check for empty title
    if(empty($task)){
        $error  = true;
        $titleErrorMsg = "Title cannot be empty";
    }
    // check for empty description
    if(empty($description)){
        $error = true;
        $descriptionErrorMsg = "Description cannot be empty";
    }

    // connect to database
    db();
    global $link;
    $query = "INSERT INTO todo(task) VALUES ('$task')";
    $insertTodo = mysqli_query($link, $query);
    if($insertTodo){
        echo "You added a new todo";
    }else{
        echo mysqli_error($link);
    }

}
?>

<html>
<head>
    <title>Create Todo list</title>
</head>
<body>
<h1>Create Todo List</h1>
<button type="submit"><a href="index.php">View all Todo</a></button>
<form method="post" action="create.php">
    <p>Todo title: </p>
    <input name="task" type="text">
    <br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

