<nav class="navbar navbar-expand-lg shadow">
    <div class="container">

        <a class="navbar-brand" href="index.php"><span><i class="fab fa-rocketchat"></i> Souf</span>chat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="users">Chat</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registre">Sign Up</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item scm">
                    <a class="nav-link" href="https://www.linkedin.com/in/soufiane-mchanna/" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                <li class="nav-item scm">
                    <a class="nav-link" href="https://github.com/souf1neCoder" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="nav-item scm">
                    <a class="nav-link" href="https://twitter.com/Soufianemchanna" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
               




            </ul>
        </div>
    </div>
</nav>