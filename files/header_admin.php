    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ff6666;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
    <ul>
        <li><h1>Netflix Movies Admin View</h1></li>    </ul>
<ul>
    <li><a class="active" href="home_admin.php">Home</a></li>
    <li><a href="add.php">Add Movie</a></li>
    <li><a href="deletemovie.php">Deletemovie</a></li>
    
    <li><a href="update_movie.php">Update Price</a></li>
    
    <li><a href="update_genre.php">Update Genre</a></li>
    
    <li><a href="display_movielist.php">Display Movie List</a></li>
    
    <li><a href="display_user.php">Display User List</a></li>
    
    <li><a href="delete_user_admin.php">Delete User</a></li>
  <li><a href="includes/logout2.inc.php">Logout</a></li>
</ul>