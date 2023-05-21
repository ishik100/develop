<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="#home" class="active" style="--t:0">Home</a>
            <a href="#about" style="--t:.1s">About</a>
            <a href="#services" style="--t:.2s">Services</a>
            <a href="#portfolio" style="--t:.3s">Portfolio</a>
            <a href="#" style="--t:.4s">Contact</a>
        </nav>
    </header>
    <section class="main_content" id="home">
        <div>
            <h3>
                Hello! It's Me
            </h3>
            <h1>
                Mario
            </h1>
            <h3>
                and I'm <span class="multiply-text"></span>
            </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex incidunt necessitatibus debitis quas. Atque
                veniam vel similique labore veritatis corrupti!</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
            </div>
            <a href="#" class="btn">Download</a>
        </div>
        <div class="photo_wrapper">
            <div class="photo"></div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="photo_wrapper">
            <div class="photo"></div>
        </div>
        <div>
            <h3> Mario - <span>Fronted developer</span></h2>
                <p><span>Edication:</span> Lorem ipsum dolor sit amet.</p>
                <p><span>Work exp:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, id dignissimos
                    blanditiis deserunt nisi qui.</p>
                <p><span>Hobbies:</span> Lorem ipsum dolor sit amet.</p>
        </div>
    </section>
    <section class="services" id="services">
        <h3>Our <span>services</span></h3>
        <div class="services_wrapper">
            <div class="services__elem">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, perferendis!</p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="services__elem">
                <i class='bx bx-paint'></i>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, perferendis!</p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="services__elem">
                <i class='bx bx-signal-5'></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, perferendis!</p>
                <a href="#" class="btn">Read more</a>
            </div>
        </div>
    </section>
    <section class="about" id="about">

    </section>
    <section class="portfolio" id="portfolio">
        <h3>Last <span>Projects</span></h3>
        <div class="portfolio_wrapper">
            <div class="portfolio__elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
            <div class="portfolio__elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
            <div class="portfolio__elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
            <div class="portfolio__elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
            <div class="portfolio__elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
            <div class="portfolio__elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <h3>Write <span> Me!</span></h3>
        <form action="send.php" method="post">
            <div class="input_block">
                <input name="FIO" type="text" placeholder="Write Name" required>
                <input name="email" type="email" placeholder="Write E-mail"required >
            </div>
            <div class="input_block">
                <input name="phone" type="phone" placeholder="Write Phone" required>
                <input name="subject" type="text" placeholder="Write Object" required>
            </div>
            <textarea nmae="message"></textarea>
            <input type="submit" class="btn" value="Отправить">
        </form>
    </section>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
let typed = new Typed('.multiply-text', {
    strings: [
        'Frontend developer',
        'Youtuber',
        'Animator'
    ],
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 1000,
    loop: true
})
    </script>
</body>

</html>

