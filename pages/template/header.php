<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Exämple wêbsïte</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?p=authors">Nos Auteurs</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?p=categories">Nos Catégories</a>
                </li>
                <li class="nav-item">
                    <p class="nav-link"> | </p>
                </li>
                <li>
                    <div class="dropdown mr-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Posts
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="admin.php?p=posts">Tous les posts</a>
                            <a class="dropdown-item" href="admin.php?p=post.create">Ajouter un post</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown mr-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Users
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="admin.php?p=users">Liste des users</a>
                            <a class="dropdown-item" href="admin.php?p=user.create">Ajout user</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Catégories
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="admin.php?p=categories">Listes des catégories</a>
                            <a class="dropdown-item" href="admin.php?p=category.create">Ajouter une catégories</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>