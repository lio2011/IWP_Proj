<?php

        $us  = $_POST['username'];
        $pass  = $_POST['pass'];
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new mysqli($servername, $username, $password, "iwp_project");
        if ($conn->connect_error) {
          die("Connection failed: ".$conn->connect_error);
        } else {
          $stmt = $conn->prepare("select * from info where username = ?");
          $stmt -> bind_param("s", $us);
          $stmt -> execute();
          $stmt_result = $stmt->get_result();
          if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['pass'] === $pass){
              header("Location: http://localhost/Software_Engineering-/index.html");
              exit;
            } else{
              header("Location: http://localhost/Software_Engineering-/login.html");
              exit;
            }
          } else{
            header("Location: http://localhost/Software_Engineering-/signup.html");
            exit;
          }
        }
        
        $conn->close();
        ?>