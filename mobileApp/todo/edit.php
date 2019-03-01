<?php
/**
 * Created by PhpStorm.
 * User: mayomi
 * Date: 9/11/17
 * Time: 12:47 PM
 */

require_once 'db_connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    db();
    global $link;
    $query = "SELECT task FROM todo WHERE id = '$id'";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
        if($row){
            $task = $row['task'];

            echo "
                <h2>Edit Todo</h2>
                
            <form action='edit.php?id=$id' method='post'>
            <p>Task</p>
             <input type='text' name='task' value='$task'>
			 <br>
             <input type='submit' name='submit' value='edit'>
            </form>
            ";
        }
    }else{
        echo "no todo";
    }


    if(isset($_POST['submit'])){
        $task = $_POST['task'];
        db();
        $query = "UPDATE todo SET task = '$task' WHERE id = '$id'";
        $insertEdited = mysqli_query($link, $query);
        if($insertEdited){
            echo "successfully updated";
        }
        else{
            echo mysqli_error($link);
        }
    }


}

