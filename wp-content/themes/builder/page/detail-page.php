<?php
/**
 * Template Name: Detail Page
 * Template Post Type: page
 */
get_header(); 

?>

<style>
.detail-content-wrap {
    min-height: 100dvh;
    display: flex;
    flex-direction: column;
    justify-content: center
}

.sidebar-bg {
    background-color: #ddddda;
    height: 100%;
    position: absolute;
    left: 0;
    width: 30%
}

.detail-content {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    height: 80dvh;
    max-height: 70dvh;
    overflow: auto;
    width: 100%;
    max-width: 90%;
    margin-inline: auto;
    position: relative;
    z-index: 2;
    display: flex
}

.detail-content .small-sidebar {
    border-right: solid 1px #ddd;
    position: sticky;
    top: 0;
    min-width: 100px
}

.detail-content .small-sidebar .name {
    writing-mode: vertical-rl;
    font-weight: bold;
    line-height: 1;
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translatex(-50%) rotate(180deg);
    font-size: 1.1rem
}

.detail-content .small-sidebar .name span {
    display: block
}

.detail-content .picture {
    width: 30%;
    position: sticky;
    top: 0;
    transition: all .3s ease-in-out;
    display: grid;
    align-items: flex-end;
    z-index: 3
}

.detail-content .picture .agent-image {
    display: block;
    width: 100%;
    height: 100%;
    -o-object-position: top;
    object-position: top;
    -o-object-fit: cover;
    object-fit: cover;
    transition: all .3s ease-in-out;
    max-height: 100%
}

.detail-content .picture .full-name {
    position: absolute;
    top: 42px;
    right: -43%;
    transition: all .3s ease-in-out
}

.detail-content .picture .full-name .f-name {
    font-weight: bold;
    line-height: 1;
    font-size: 2.8rem
}

.detail-content .picture .full-name .f-name span {
    display: flex;
    align-items: center;
    gap: 8px;
    position: relative;
    top: 5px
}

.detail-content .picture .full-name .f-name span:after {
    content: "";
    display: block;
    width: 30px;
    height: 2px;
    background-color: #ddddda
}

.detail-content .picture .full-name .f-title {
    display: block
}

.detail-content .picture .more-details {
    position: absolute;
    right: -40px;
    bottom: 22px;
    font-weight: bold;
    font-size: .8rem;
    background-color: rgba(0, 0, 0, 0)
}

.detail-content .picture.small {
    width: 20%
}

.detail-content .picture.small .full-name {
    right: 10%
}

.detail-content .picture.small .agent-image {
    max-height: 300px
}

.detail-content .article {
    width: 70%;
    padding-left: 5%;
    padding-right: 10%;
    padding-top: 28vh;
    transition: all .4s ease-in-out;
    top: 100%;
    position: relative;
    opacity: 0
}

.detail-content .article.active {
    top: 0;
    opacity: 1
}

.detail-content .article h2 {
    font-weight: bold;
    margin-bottom: 10px;
    color: #d8c28d
}

.detail-content .article p {
    line-height: 1.6;
    margin: 12px 0
}

.detail-content .article .awards {
    padding-top: 30px;
    padding-bottom: 50px
}

.detail-content .article .items.list {
    display: grid;
    gap: 30px
}

.detail-content .article .items.list h3 {
    font-weight: bold;
    font-size: .9rem
}

.detail-content .article .items.list p {
    margin: 0;
    font-size: .8rem
}

.detail-content .socials {
    position: absolute;
    right: 12px;
    bottom: 20px;
    display: grid;
    gap: 8px
}

.detail-content .socials a {
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    font-weight: bold;
    padding: 6px;
    font-size: .8rem
}

@media(min-width: 1660px) {
    .detail-content {
        max-width: 1600px
    }
}

@media(min-width: 1280px) {
    .detail-content {
        max-width: 1150px
    }

    .sidebar-bg {
        width: 400px
    }

    .detail-content .picture {
        width: 310px
    }

    .detail-content .picture.small {
        width: 236px
    }
}

@media(min-width: 1330px) {
    .detail-content {
        max-width: 1220px
    }

    .detail-content .picture.small {
        width: 245px
    }
}

@media(min-width: 1660px) {
    .detail-content {
        max-width: 1620px
    }

    .sidebar-bg {
        width: 600px
    }
}
</style>



<main class="detail-content-wrap">
    <span class="sidebar-bg"></span>

    <div class="detail-content">
        <div class="small-sidebar">
            <button class="menu">MENU</button>
            <div class="name">Adrian— <span>Somoza</span></div>
        </div>
        <div class="picture">
            <img class="agent-image" src="<?php echo get_template_directory_uri(); ?>/images/agent.jpg" alt="" />

            <div class="full-name">
                <h1 class="f-name"><span>Adrian</span> Somoza</h1>
                <small class="f-title">Real Estate Agent</small>

                <button class="more-details"><span>+ MORE</span></button>
            </div>
        </div>
        <div class="article">
            <h2>Bio</h2>
            <p>
                Adrian Somoza is a multidisciplinary designer based in Buenos Aires,
                Argentina. He has been working as a freelance designer since 2013.
                His work focuses on branding, graphic design, and illustration.
            </p>
            <p>
                Adrian has worked with clients from all around the world, including
                the United States, Australia, Spain, and the United Kingdom. He has
                also worked with big brands such as Adobe, Sony, and Disney.
            </p>
            <p>
                Adrian is passionate about design and loves creating beautiful and
                functional designs that help his clients achieve their goals. He is
                always looking for new challenges and opportunities to grow as a
                designer.
            </p>

            <div class="awards">
                <h2>Awards</h2>
                <div class="items list">
                    <div class="item">
                        <h3>Lorem ipsum sodlor</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            malesuada, nunc non tincidunt.
                        </p>
                    </div>
                    <div class="item">
                        <h3>Lorem ipsum sodlor</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            malesuada, nunc non tincidunt.
                        </p>
                    </div>
                    <div class="item">
                        <h3>Lorem ipsum sodlor</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            malesuada, nunc non tincidunt.
                        </p>
                    </div>
                    <div class="item">
                        <h3>Lorem ipsum sodlor</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            malesuada, nunc non tincidunt.
                        </p>
                    </div>
                    <div class="item">
                        <h3>Lorem ipsum sodlor</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            malesuada, nunc non tincidunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="socials">
            <a href="#">X</a>
            <a href="#">LI</a>
            <a href="#">FB</a>
            <a href="#">IG</a>
            <a href="#">YT</a>
        </div>
    </div>
</main>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const picture = document.querySelector(".picture");
    const moreDetails = document.querySelector(".more-details");
    const article = document.querySelector(".article");

    moreDetails.addEventListener("click", () => {
        article.classList.toggle("active");
        picture.classList.toggle("small");
    });
});
</script>


<?php get_footer(); ?>