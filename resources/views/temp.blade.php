<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temp</title>
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <h1 class="t">Giant Book Supplier</h1>
<div class="content">
    <div class="navbar">
      <a href="/home">Home</a>
      <div class="dropdown">
        <button class="dropbtn">Category 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="/biography">Biography</a>
          <a href="/comic">Comic</a>
          <a href="/encyclopedia">Encyclopedia</a>
          <a href="/novel">Novel</a>
        </div>
      </div> 
      <a href="/publisher">Publisher</a>
      <a href="/contact">Contact</a>
</div>
<p class="paget">  @yield('title' ) </p>
@yield ('content')
</div>

<footer class="a">
		<p>&copy; </a>Happy Book Store 2022</p>
	</footer>
</body>
</html>