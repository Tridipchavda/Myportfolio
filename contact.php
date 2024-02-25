<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection Fail to Database ".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `portfolio contact`.`contactme`(`Name`, `Email`, `Phone`, `Subject`, `Description`) VALUES ('$name','$email','$phone','$subject','$description')";

    if($con->query($sql)== true){
        $insert=true;
        
    }
    else{
        echo "Data Insertion in Database fail";
    }
    $con->close();
}

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Tridip Chavda </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="Assets/logo_loader.png" type="image/icon type">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class='all'>
        <div class='navbar'>
            
            <nav>
                <ul>
                    <li><a href='main.html'>Home</a></li>
                    <li><a href='about.html'>About Me</a></li>
                    <li><a href='Projects.html'>Projects</a></li>
                    <li><a href='contact.php'>Contact Me</a></li>    
                </ul>
            </nav>
        </div>
        <div class='main'>
            <div class='help'>
                <img class='nav' src='Assets/menu_n.png' height="45px" width="45px">
                <img class='cross' src='Assets/cross.png' height="25px" width="25px"> 
            </div>
            <div class="infocontainer">
                <div class="effect">
                    <div></div><div></div><div></div><div></div>
                    <div></div><div></div><div></div><div></div>
                    <div></div><div></div><div></div><div></div>
                </div>
                
                <div class="query">
                <center><span> Let's Talk</span></center>
                <form method="POST" id="formSubmit">
                    <div class="form-group">
                        <label for="Name" >Name</label>
                        </br>
                        <input type="text" name="name" class="form-control" placeholder="  Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        </br>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="  Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" >Phone</label>
                        </br>
                        <input type="text" name="phone" class="form-control" placeholder="  Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Subject</label>
                        </br>
                        <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="  Subject">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        </br>
                        <textarea type="text" name="description"class="form-control" placeholder=" Enter Description"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
                </div>
        </div>
    </div>
    <script>
        
        document.querySelector('#formSubmit').addEventListener('submit',()=>{
            
            alert(" Message Sended Successfully ");
        
        });

        
        document.querySelector('.cross').style.display='none';
        document.querySelector('.help').addEventListener("click",()=>{
            if(window.innerWidth>1100){
                document.querySelector('.navbar').classList.toggle('navbarNext');
                
                if(document.querySelector('.navbar').classList.contains('navbarNext')){
                    document.querySelector('.nav').style.display='inline';
                    document.querySelector('.cross').style.display='none';
                
                    document.querySelector('.nav').style.opacity='1';
                    document.querySelector('.query').style.margin='-10vh 5vw 0 0';
                }
                else{
                    document.querySelector('.cross').style.display='inline';
                    document.querySelector('.cross').style.margin='0 13vw';
                    document.querySelector('.nav').style.opacity='0';
                    document.querySelector('.nav').style.position='absolute';
                    document.querySelector('.query').style.margin='-10vh 20vw 0 0';
                }
            }
            else{
                document.querySelector('.navbar').classList.toggle('navbarNext');
                if(document.querySelector('.navbar').classList.contains('navbarNext')){
                    document.querySelector('.cross').style.display='inline';
                    document.querySelector('.nav').style.opacity='0';
                    document.querySelector('.nav').style.position='absolute';
                }
                else{
    
                    document.querySelector('.nav').style.display='inline';
                    document.querySelector('.cross').style.display='none';
        
                    document.querySelector('.nav').style.opacity='1';
                    document.querySelector('.query').style.margin='0% 20% 0% 0%';
                }
            
            }
            
        })
    </script>
</body>
</html>