<!DOCTYPE html>
<html>
<head>
  <style type="text/css">

    div {
        font-family: 'Josefin Sans', sans-serif;
        background-color: red;
        font-size: 16px;
        font-weight: 600;
    }

    div ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    div ul li {
        display: inline-block;
        position: relative;
        padding: 10px;
    }

    div ul li:hover {
        background-color: gray;
    }

    div ul ul {
        font-family: 'Josefin Sans', sans-serif;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #333;
        display: none;
    }

    div ul ul li {
        display: block;
        font-family: 'Josefin Sans', sans-serif;
        white-space: nowrap;
    }

    div ul ul ul  {
        position: absolute;
        left: 100%;
        top: 0;
        display: none;
    }

    div ul li:hover > ul {
        display: block;
    }

      * {
    margin: 0px;
    padding: 0px;
    }

    a {
        color: white;
        text-decoration: none;
    }



    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"], input[type="email"] {
        padding: 5px;
        font-size: 16px;
        border: 2px solid gray;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: blue;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }


    form {
        margin-top: 100px;
        font-family: 'Josefin Sans', sans-serif;
        font-size: 20px;
        text-align: center;
        font-weight: 600;
        
        background-color: white;
    }

    .nasa {
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      background-color: blue; align center;
      font-family: 'Josefin Sans', sans-serif;
      font-size: 50px;
      text-align: left; color:
      white; padding: 30px ;
    }

    .nasa:hover{
      border: 66px black;
      transition: 3s;
      color: black;
      
      }

    .nasa2 {
       background-image: url("nasa.jpg");
       background-size: fixed;
       font-family: 'Josefin Sans', sans-serif;
       text-align: center;
       color: white ;
       padding: 80px ;
    }

    

    .pages {
        margin-top: 100px;
        max-width: 900px;
        margin: 0 auto;
        font-family: 'Josefin Sans', sans-serif;
        font-size: 16px;
        font-weight: 600;
    }

    .footer {
        background-color: black;
        color: white;
        padding: 10px;
        font-family: 'Josefin Sans', sans-serif;
        font-size: 10px;
        font-weight: 700;
        text-align: center;
    }

</style>
</head>
<body>
  <h1 class="nasa">NASA</h1>
    <div>
    <ul>
      <li><a>Home</a></li>
      <li><a>Missions</a>
        <ul>
          <li><a>Mission 1</a></li>
          <li><a>Mission 2</a></li>
          <li><a>Mission 3</a>
            <ul>
              <li><a>Hubble</a></li>
              <li><a>Rovers</a>
              <ul>
                <li><a>JWST</a></li>
                <li><a>Curiosity</a></li>
              </ul>
            </ul>
          </li>
        </ul>
      </li>
      <li><a>About</a></li>
      <li><a>Contact</a></li>
    </ul>
  </div>
  <div class="nasa2">
    <action="subscribe" method="POST">
      <label for="email">Subscribe to our newsletter:</label><br>
      <input type="email" id="email" name="email" placeholder="Enter your email" required><br>
      <br>
      <input type="submit" value="Subscribe">
  </div>
  <div class="pages">
    <ul>
      <li><a href="#">Terms and Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">FAQs</a></li>
    </ul>
  </div>
  <footer class="footer">
    <p>&copy; 2023 NASA. All rights reserved.</p>
  </footer>
</body>
</html>