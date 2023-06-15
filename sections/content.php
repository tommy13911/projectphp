<h2>This is the content section</h2>

<?php
   

    if (isset($_GET['task'])) {
        $task = filter_var($_GET['task'], FILTER_SANITIZE_NUMBER_INT);        

        

        $filePath = dirname(__FILE__) . "/tasks/task{$task}.php";
        if (file_exists($filePath)) {
            include($filePath);
        } else {
            
            include('tasks/tasknotfound.php'); 
        }
        
        

    } else {
        echo 'Key task is not defined!';
    }

    
