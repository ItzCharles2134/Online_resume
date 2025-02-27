<?php // app/Views/resume/home.php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="<?= base_url('backend/fontawesome/css/all.min.css'); ?>">
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat");

    * {
        outline: none;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    html,
    body {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        transition: 0.5s;
        background: #ffffff;
        cursor: default;
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
    }
    .btn {
    display: block;
    width: 200px;
    padding: 12px;
    margin: 10px auto;
    text-align: center;
    background-color: #1a237e;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    transition: 0.3s;
}

.btn:hover {
    background-color: #283593;
}

    a {
        text-decoration: none;
        color: #ffffff;
        display: block;
        transition-duration: 0.3s;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    h3 {
        color: #ffb300;
        margin: 10px 0;
        text-transform: lowercase;
        font-size: 1.25em;
    }

    .resume {
        width: 960px;
        background: #1a237e;
        color: #ffffff;
        margin: 20px auto;
        box-shadow: 10px 10px #0e1442;
        position: relative;
        display: flex;
    }

    .resume .base,
    .resume .func {
        box-sizing: border-box;
        float: left;
    }

    .resume .base>div,
    .resume .func>div {
        padding-bottom: 10px;
    }

    .resume .base>div:last-of-type,
    .resume .func>div:last-of-type {
        padding-bottom: 0;
    }

    .resume .base {
        width: 30%;
        padding: 30px 15px;
        background: #283593;
        color: #ffffff;
    }

    .resume .base .profile {
        background: #ffb300;
        padding: 30px 15px 40px 15px;
        margin: -30px -15px 45px -15px;
        position: relative;
        z-index: 2;
    }

    .resume .base .profile::after {
        content: "";
        position: absolute;
        background: #303f9f;
        width: 100%;
        height: 30px;
        bottom: -15px;
        left: 0;
        transform: skewY(-5deg);
        z-index: -1;
    }

    .resume .base .profile .photo img {
        width: 100%;
        border-radius: 50%;
    }

    .resume .base .profile .photo {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .resume .base .profile .fa-rocket {
        font-size: 100px;
        text-align: center;
        margin: auto;
        color: #283593;
    }

    .resume .base .profile .info {
        text-align: center;
        color: #ffffff;
    }

    .resume .base .profile .info .name {
        margin-top: 10px;
        margin-bottom: 0;
        font-size: 1.75em;
        text-transform: lowercase;
        color: #1a237e;
    }

    .resume .base .profile .info .job {
        margin-top: 10px;
        margin-bottom: 0;
        font-size: 1.5em;
        text-transform: lowercase;
        color: #283593;
    }

    .resume .base .contact div {
        line-height: 24px;
    }

    .resume .base .contact div a:hover {
        color: #fdd835;
    }

    .resume .base .contact div a:hover span::after {
        width: 100%;
    }

    .resume .base .contact div:hover i {
        color: #fdd835;
    }

    .resume .base .contact div i {
        color: #ffb300;
        width: 20px;
        height: 20px;
        font-size: 20px;
        text-align: center;
        margin-right: 15px;
        transition-duration: 0.3s;
    }

    .resume .base .contact div span {
        position: relative;
    }

    .resume .base .contact div span::after {
        content: "";
        position: absolute;
        background: #fdd835;
        height: 1px;
        width: 0;
        bottom: 0;
        left: 0;
        transition-duration: 0.3s;
    }

    .resume .base .follow .box {
        text-align: center;
        vertical-align: middle;
    }

    .resume .base .follow .box a {
        display: inline-block;
        vertical-align: text-bottom;
    }

    .resume .base .follow .box a:hover i {
        background: #fdd835;
        border-radius: 5px;
        transform: rotate(45deg) scale(0.8);
    }

    .resume .base .follow .box a:hover i::before {
        transform: rotate(-45deg) scale(1.5);
    }

    .resume .base .follow .box i {
        display: inline-block;
        font-size: 30px;
        background: #ffb300;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        line-height: 60px;
        color: #283593;
        margin: 0 10px 10px 10px;
        transition-duration: 0.3s;
    }

    .resume .base .follow .box i::before {
        transition-duration: 0.3s;
    }

    .resume .base .follow .box i.fa::before {
        display: block;
    }

    .resume .func {
        width: 100%;
        padding: 30px;
    }

    .resume .func:hover>div {
        transition-duration: 0.5s;
    }

    .resume .func:hover>div:hover h3 i {
        transform: scale(1.25);
    }

    .resume .func:hover>div:not(:hover) {
        opacity: 0.5;
    }

    .resume .func h3 {
        transition-duration: 0.3s;
        margin-top: 0;
    }

    .resume .func h3 i {
        color: #283593;
        background: #ffb300;
        width: 42px;
        height: 42px;
        font-size: 20px;
        line-height: 42px;
        border-radius: 50%;
        text-align: center;
        vertical-align: middle;
        margin-right: 8px;
        transition-duration: 0.3s;
    }

    .resume .func .work,
    .resume .func .edu {
        float: left;
    }

    .resume .func .work small,
    .resume .func .edu small {
        display: block;
        opacity: 0.7;
    }

    .resume .func .work ul li,
    .resume .func .edu ul li {
        position: relative;
        margin-left: 15px;
        padding-left: 25px;
        padding-bottom: 15px;
    }

    .resume .func .work ul li:hover::before,
    .resume .func .edu ul li:hover::before {
        -webkit-animation: circle 1.2s infinite;
        animation: circle 1.2s infinite;
    }

    .resume .func .work ul li:hover span,
    .resume .func .edu ul li:hover span {
        color: #fdd835;
    }

    @-webkit-keyframes circle {
        from {
            box-shadow: 0 0 0 0px #fdd835;
        }

        to {
            box-shadow: 0 0 0 6px rgba(255, 255, 255, 0);
        }
    }

    @keyframes circle {
        from {
            box-shadow: 0 0 0 0px #fdd835;
        }

        to {
            box-shadow: 0 0 0 6px rgba(255, 255, 255, 0);
        }
    }

    .resume .func .work ul li:first-of-type::before,
    .resume .func .edu ul li:first-of-type::before {
        width: 10px;
        height: 10px;
        left: 1px;
    }

    .resume .func .work ul li:last-of-type,
    .resume .func .edu ul li:last-of-type {
        padding-bottom: 3px;
    }

    .resume .func .work ul li:last-of-type::after,
    .resume .func .edu ul li:last-of-type::after {
        border-radius: 1.5px;
    }

    .resume .func .work ul li::before,
    .resume .func .work ul li::after,
    .resume .func .edu ul li::before,
    .resume .func .edu ul li::after {
        content: "";
        display: block;
        position: absolute;
    }

    .resume .func .work ul li::before,
    .resume .func .edu ul li::before {
        width: 7px;
        height: 7px;
        border: 3px solid #ffffff;
        background: #ffb300;
        border-radius: 50%;
        left: 3px;
        z-index: 1;
    }

    .resume .func .work ul li::after,
    .resume .func .edu ul li::after {
        width: 3px;
        height: 100%;
        background: #ffffff;
        left: 5px;
        top: 0;
    }

    .resume .func .work ul li span,
    .resume .func .edu ul li span {
        transition-duration: 0.3s;
    }

    .resume .func .work {
        width: 48%;
        background: #283593;
        padding: 15px;
        margin: 0 4% 15px 0;
    }

    .resume .func .edu {
        width: 48%;
        background: #283593;
        padding: 15px;
    }

    .resume .func .skills-prog {
        clear: both;
        background: #283593;
        padding: 15px;
    }

    .resume .func .skills-prog ul {
        margin-left: 15px;
    }

    .resume .func .skills-prog ul li {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        transition-duration: 0.3s;
    }

    .resume .func .skills-prog ul li:hover {
        color: #fdd835;
    }

    .resume .func .skills-prog ul li:hover .skills-bar .bar {
        background: #fdd835;
        box-shadow: 0 0 0 1px #fdd835;
    }

    .resume .func .skills-prog ul li span {
        display: block;
        width: 120px;
    }

    .resume .func .skills-prog ul li .skills-bar {
        background: #ffffff;
        height: 2px;
        width: calc(100% - 120px);
        position: relative;
        border-radius: 2px;
    }

    .resume .func .skills-prog ul li .skills-bar .bar {
        position: absolute;
        top: -1px;
        height: 4px;
        background: #ffb300;
        box-shadow: 0 0 0 #ffb300;
        border-radius: 5px;
    }

    .resume .func .skills-soft {
        clear: both;
        background: #283593;
        padding: 15px;
        margin: 15px 0 0;
    }

    .resume .func .skills-soft ul {
        display: flex;
        justify-content: space-between;
        text-align: center;
    }

    .resume .func .skills-soft ul li {
        position: relative;
    }

    .resume .func .skills-soft ul li:hover svg .cbar {
        stroke: #fdd835;
        stroke-width: 4px;
    }

    .resume .func .skills-soft ul li:hover span,
    .resume .func .skills-soft ul li:hover small {
        transform: scale(1.2);
    }

    .resume .func .skills-soft ul li svg {
        width: 95%;
        fill: transparent;
        transform: rotate(-90deg);
    }

    .resume .func .skills-soft ul li svg circle {
        stroke-width: 1px;
        stroke: #ffffff;
    }

    .resume .func .skills-soft ul li svg .cbar {
        stroke-width: 3px;
        stroke: #ffb300;
        stroke-linecap: round;
    }

    .resume .func .skills-soft ul li span,
    .resume .func .skills-soft ul li small {
        position: absolute;
        display: block;
        width: 100%;
        top: 52%;
        transition-duration: 0.3s;
    }

    .resume .func .skills-soft ul li span {
        top: 40%;
    }

    .resume .func .interests {
        background: #283593;
        margin: 15px 0 0;
        padding: 15px;
    }

    .resume .func .interests-items {
        box-sizing: border-box;
        padding: 0 0 15px;
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: space-between;
    }

    .resume .func .interests-items div {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .resume .func .interests-items div:hover i {
        transform: scale(1.2);
    }

    .resume .func .interests-items div:hover span {
        color: #fdd835;
        transition-duration: 0.3s;
    }

    .resume .func .interests-items div i {
        font-size: 45px;
        width: 60px;
        height: 60px;
        line-height: 60px;
        color: #ffb300;
        transition-duration: 0.3s;
    }

    .resume .func .interests-items div span {
        display: block;
    }
</style>

<body>
    <div class="resume">
        <div class="base">
            <div class="profile">
                <div class="photo">
                    <!--<img src="" /> -->
                    <i class="fas fa-rocket"></i>
                </div>
                <div class="info">
                    <h1 class="name">Charles Reo Brent O. Moreno</h1>
                    <h2 class="job">IT Student</h2>
                </div>
            </div>
            <div class="about">
                <h3>About Me</h3>Hello! My name is Charles Reo Brent O. Moreno, and I am a 4th year student at Garcia
                College of
                Technology. I have a passion for discovering new things, and I enjoy gaming and music. Feel free to
                explore my
                blog to know more about me!
            </div>
            <div class="contact">
                <h3>Contact Me</h3>
                <div class="call"><a href="tel:123-456-7890"><i class="fas fa-phone"></i><span>09954676327</span></a>
                </div>
                <div class="address"><a
                        href="https://www.google.com/maps/place/Estancia,+Kalibo,+Aklan/@11.6892944,122.3698945,15z/data=!3m1!4b1!4m6!3m5!1s0x33a59d6fd1bf265d:0x5c4e5f5f1dc22e0c!8m2!3d11.6863808!4d122.3702611!16s%2Fm%2F0r4slp3?entry=ttu&g_ep=EgoyMDI1MDIxOC4wIKXMDSoASAFQAw%3D%3D"><i
                            class="fas fa-map-marker"></i><span>Estancia, Kalibo</span></a>
                </div>
                <div class="email"><a href="mailto:mryema34@gmail.com"><i
                            class="fas fa-envelope"></i><span>mryema</span></a>
                </div>
                <div class="website"><a href="https://www.comingsoon.net//" target="_blank"> <i
                            class="fas fa-home"></i><span>Comming soon</span></a></div>
            </div>
            <div class="follow">
                <h3>Follow Me</h3>
                <div class="box">
                    <a href="https://www.facebook.com/brent.moreno.77/" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/_iitzchaaa?igsh=YTRvNXBrOG5qN2g4/" target="_blank"><i
                            class="fab fa-instagram "></i></a>
                    <a href="https://ph.pinterest.com/mryema34/_profile/" target="_blank"><i
                            class="fab fa-pinterest"></i></a>
                    <a href="<?= base_url('experience'); ?>" class="btn">Work Experience</a>
                    <a href="<?= base_url('skills'); ?>" class="btn">Skills</a>
                    <a href="<?= base_url('education'); ?>" class="btn">Education</a>
                    <a href="<?= base_url('softwareskills'); ?>" class="btn">Software Skills</a>

                </div>
            </div>
        </div>
        <div class="func">
            <div class="work">
                <h3><i class="fas fa-briefcase"></i>
                    <a href="<?= base_url('experience'); ?>">Work Experience</a>
                </h3>
                <ul>
                    <li><span>Capstone Research project<br>Web System</span><small>Nutrimeal</small><small>2024</small>
                    </li>
                    <li><span>Chat System</span><small>SH capstone project</small><small>2025</small></li>
                </ul>
            </div>
            <div class="edu">
                <h3><i class="fas fa-graduation-cap"></i>
                    <a href="<?= base_url('education'); ?>">Education</a>
                </h3>
                <ul>
                    <li><span>Bachelor of Science<br>in Information and
                            Technology</span><small>GCT</small><small>2021-2025</small></li>
                    <li><span>Senior High School</span><small>STEM</small><small>GCT 2017-2019</small></li>
                    <li><span>High School</span><small>Buruanga Vocational School</small><small>2013-2017</small></li>
                </ul>
            </div>
            <div class="skills-prog">
                <h3><i class="fas fa-tools"></i>
                    <a href="<?= base_url('skills'); ?>">Skills</a>
                </h3>
                <ul>
                    <li data-percent="95"><span>HTML5</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="90"><span>CSS3 & SCSS</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="60"><span>JavaScript</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="50"><span>jQuery</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="40"><span>JSON</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="55"><span>PHP</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="40"><span>MySQL</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="skills-soft">
                <h3><i class="fas fa-star"></i>
                    <a href="<?= base_url('softwareskills'); ?>">Software Skills</a>
                </h3>
                <ul>
                    <li data-percent="90">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>Web Development</span><small></small>
                    </li>
                    <li data-percent="75">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>Database</span><small></small>
                    </li>
                    <li data-percent="85">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>Programming</span><small></small>
                    </li>
                    <li data-percent="65">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>Development Tools</span><small></small>
                    </li>
                </ul>
            </div>
            <div class="interests">
                <h3><i class="fas fa-star"></i>Interests</h3>
                <div class="interests-items">
                    <div class="art"><i class="fas fa-palette"></i><span>Art</span></div>
                    <div class="art"><i class="fas fa-book"></i><span>Books</span></div>
                    <div class="movies"><i class="fas fa-film"></i><span>Movies</span></div>
                    <div class="music"><i class="fas fa-headphones"></i><span>Music</span></div>
                    <div class="games"><i class="fas fa-gamepad"></i><span>Games</span></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        (function () {
            $(".skills-prog li")
                .find(".skills-bar")
                .each(function (i) {
                    $(this)
                        .find(".bar")
                        .delay(i * 150)
                        .animate(
                            {
                                width:
                                    $(this)
                                        .parents()
                                        .attr("data-percent") + "%"
                            },
                            1000,
                            "linear",
                            function () {
                                return $(this).css({
                                    "transition-duration": ".5s"
                                });
                            }
                        );
                });

            $(".skills-soft li")
                .find("svg")
                .each(function (i) {
                    var c, cbar, circle, percent, r;
                    circle = $(this).children(".cbar");
                    r = circle.attr("r");
                    c = Math.PI * (r * 2);
                    percent = $(this)
                        .parent()
                        .data("percent");
                    cbar = (100 - percent) / 100 * c;
                    circle.css({
                        "stroke-dashoffset": c,
                        "stroke-dasharray": c
                    });
                    circle.delay(i * 150).animate(
                        {
                            strokeDashoffset: cbar
                        },
                        1000,
                        "linear",
                        function () {
                            return circle.css({
                                "transition-duration": ".3s"
                            });
                        }
                    );
                    $(this)
                        .siblings("small")
                        .prop("Counter", 0)
                        .delay(i * 150)
                        .animate(
                            {
                                Counter: percent
                            },
                            {
                                duration: 1000,
                                step: function (now) {
                                    return $(this).text(Math.ceil(now) + "%");
                                }
                            }
                        );
                });
        }.call(this));

        //# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsaUJBQUYsQ0FBb0IsQ0FBQyxJQUFyQixDQUEwQixhQUExQixDQUF3QyxDQUFDLElBQXpDLENBQThDLFFBQUEsQ0FBQyxDQUFELENBQUE7SUFDNUMsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLElBQVIsQ0FBYSxNQUFiLENBQW9CLENBQUMsS0FBckIsQ0FBMkIsQ0FBQSxHQUFFLEdBQTdCLENBQWlDLENBQUMsT0FBbEMsQ0FBMEM7TUFDeEMsS0FBQSxFQUFPLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxPQUFSLENBQUEsQ0FBaUIsQ0FBQyxJQUFsQixDQUF1QixjQUF2QixDQUFBLEdBQXlDO0lBRFIsQ0FBMUMsRUFFRyxJQUZILEVBRVMsUUFGVCxFQUVtQixRQUFBLENBQUEsQ0FBQTthQUNqQixDQUFBLENBQUUsSUFBRixDQUFPLENBQUMsR0FBUixDQUFZO1FBQUEscUJBQUEsRUFBdUI7TUFBdkIsQ0FBWjtJQURpQixDQUZuQjtFQUQ0QyxDQUE5Qzs7RUFNQSxDQUFBLENBQUUsaUJBQUYsQ0FBb0IsQ0FBQyxJQUFyQixDQUEwQixLQUExQixDQUFnQyxDQUFDLElBQWpDLENBQXNDLFFBQUEsQ0FBQyxDQUFELENBQUE7QUFDcEMsUUFBQSxDQUFBLEVBQUEsSUFBQSxFQUFBLE1BQUEsRUFBQSxPQUFBLEVBQUE7SUFBQSxNQUFBLEdBQVMsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFFBQVIsQ0FBaUIsT0FBakI7SUFDVCxDQUFBLEdBQUksTUFBTSxDQUFDLElBQVAsQ0FBWSxHQUFaO0lBQ0osQ0FBQSxHQUFJLElBQUksQ0FBQyxFQUFMLEdBQVUsQ0FBQyxDQUFBLEdBQUksQ0FBTDtJQUNkLE9BQUEsR0FBVSxDQUFBLENBQUUsSUFBRixDQUFPLENBQUMsTUFBUixDQUFBLENBQWdCLENBQUMsSUFBakIsQ0FBc0IsU0FBdEI7SUFDVixJQUFBLEdBQU8sQ0FBQyxDQUFDLEdBQUEsR0FBSSxPQUFMLENBQUEsR0FBYyxHQUFmLENBQUEsR0FBc0I7SUFDN0IsTUFBTSxDQUFDLEdBQVAsQ0FBVztNQUFBLG1CQUFBLEVBQXFCLENBQXJCO01BQXdCLGtCQUFBLEVBQW9CO0lBQTVDLENBQVg7SUFDQSxNQUFNLENBQUMsS0FBUCxDQUFhLENBQUEsR0FBRSxHQUFmLENBQW1CLENBQUMsT0FBcEIsQ0FBNEI7TUFDMUIsZ0JBQUEsRUFBa0I7SUFEUSxDQUE1QixFQUVHLElBRkgsRUFFUyxRQUZULEVBRW1CLFFBQUEsQ0FBQSxDQUFBO2FBQ2pCLE1BQU0sQ0FBQyxHQUFQLENBQVc7UUFBQSxxQkFBQSxFQUF1QjtNQUF2QixDQUFYO0lBRGlCLENBRm5CO0lBSUEsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFFBQVIsQ0FBaUIsT0FBakIsQ0FBeUIsQ0FBQyxJQUExQixDQUErQixTQUEvQixFQUEwQyxDQUExQyxDQUE0QyxDQUFDLEtBQTdDLENBQW1ELENBQUEsR0FBRSxHQUFyRCxDQUF5RCxDQUFDLE9BQTFELENBQWtFO01BQ2hFLE9BQUEsRUFBUztJQUR1RCxDQUFsRSxFQUVHO01BQUEsUUFBQSxFQUFVLElBQVY7TUFBZ0IsSUFBQSxFQUFNLFFBQUEsQ0FBQyxHQUFELENBQUE7ZUFDdkIsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLElBQVIsQ0FBYSxJQUFJLENBQUMsSUFBTCxDQUFVLEdBQVYsQ0FBQSxHQUFpQixHQUE5QjtNQUR1QjtJQUF0QixDQUZIO0VBWG9DLENBQXRDO0FBTkEiLCJzb3VyY2VzQ29udGVudCI6WyIkKCcuc2tpbGxzLXByb2cgbGknKS5maW5kKCcuc2tpbGxzLWJhcicpLmVhY2ggKGkpIC0+XG4gICQodGhpcykuZmluZCgnLmJhcicpLmRlbGF5KGkqMTUwKS5hbmltYXRlIHtcbiAgICB3aWR0aDogJCh0aGlzKS5wYXJlbnRzKCkuYXR0cignZGF0YS1wZXJjZW50JykgKyAnJSdcbiAgfSwgMTAwMCwgJ2xpbmVhcicsIC0+XG4gICAgJCh0aGlzKS5jc3MgJ3RyYW5zaXRpb24tZHVyYXRpb24nOiAnLjVzJ1xuICByZXR1cm5cbiQoJy5za2lsbHMtc29mdCBsaScpLmZpbmQoJ3N2ZycpLmVhY2ggKGkpIC0+XG4gIGNpcmNsZSA9ICQodGhpcykuY2hpbGRyZW4oJy5jYmFyJylcbiAgciA9IGNpcmNsZS5hdHRyKCdyJylcbiAgYyA9IE1hdGguUEkgKiAociAqIDIpXG4gIHBlcmNlbnQgPSAkKHRoaXMpLnBhcmVudCgpLmRhdGEgJ3BlcmNlbnQnXG4gIGNiYXIgPSAoKDEwMC1wZXJjZW50KS8xMDApICogY1xuICBjaXJjbGUuY3NzICdzdHJva2UtZGFzaG9mZnNldCc6IGMsICdzdHJva2UtZGFzaGFycmF5JzogY1xuICBjaXJjbGUuZGVsYXkoaSoxNTApLmFuaW1hdGUge1xuICAgIHN0cm9rZURhc2hvZmZzZXQ6IGNiYXJcbiAgfSwgMTAwMCwgJ2xpbmVhcicsIC0+XG4gICAgY2lyY2xlLmNzcyAndHJhbnNpdGlvbi1kdXJhdGlvbic6ICcuM3MnXG4gICQodGhpcykuc2libGluZ3MoJ3NtYWxsJykucHJvcCgnQ291bnRlcicsIDApLmRlbGF5KGkqMTUwKS5hbmltYXRlIHtcbiAgICBDb3VudGVyOiBwZXJjZW50XG4gIH0sIGR1cmF0aW9uOiAxMDAwLCBzdGVwOiAobm93KSAtPlxuICAgICQodGhpcykudGV4dCBNYXRoLmNlaWwobm93KSArICclJ1xuICByZXR1cm4iXX0=
        //# sourceURL=coffeescript
    </script>
</body>

</html>