<?php
/**
 * Template Name: Detail Page
 * Template Post Type: page
 */
get_header(); 

?>

<style>
#header,
.headerColor #header {
    box-shadow: none !important;
    background-color: transparent !important;
}

.detail-content {
    min-height: 100dvh;
    overflow: auto;
    width: 100%;
    margin-inline: auto;
    position: relative;
    z-index: 2;
    display: flex;
    background-color: #fff;
}





.detail-content .picture {


    transition: all .3s ease-in-out;
    display: grid;
    align-items: flex-end;
    z-index: 3;
    background-color: #f8f8f8;
}

.detail-content .picture .agent-image {
    display: block;
    max-width: 90%;
    margin: auto;
    height: auto;
}

.detail-content .picture .full-name {
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



.detail-content .article {
    width: 70%;
    padding-left: 5%;
    padding-right: 10%;
    transition: all .4s ease-in-out;
    position: relative;
    opacity: 0
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
    gap: 8px
}

.detail-content .socials a {
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    font-weight: bold;
    padding: 6px;
    font-size: .8rem
}


@media (min-width: 1024px) {

    .detail-content .picture {
        width: 32%;
        position: fixed;
        height: 100dvh;
        align-content: end;
        border-right: solid 1px #eaeaea;
    }

    .detail-content .picture .full-name {
        position: absolute;
        top: 82px;
        right: -37%;
    }

    .detail-content .picture.small {
        width: 25%;
    }

    .detail-content .article {
        margin-left: auto;
        transform: translateY(100%);
        padding-top: 21vh;
    }

    .detail-content .article.active {
        top: 0;
        opacity: 1;
        transform: translateY(0);

    }

    .detail-content .socials {
        position: fixed;
        right: 30px;
        bottom: 30px;
        display: grid;
    }

}


@media(min-width: 1280px) {
    .detail-content .picture .agent-image {
        max-height: 87vh;
    }

    .detail-content .picture.small .agent-image {
        max-height: 60vh;
    }
}

@media(min-width: 1330px) {}

@media(min-width: 1660px) {}
</style>



<section class="detail-content">


    <div class="picture">
        <img class="agent-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/david-101-min.png"
            alt="DS" />

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

</section>

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