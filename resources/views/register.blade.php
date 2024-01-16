<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Laravel </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 20%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   </br>
 form {   
        border: 2px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 30%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
        justify-content: center;
    }  
 button:hover {   
        opacity: 0.7;   
    }  
        
     
 .container {   
        padding: 5px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>

    <center> <h1>  Login Form </h1> </center>   
    <form action="{{ action('/register')}}" method="POST" >  
        <div class="container"  >   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required> </br>
            
            <label>email : </label>   
            <input type="text"    placeholder="Enter email" name="email" required> </br>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  </br>
            <label>Role Name : </label>   
            <input type="text" placeholder="Enter Role" name="Role Name" required>  </br>
            <button type="submit">Login</button>   

        </div>   
    </form>     
</body>     
</html>  