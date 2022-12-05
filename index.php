<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahmetev figma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <div class="left-board">
        <div class="item-board">
            <img src="images/pexels-suliman-sallehi-1704488.jpg" alt="Аватар" class="round-board avatar_point" onmouseover="GetClassSelectetEl(this)" onmouseout="DelClassSelectetEl(this)">
            <p class="text-board">Профиль</p>
        </div>
        <div class="item-board">
            <img src="images/pexels-anna-tarazevich-5598301.jpg" alt="Навыки" class="round-board skills_point" onmouseover="GetClassSelectetEl(this)" onmouseout="DelClassSelectetEl(this)">
            <p class="text-board">Навыки</p>
        </div>
        <div class="item-board">
            <img src="images/214-2142556_icon-experience-high-tech-litigation-icon-experience.png" alt="Опыт" class="round-board exp_point" onmouseover="GetClassSelectetEl(this)" onmouseout="DelClassSelectetEl(this)">
            <p class="text-board">Опыт</p>
        </div>
        <div class="item-board">
            <img src="images/Без названия.png" alt="Ссылки" class="round-board ref_point" onmouseover="GetClassSelectetEl(this)" onmouseout="DelClassSelectetEl(this)">
            <p class="text-board">Ссылки</p>
        </div>
    </div>
    <img src="images/pexels-suliman-sallehi-1704488.jpg" alt="Аватар" class="main-picture">
    <div class="info">
        <span class="back-f">
            <p class="main-text">
                <?php
                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                    $sql = "SELECT * FROM `main info` WHERE id = 1";
                    $query = mysqli_query($link, $sql);
                    while($array = mysqli_fetch_assoc($query))
                    {
                        echo $array['info-main'];
                    }
                    mysqli_close($link);
                ?>
            </p>
        </span>
    </div>
    
    <div class="skills-info">
        <span class="back-f">
        <div class="container c-card">
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle id="circle1" cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                            <h2>
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `skills` WHERE id = 1;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['persent-skill'];
                                    }
                                    mysqli_close($link);
                                ?>                          
                                <span>%</span>
                            </h2>
                        </div>
                    </div>
                    <h3>
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "figmasite");
                            $sql = "SELECT * FROM `skills` WHERE id = 1;";
                            $query = mysqli_query($link, $sql);
                            while($array = mysqli_fetch_assoc($query))
                            {
                                echo $array['name-skill'];
                            }
                            mysqli_close($link);
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="container c-card">
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle id="circle2" cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                            <h2>
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `skills` WHERE id = 2;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['persent-skill'];
                                    }
                                    mysqli_close($link);
                                ?>
                                <span>%</span>
                            </h2>
                        </div>
                    </div>
                    <h3>
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "figmasite");
                            $sql = "SELECT * FROM `skills` WHERE id = 2;";
                            $query = mysqli_query($link, $sql);
                            while($array = mysqli_fetch_assoc($query))
                            {
                                echo $array['name-skill'];
                            }
                            mysqli_close($link);
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="container c-card">
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle id="circle3" cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                        <h2>
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `skills` WHERE id = 3;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['persent-skill'];
                                    }
                                    mysqli_close($link);
                                ?>
                                <span>%</span>
                            </h2>
                        </div>
                    </div>
                    <h3>
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "figmasite");
                            $sql = "SELECT * FROM `skills` WHERE id = 3;";
                            $query = mysqli_query($link, $sql);
                            while($array = mysqli_fetch_assoc($query))
                            {
                                echo $array['name-skill'];
                            }
                            mysqli_close($link);
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="container c-card">
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle id="circle4" cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                        <h2>
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `skills` WHERE id = 4;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['persent-skill'];
                                    }
                                    mysqli_close($link);
                                ?>
                                <span>%</span>
                            </h2>
                        </div>
                    </div>
                    <h3>
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "figmasite");
                            $sql = "SELECT * FROM `skills` WHERE id = 4;";
                            $query = mysqli_query($link, $sql);
                            while($array = mysqli_fetch_assoc($query))
                            {
                                echo $array['name-skill'];
                            }
                            mysqli_close($link);
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="container c-card">
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle id="circle5" cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                        <h2>
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `skills` WHERE id = 5;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['persent-skill'];
                                    }
                                    mysqli_close($link);
                                ?>
                                <span>%</span>
                            </h2>
                        </div>
                    </div>
                    <h3>
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "figmasite");
                            $sql = "SELECT * FROM `skills` WHERE id = 5;";
                            $query = mysqli_query($link, $sql);
                            while($array = mysqli_fetch_assoc($query))
                            {
                                echo $array['name-skill'];
                            }
                            mysqli_close($link);
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="container c-card">
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle id="circle6" cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                        <h2>
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `skills` WHERE id = 6;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['persent-skill'];
                                    }
                                    mysqli_close($link);
                                ?>
                                <span>%</span>
                            </h2>
                        </div>
                    </div>
                    <h3>
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "figmasite");
                            $sql = "SELECT * FROM `skills` WHERE id = 6;";
                            $query = mysqli_query($link, $sql);
                            while($array = mysqli_fetch_assoc($query))
                            {
                                echo $array['name-skill'];
                            }
                            mysqli_close($link);
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </span>
    </div>
    <div class="links">
        <span class="back-f">
        <div class="container">
        <div class="card-link">
                <div class="face face1">
                    <div class="content">
                        <i class="fab fa-windows"></i>
                        <h3>
                            <?php
                                $link = mysqli_connect("localhost", "root", "", "figmasite");
                                $sql = "SELECT * FROM `links` WHERE id = 1;";
                                $query = mysqli_query($link, $sql);
                                while($array = mysqli_fetch_assoc($query))
                                {
                                    echo $array['name'];
                                }
                                mysqli_close($link);
                            ?>
                        </h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>
                            <?php
                                $link = mysqli_connect("localhost", "root", "", "figmasite");
                                $sql = "SELECT * FROM `links` WHERE id = 1;";
                                $query = mysqli_query($link, $sql);
                                while($array = mysqli_fetch_assoc($query))
                                {
                                    echo $array['description'];
                                }
                                mysqli_close($link);
                            ?>
                        </p>
                        <a href="
                            <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `links` WHERE id = 1;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['link'];
                                    }
                                    mysqli_close($link);
                                ?>
                            " type="button">Посмотреть</a>
                    </div>
                </div>
            </div>
            <div class="card-link">
                <div class="face face1">
                    <div class="content">
                        <i class="fab fa-windows"></i>
                        <h3>
                            <?php
                                $link = mysqli_connect("localhost", "root", "", "figmasite");
                                $sql = "SELECT * FROM `links` WHERE id = 2;";
                                $query = mysqli_query($link, $sql);
                                while($array = mysqli_fetch_assoc($query))
                                {
                                    echo $array['name'];
                                }
                                mysqli_close($link);
                            ?>
                        </h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>
                            <?php
                                $link = mysqli_connect("localhost", "root", "", "figmasite");
                                $sql = "SELECT * FROM `links` WHERE id = 2;";
                                $query = mysqli_query($link, $sql);
                                while($array = mysqli_fetch_assoc($query))
                                {
                                    echo $array['description'];
                                }
                                mysqli_close($link);
                            ?>
                        </p>
                        <a href="
                            <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `links` WHERE id = 2;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['link'];
                                    }
                                    mysqli_close($link);
                                ?>
                            " type="button">Посмотреть</a>
                    </div>
                </div>
            </div>
            <div class="card-link">
                <div class="face face1">
                    <div class="content">
                        <i class="fab fa-windows"></i>
                        <h3>
                            <?php
                                $link = mysqli_connect("localhost", "root", "", "figmasite");
                                $sql = "SELECT * FROM `links` WHERE id = 3;";
                                $query = mysqli_query($link, $sql);
                                while($array = mysqli_fetch_assoc($query))
                                {
                                    echo $array['name'];
                                }
                                mysqli_close($link);
                            ?>
                        </h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>
                            <?php
                                $link = mysqli_connect("localhost", "root", "", "figmasite");
                                $sql = "SELECT * FROM `links` WHERE id = 3;";
                                $query = mysqli_query($link, $sql);
                                while($array = mysqli_fetch_assoc($query))
                                {
                                    echo $array['description'];
                                }
                                mysqli_close($link);
                            ?>
                        </p>
                        <a href="
                            <?php
                                    $link = mysqli_connect("localhost", "root", "", "figmasite");
                                    $sql = "SELECT * FROM `links` WHERE id = 3;";
                                    $query = mysqli_query($link, $sql);
                                    while($array = mysqli_fetch_assoc($query))
                                    {
                                        echo $array['link'];
                                    }
                                    mysqli_close($link);
                                ?>
                            " type="button">Посмотреть</a>
                    </div>
                </div>
            </div>
        </div>
        </span>
    
    <p class="mail">bahmetev@gmail.com</p>
    <a href="#vk"><img src="images/Без названия (1).png" alt="vk" class="round-link vk"></a>
    <a href="#whatsapp"><img src="images/social-whatsapp-circle-512.webp" alt="whatsapp" class="round-link whatsapp"></a>
    <a href="#inst"><img src="images/instagram-circle-logo-transparent-hd-png-download-1024x1024-instagram-circle-png-840_880.jpg" alt="inst" class="round-link inst"></a>
</body>
<script src="js/script.js"></script>
</html>