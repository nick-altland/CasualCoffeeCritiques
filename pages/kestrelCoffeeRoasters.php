<?php include "../top.php"; ?>

        <main class="kestrel-coffee-roasters">
            <h2>Kestrel Coffee Roasters</h2>
            <article>
                <h3><em>With a minimalist yet artsy aesthetic, the only reason to return to the cafe/bookstore/art gallery that is Kestrel is their truly excellent coffee</em></h3>
                <section class=" table">
                    <table>
                        <?php
                        $sql = 'SELECT fnkCafeID, fldFlavor, fldAtmosphere, fldLocation, fldRating, fldVisit FROM tblReview WHERE fnkCafeID =? ';

                        $data=array('Kestrel');
                        $statement = $pdo->prepare($sql);
                        $statement->execute($data);

                        $record = $statement->fetchAll();
                        foreach($record as $record) {
                            print '<tr class = "first-table-row"><th colspan="1">Flavor</th><td>' . $record['fldFlavor'] . '</td></tr>';
                            print '<tr class = "second-table-row"><th colspan="1">Atmosphere</th><td>' . $record['fldAtmosphere'] . '</td></tr>';
                            print '<tr class = "third-table-row" ><th colspan="1">Location</th><td>' . $record['fldLocation'] . '</td></tr>';
                            print '<tr class = "fourth-table-row"><th colspan="1">Rating</th><td>' . $record['fldRating'] . '</td></tr>';
                            print '<tr class = "fifth-table-row"><th colspan="1">Visit</th><td>' . $record['fldVisit'] . '</td></tr>' . PHP_EOL;
                    }
                        ?>
                    </table>
                </section>
                
                <section class="first kestrel-coffee-roasters">
                    <p>With all honesty it was quite a miserable Friday morning. Even though it was the beginning of July, the weather all week had decided it was still April, with chilly days and constant incessant rain. Today was no different, a light but steady drizzle that was annoying at the moment but could become miserable if given enough time. To top it all off, I was lost. Stopping on the empty sidewalk, I sighed and accepted that I had no idea where I was going. The cafe was supposed to be right in front of me, but all I could see was the blond of a hair salon advertisement and the bare brick wall next to it. Shielding my phone from the steady, oppressive drizzle, I pulled up maps and after a few moments realized I was not lost, just an idiot. Swearing softly under my breath, I walked around the corner, up the street, and then checked my phone a second time. Nope, exactly the wrong way. Cursing a bit more colorfully this time, I turned around and, eventually, blundered my way into Kestrel Coffee.</p>
                </section>

                <section class="second kestrel-coffee-roasters">
                    <p>Honestly I could be forgiven for missing it, I told myself as I opened the door. It was off the main road on the side of a massive brick building that, besides it’s size, was exceptionally nondescript. Shaking the beads of water from my coat and stomping my feet, I paused for a moment. That aroma. A rich nutty flavor with a slightly singed aftertaste. Coffee. Following the floor mats that were laid out like a red carpet to the promised land, I eagerly strode forward to the counter. Small and L shaped, it was situated almost out of the way in the far left corner. The barista was a guy in his late 20’s. From his long flowing hair, round glasses, and pants with a five inch cuff, my first impression of him was that his bike probably had a basket on the front exclusively for sharing his homemade sourdough. Considering my order, I decided on a whim to order a turtle latte. It was just a latte with chocolate and caramel in it, but I like turtles and it did sound pretty good. Mission completed, I turned around and took stalk of the rest of the store. </p>
                </section>
                
                <section class="third kestrel-coffee-roasters">
                    <p>Kestrel Coffee Roasters’ main room was a large, open space. Like I had noted earlier, the coffee counter itself was tucked away in a corner on the left side, on the wall closest to the street. The rest of the room was…empty. Sort of. To the immediate right of the doorway there was a decently large table that stretched the length of the area, wide and long enough to provide plenty of seating around the outside of it. Outside of the central table were several assorted small round tables scattered about, large enough for two. A few by the windows on the right side, a couple more on the left. Turning away from main area, I walked up a small ramp that led deeper into the building. It opened into a small, circular room that had several bikes chained to a bike rack in the middle. This place had indoor bike parking. Wandering onward, I discovered perhaps the most interesting aspect of Kestrel Coffee. It was not just a coffee shop but also a modern art gallery. All the art in the two main rooms were part of the gallery, the main part of which was a small three rooms was a modern art gallery. Although nothing caught my eye, I did find it interesting.</p>
                </section>
                
                <section class="fourth kestrel-coffee-roasters">
                    <p>After perusing the gallery for a few more minutes, I returned to tall blond and hipster to get my latte. Finding a seat at the large center table, I took my first sip and was immediately impressed. This was good coffee. Smooth and frothy, the combination of caramel and chocolate did not overwhelm the taste of the espresso, but rather enhanced it. Taking a second to savor the moment, I glanced around at my fellow customers. Very artsy. Lots of people in groups of twos and threes discussing business or projects, tapping away on their computers. While there were only around ten people there, most of the seats were taken. Probably around half. Sipping my excellent latte, I considered that. The aesthetic was extremely minimalistic. White walls, small pillars running up the middle, wooden windows and floors that appeared to have been left untouched. The only decorations were a few art pieces from the gallery and an elephant statue on the table. It seemed a bit depressing, in all honesty. But that could just be the rain. Finishing my truly excellent drink, I finished writing down my thoughts and walked back out into the drizzle.</p>
                </section>
                
                <section class="fifth kestrel-coffee-roasters">
                    <p>While writing this, two things really stuck out to me. The coffee is still the best that I have had in Burlington, and I did not like cafe. It was uncomfortable. With the old wood and all the white, it reminded me of an old hospital room or a nunnery. However, this is just my opinion and feeling. If this is your cup of tea, then you will probably love it at Kestrel. As for me, I will stick with my cup of coffee and continue looking for a more comfortable location.</p>
                </section>
                
                <section class="sixth kestrel-coffee-roasters">
                    <p>About Kestrel Coffee Roasters. I actually visited their second, branch location which opened in 2019. Their first original store opened in 2018 in South Burlington, and is where they roast their own coffee. The Burlington location is part of a building called the “Karma Bird House”, a 1916 warehouse (well that explains a lot) by the waterfront that has been restored and rents its space out. Kestrel and Iskra, the art gallery, are two of the main attractions for the building, but there are many different businesses that call the place home. It turns out the very skilled barista who made my coffee is names Ethan, so thanks for that man. Hope your bread baking has been going well.</p>
                </section>
                
                <section class="seventh kestrel-coffee-roasters">
                    <p>In conclusion, the coffee was excellent. The space was not for my taste, but clearly others like it and respect the dedication to the theme. Will I be going back? Most likely yes, I want to try a few other drinks, but I will be getting them to go.</p>
                </section> 

                <section class="last kestrel-coffee-roasters">
                    <p>Your Crafty Chic Commentator,</p>
                    <p>Nick</p>
                    <p>Kestrel’s Website:  <a href = "https://kestrelcoffees.com/">https://kestrelcoffees.com/</a></p>
                </section>

            </article>

        </main>

    <?php include '../footer.php'; ?>
    </body>

</html>