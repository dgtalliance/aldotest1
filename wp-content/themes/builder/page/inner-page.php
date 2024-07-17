<?php
/**
 * Template Name: Inner Page
 * Template Post Type: page
 */
get_header(); 

while ( have_posts() ) : the_post(); ?>






<section class="hero">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><span>Real Estate Agents</span></li>
        </ul>

        <h1 class='title'>Top Real Estate Agents List in the U.S. (2024)</h1>

        <div class="details">
            <p>We rank the top 500 real estate agents in the United States based on the agents’ transaction history for
                the last 3 years. Our realtors profiles include:</p>

            <ul>
                <li>Recent Sales</li>
                <li>Ratings & Reviews</li>
                <li>Average Price Point</li>
                <li>Years of Experience</li>
                <li>Service Areas</li>
                <li>Neighborhood Expertise</li>
            </ul>
        </div>

        <button class="more">Learn More</button>

        <hr>
    </div>
</section>

<div class="agent-results">
    <div class="container">

        <?php
            $agents = array(
                array(
                    'agent' => 'Nathan Nocholson',
                    'avatar' => 'https://i.pravatar.cc/150?img=1',
                ), 
                array(
                    'agent' => 'Jhon Doe',
                    'avatar' => 'https://i.pravatar.cc/150?img=7',
                ),
                array(
                    'agent' => 'Margo Trevino',
                    'avatar' => 'https://i.pravatar.cc/150?img=3',
                ),
                array(
                    'agent' => 'Halle Burns',
                    'avatar' => 'https://i.pravatar.cc/150?img=6',
                ),
                array(
                    'agent' => 'Anne Montgomery',
                    'avatar' => 'https://i.pravatar.cc/150?img=5',
                ),
                
            );
        ?>

        <div class='agents'>
            <?php foreach ($agents as $agent) : ?>


            <div class="agent">
                <div class="avatar">
                    <img src="<?php echo $agent['avatar']; ?>" alt="<?php echo $agent['name']; ?>" loading="lazy"
                        width='64' height='64' />
                </div>
                <div class="details">
                    <div class="name">
                        <h3><?php echo $agent['agent']; ?></h3>
                        <small>trending</small>
                    </div>

                    <div class="rating">
                        <span class="stars">
                            ⭐⭐⭐⭐⭐
                        </span>
                        <small>5 average based on 39,000 ratings.</small>
                    </div>

                    <div class="price">
                        $ 30.59
                    </div>

                    <div class="location">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 12q.825 0 1.413-.587T14 10t-.587-1.412T12 8t-1.412.588T10 10t.588 1.413T12 12m0 7.35q3.05-2.8 4.525-5.087T18 10.2q0-2.725-1.737-4.462T12 4T7.738 5.738T6 10.2q0 1.775 1.475 4.063T12 19.35M12 22q-4.025-3.425-6.012-6.362T4 10.2q0-3.75 2.413-5.975T12 2t5.588 2.225T20 10.2q0 2.5-1.987 5.438T12 22m0-12" />
                        </svg>
                        <address>
                            Miami, FL
                        </address>
                    </div>

                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis soluta dicta accusamus
                            quam, fuga quasi optio totam delectus incidunt debitis ipsum, voluptatum natus perspiciatis
                            et ducimus unde reprehenderit inventore esse!
                        </p>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>
        </div>


    </div>
    <aside>
        <div class="widget">
            <h3>Services</h3>
        </div>
        <div class="widget">
            <h3>Services</h3>
            <ul>
                <li><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 14 14">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M5.272 6.346h3.455s1 0 1 1v2.456s0 1-1 1H5.272s-1 0-1-1V7.346s0-1 1-1m.474 0v-.572a1 1 0 0 1 1-1h.51a1 1 0 0 1 1 1v.572" />
                                <path
                                    d="M13.5 6.94a.999.999 0 0 0-.32-.74L7 .5L.82 6.2a1 1 0 0 0-.32.74v5.56a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1z" />
                            </g>
                        </svg>

                        Sample menu</a></li>
                <li><a href="#">Sample menu</a></li>
                <li><a href="#">Sample menu</a></li>
                <li><a href="#">Sample menu</a></li>
                <li><a href="#">Sample menu</a></li>
            </ul>
        </div>
    </aside>
</div>



<?php endwhile; get_footer(); ?>