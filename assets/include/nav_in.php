<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
				aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{% url 'members' %}">Profile</a>
				</li>
            </ul>
            <form class="form-inline my-2 my-lg-0 <?=$display_none ?>" action= "" method="POST">
                <input class="form-control mr-sm-2<?php $display_none; $text ?>" type="text" placeholder="Username" aria-label="Username"
						name="login" id="id_username">
                <input class="form-control mr-sm-2<?php $display_none; $text ?>" type="password" placeholder="Password" aria-label="Password"
                       name="password" id="id_password">
                <button class="btn btn-outline-success my-2 my-sm-0"name="sign" type="submit">Sign in</button>
            </form>
			<ul class="navbar-nav mr-right">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success my-2 my-sm-0 <?= $logoutNone ?>" href="profile.php"><?= $_SESSION['username'] ?></a>
                </li>
                <form class="form-inline my-2 my-lg-0" action="" method="POST">
                    <button class="btn btn-outline-success my-2 my-sm-0 <?= $logoutNone ?>"name="Logout"  type="submit">Logout</button>
				</form>
				<a class="btn btn-outline-success my-2 my-sm-0 <?=$display_none ?> "  type="submit" href="register.php">Register</a>
            </ul>

		</div>
	</nav>
<?php include "asse
