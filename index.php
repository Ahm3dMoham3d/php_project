<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = "We Tournaments";
require "./components/head.php"

?>


<body class="d-flex flex-column">

    <?php require "./components/navbar.php" ?>

    <main class="content container py-4">
        <div class="hero_section">
            <h1 class="text-center">Welcome to <span class="text-primary">WE</span> Schools Tournaments!</h1>
            <p class="text-center">Explore a world of competitive excitement with a variety of tournament types, from sports to IT challenges, history quizzes, and more. Join as a team of 5 people or as an individual participant. Every tournament consists of 5 events, and you can also choose to compete in just one event. Don’t miss the chance to showcase your skills!</p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="https://random.imagecdn.app/500/350" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">IT Tournament</h5>
                            <div>
                                <p>The tournament consists of 5 events with 40 chairs: 20 chairs for individuals and 20 chairs for teams, with 4 teams, each consisting of 5 people.</p>
                            </div>
                            <div class="card-text d-flex gap-4 mb-2">

                                <div>
                                    <i class="bi bi-person-fill"></i> 12 individual left
                                </div>
                                <div>
                                    <i class="bi bi-people-fill"></i> 2 teams left
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary">JOIN NOW !</a>
                            <a href="#" class="btn btn-secondary">RANK LIST</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div></div>
    </main>

    <?php require "./components/footer.php" ?>

</body>

</html>