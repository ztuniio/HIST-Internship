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

	  a:hover {
        text-decoration: none;
    }

    .nasa {
    	background-color: blue; align center;
		  font-family: 'Josefin Sans', sans-serif;
		  font-size: 50px;
		  text-align: center; color:
		  white; padding: 30px ;
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
              <li><a>Rovers</a></li>
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
</body>
</html>