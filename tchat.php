
<?php
    require_once './bdd/data-bdd.php';
?>

    <h2 class="text-center h-10">TCHAT</h2>

    <div id="messages-list" class="d-flex flex-column gap-2 justify-content-end h-80">
        <?php
            if(count($messages) == 0){
                echo "<p class='text-center'>Aucun message</p>";
            }
            else{
                foreach ($messages as $key => $message) {
                    echo '<div class="message bg-dark rounded d-flex p-3 " style="border-bottom : 2px solid ' .$message["color"].'">
                                <p class="my-auto">[' .$message["date"]. '] <span style=" color:' .$message["color"]. '">' .$message["pseudo"]. '</span> : ' .$message["message"]. '</p>
                            </div>';
                }
            }
        ?>

    </div>

    
    <form class="container mt-auto h-10 d-flex align-items-end" method="POST" action="./submit-message.php">
        <div class="row  w-100">
            <div class="form-group col-10">
                <input type="text" class="form-control" id="inputMessage" name="message" placeholder="Message">
            </div>
            <button type="submit" class="btn btn-primary col-2"><i class="bi bi-send-fill"></i></button>
        </div>
    </form>    
