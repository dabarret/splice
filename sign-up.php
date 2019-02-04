<!DOCTYPE html>
<html lang="en">
  <meta name = "viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <title>SPLICE</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="app.js"></script>
  </head>
  <body>
  <header>
    <div class = "title"><h1>SPLICE</h1></div>
    <nav>
      <ul>
        <li><a href="index.html" class="active">//Home</a></li>
        <li><a href="studentPage.html">//My Page</a></li>
        <li><a href="about.html">//About</a></li>
      </ul>
    </nav>
    <div id="userInfo">
      <img src="img/guest.png">
      <a href = "#">Login</a>
    </div>
    <div class="menu-toggle"><i class = "fa fa-bars" aria-hidden = "true"></i></div>
  </header>
  <div class = "content">
	  <div class="page-header">
	  	<h3>Search</h3>
		<input id="dataSearch" type="search" name="searchData" placeholder="Search names, data, etc...">
		<div class = "drop-downs">
		  <select name="year">
			<option value="allYears">All Years</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
		  </select>
		  <select name="students">
			<option value="allStudents">All Students</option>
			<option value="volvo">Howard</option>
			<option value="saab">June</option>
			<option value="fiat">Beav</option>
			<option value="audi">Walley</option>
		  </select>
		  <button>Search</button>
		</div>
	  </div>
	  <h3 id="results">Results</h3>

	<div class = "searchResult">
		<div id = "resultHeader">
			<p id="student">Jimothy Johannes</p>
			<p id="year">2018</p>
		</div>
		<p>This area will contain a preview of the material included in this post.</p>
		<a href ="dataPage.html">View</a>
	</div>
	<div class = "searchResult">
		<div id = "resultHeader">
		<p id="student">Ignis Tuskin</p>
		<p id="year">2017</p>
		</div>
		<p>This area will contain a preview of the material included in this post.</p>
		<a href ="dataPage.html">View</a>
	</div>
	<div class = "searchResult">
		<div id = "resultHeader">
		<p id="student">Lilly Sumatra</p>
		<p id="year">2016</p>
		</div>
		<p>This area will contain a preview of the material included in this post.</p>
		<a href ="dataPage.html">View</a>
	</div>
	<div class = "searchResult">
		<div id = "resultHeader">
		<p id="student">Wiley Renea</p>
		<p id="year">2015</p>
		</div>
		<p>This area will contain a preview of the material included in this post.</p>
		<a href ="dataPage.html">View</a>
	</div>




  </div>
  </body>
</html>
