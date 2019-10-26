

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
				aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<ul class="navbar-nav mr-right">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success my-2 my-sm-0" href="profile.php"><?= $_SESSION['username'] ?></a>
                </li>
                <form class="form-inline my-2 my-lg-0" action="" method="POST">
                    <button class="btn btn-outline-success my-2 my-sm-0 "name="Logout"  type="submit">Logout</button>	
                </form>
            </ul>

		</div>
	</nav>

