<nav class="dropdown">
    <a class="<?php
    if ($path_parts['filename'] == "homePage") {
    print 'activePage';

    }
    ?> homepage link" href="homePage.php">Homepage</a>
    <div class="dropdown-1">
        <button class = "blog link">Blog Posts</button>

        <div class="dropdown-menu">
            <div class="dropdown-links">

                <section class = "reviews">
                    <h2>Cafe Reviews</h2>
                    <a class="<?php
                    if ($path_parts['filename'] == "perkyPlanetCoffee") {
                    print 'activePage';

                    }
                    ?>" href="perkyPlanetCoffee.php">Perky Planet Coffee</a>

                    <a class="<?php
                    if ($path_parts['filename'] == "kestrelCoffeeRoasters") {
                    print 'activePage';

                    }
                    ?>" href="kestrelCoffeeRoasters.php">Kestrel Coffee Roasters</a>

                    <a class="<?php
                    if ($path_parts['filename'] == "kruCoffeeCollective") {
                        print 'activePage';

                    }
                    ?>" href="kruCoffeeCollective.php">Kru Coffee Collective</a>

                </section>
                            
                <section class = "various">
                    <h2>Other</h2>
                    <a class="<?php
                    if ($path_parts['filename'] == "smallUpdateOne") {
                    print 'activePage';

                    }
                    ?>" href="smallUpdateOne.php">A Small Update</a>
                </section>

            </div>
        </div>
    </div>
    <div class="dropdown-2">
        <button class = "more link">More</button>
        <div class="dropdown-menu-2">
            <div class="dropdown-links">
                <section class = "more">
                    <a class="<?php
                    if ($path_parts['filename'] == "about") {
                    print 'activePage';

                    }
                    ?>" href="about.php">About CCC</a>

                    <a class="<?php
                    if ($path_parts['filename'] == "form") {
                    print 'activePage';

                    }
                    ?>" href="form.php">Contact me!</a>
                </section>
            </div>
        </div>
    </div>
</nav>