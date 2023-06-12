 <?php
	require "db_connect.php";
	require "header.php";
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "librarian") == 0)
		header("Location: librarian/home.php");
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: member/home.php");
?>

<html>
	<head>
		<title>Library</title>
		<link rel="stylesheet" type="text/css" href="css/index_style.css" />
		<nav>
             <a href="/html/">HTML</a> |
             <a href="/css/">CSS</a> |
             <a href="/js/">JavaScript</a> |
             <a href="/python/">Python</a>
        </nav>

	</head>
	<body>
		<div id="allTheThings">
			<div id="member">
				<a href="member">
					<img src="img/ic_member.svg" width="250px" height="auto"/><br />
					&nbsp;Member
				</a>
			</div>
			<div id="verticalLine">
				<div id="librarian">
					<a id="librarian-link" href="librarian">
						<img src="img/ic_librarian.svg" width="250px" height="auto" /><br />
						&nbsp;&nbsp;&nbsp;Librarian
					</a>
				</div>
			</div>
		</div>
	</body>
</html>