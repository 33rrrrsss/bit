<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainydaylab - The Express</title>
    <link rel="stylesheet" href="assignment01.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Rainyday Logo" width="120" height="40">
            <span>Rainyday</span>
        </div>
        <div class="search-box">
            <input type="text" placeholder="find anything">
            <button class="search-button">Search</button>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>
        <div class="user-actions">
            <a href="login.php"><button>Login</button></a> <!-- 链接到 login.php -->
        </div>
    </header>

    <main>
        <section class="featured-movie">
            <div class="movie-info">
                <h1>The Express</h1>
                <div class="movie-meta">
                    <span class="rating">PG-14</span>
                    <span class="imdb">IMDB: 8.5</span>
                </div>
                <p>The journey is long and unfamiliar, and when you step on this train, you never know where it will go.</p>
                <p><strong>Cast:</strong> Robert Romanson, Anne Good</p>
                <p><strong>Genre:</strong> Action, Adventure, Biography</p>
                <p><strong>Tags:</strong> 4K, Ultra, Xing, Premieres, Viking</p>
                <button class="play-now">PLAY NOW</button>
            </div>
            <div class="movie-trailer">
                <img src="train-image.jpg" alt="The Express Trailer">
                <button class="watch-trailer">Watch Trailer</button>
            </div>
        </section>
        <section class="all-time-hits">
            <h2>All Time Hits</h2>
            <div class="slider">
                <button class="prev">&#10094;</button>
                <div class="movies-container">
                    <div class="movies">
                        <div class="movie">
                            <img src="warrior-life.jpeg" alt="The Warrior Life">
                            <h3>The Warrior Life</h3>
                            <p>2hr 30mins - Action</p>
                        </div>
                        <div class="movie">
                            <img src="machine-war.jpeg" alt="Machine War">
                            <h3>Machine War</h3>
                            <p>1hr 22mins - Action</p>
                        </div>
                        <div class="movie">
                            <img src="horse-lady.jpeg" alt="The Horse Lady">
                            <h3>The Horse Lady</h3>
                            <p>1hr 24mins - Drama</p>
                        </div>
                        <div class="movie">
                            <img src="The Express.jpeg" alt="The Express">
                            <h3>The Express</h3>
                            <p>2hr 2mins - Fantasy/Adventure</p>
                        </div>
                        <div class="movie">
                            <img src="movie5.jpeg" alt="Movie 5">
                            <h3>Movie 5</h3>
                            <p>1hr 45mins - Comedy</p>
                        </div>
                        <div class="movie">
                            <img src="movie6.jpeg" alt="Movie 6">
                            <h3>Movie 6</h3>
                            <p>2hr 10mins - Thriller</p>
                        </div>
                        <div class="movie">
                            <img src="movie7.jpeg" alt="Movie 7">
                            <h3>Movie 7</h3>
                            <p>1hr 30mins - Romance</p>
                        </div>
                        <div class="movie">
                            <img src="movie8.jpeg" alt="Movie 8">
                            <h3>Movie 8</h3>
                            <p>2hr - Sci-Fi</p>
                        </div>
                        <div class="movie">
                            <img src="movie9.jpeg" alt="Movie 9">
                            <h3>Movie 9</h3>
                            <p>1hr 50mins - Mystery</p>
                        </div>
                        <div class="movie">
                            <img src="movie10.jpeg" alt="Movie 10">
                            <h3>Movie 10</h3>
                            <p>2hr 15mins - Horror</p>
                        </div>
                    </div>
                </div>
                <button class="next">&#10095;</button>
            </div>
            <button class="more-videos">MORE VIDEOS</button>
        </section>
    </main>

    <footer>
        <p>&copy; 2136 StreamLab</p>
    </footer>

    <script src="assignment01.js"></script>
</body>
</html>
