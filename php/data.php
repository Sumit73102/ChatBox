<?php
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['image'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>This is text message</p>
                    </div>
                    </div>
                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>';
    }
?>