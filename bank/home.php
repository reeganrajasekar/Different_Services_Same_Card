<?php require("./layout/Header.php") ?>
<?php require("./layout/db.php") ?>

<div class="container mt-3">
    <h3 class="mt-4" style="color:#2b74e2;display:flex;flex-direction:row;justify-content:space-between">
        <span>USERS :</span>
    </h3>


    <br>  
    <?php
        if(isset($_GET["mobile"])&&isset($_GET["pin"])){
            $mobile = $_GET["mobile"];
            $pin = $_GET["pin"];
            $result = $conn->query("SELECT * FROM user WHERE mobile='$mobile' AND pin='$pin'");
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                ?>
                <h2 style="text-align:center;color:#444;font-size:22px">User Name : <?php echo($row["name"])?></h2>
                <h2 style="text-align:center;color:#444;font-size:22px">User Email : <?php echo($row["email"])?></h2>
                <h2 style="text-align:center;color:#444;font-size:22px">User Mobile : <?php echo($row["mobile"])?></h2>
                <?php
                }
            }else{
                ?>
                <h2 style="text-align:center;color:#aaa;font-size:22px">User Not Found</h2>
                <?php
            }
        }else{
    ?>
    <center>
        <div class="container" style="width: 400px;">
            <h4 class="modal-title" style="color:#2b74e2">Search User</h4>
            <form action="/ration/home.php" method="get">
                <div class="form-floating mb-3 mt-3">
                    <input required type="number" class="form-control"  name="mobile" placeholder="User Mobile No">
                    <label>User Mobile No</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input required type="password" class="form-control"  name="pin" placeholder="User PIN">
                    <label>User PIN</label>
                </div>
                <div>
                    <button class="btn  w-50" style="background-color:#2b74e2;color:#fff">Search</button>
                </div>
            </form>
        </div>
    </center>
        <?php } ?>
    <br>
</div>





<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
      document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 3000)
</script>

<script>
    if(urlParams.get('msg')){
      document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 3000)
</script>


<?php require("./layout/Footer.php") ?>