<?php 

include "../top.php"; 

?>
        <main class="perky-planet-coffee">
            <h2>Perky Planet Coffee</h2>
                <article>
                    <h2><em>Definitely not planet sized, this tiny café more then makes up for it in personality</em></h2>
                        <section class="perky-planet-coffee table">
                        
                            <table>

                                <?php
                                $sql = 'SELECT fnkCafeID, fldFlavor, fldAtmosphere, fldLocation, fldRating, fldVisit FROM tblReview WHERE fnkCafeID =? ';

                                $data=array('Perky');
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

                    <section class="first perky-planet-coffee">
                        <p>Walking west along King St, the first I saw of Perky Planet Coffee was the northern side window, filled with so many lights and flags that the view of the interior was almost entirely obscured. It was a pretty hot day, and only one of the tables outside was occupied by a college kid, reading some paperback. Walking up the steps, I pushed my way into the delightfully cool interior, pausing for a moment to take in the delightful chaos that greeted me. It felt lived in, like visiting my grandma’s house and seeing the clutter that she has had a lifetime to collect and display. It may seem unorganized at first, but that sweet’s jar on top of the white doily has been there longer then I’ve been alive. I got a similar feeling about this café. </p>
                    </section>

                    <section class="third perky-planet-coffee">
                        <p>The fridge to the immediate left of the door was crammed with all sorts of snacks and too expensive sparkling waters. To the right was a counter with assorted creamers and sugars on it, with a bar and one more table for indoor dining just a bit further on. Directly in front of me was the counter. Walking up to it, I noticed a cardboard cutout of Bernie Sanders at the far end of the room, watching the only other customer tap away at her MacBook. It was only when I reached the counter that I noticed the barista, an older, heavier gentleman, was sitting in a rolling chair. I gave him my order (medium americano on ice), paid my 3$, and then watched in slight bemusement as he expertly rolled his way around, using his hands to pull himself along. As he gave me my coffee, he went back to reading, and I walked out into the oppressive heat. Exchange complete. </p>
                    </section>

                    <section class="fourth perky-planet-coffee">
                        <p>The location that started it all, Perky Planet is tiny corner café located just a few blocks away from the Lake Champlain waterfront. While small, the place is stuffed full of all sorts of fun stuff. Like I mentioned above, the Bernie Sanders cut out is a fun touch, and is featured in a ton of the café’s social media presence. It was there that I found out from a short NBC news clip that the location has made it “one of their goals to employ people with disabilities”. There is a sign on the wall that explains that the owner had suffered a spinal cord injury, and after relearning how to walk, he opened Perky Planet to “Provide meaningful and long-term employment for people with disabilities”. The same sign goes on to talk about setting an example for other businesses, and the hope that they will see the potential disabled individuals have.</p>
                    </section>

                    <section class="fifth perky-planet-coffee">
                        <p>With all this background, it definitely explains the barista on his roller chair. Thinking back, it could have even been the owner. I just got that vibe from him when I owed three dollars and a dime, and he waved the dime away. Going back to that news clip from earlier, it goes on to state that all the coffee is sourced from exclusively female farmers. So all in all, this place seems really rad. But, is it worth visiting?</p>
                    </section>

                    <section class="sixth perky-planet-coffee">
                        <p>I do want to revisit Perky Planet Coffee. When I went, I was not in the best of moods and that probably effected my opinion on the coffee. Also, it was just such a fun store. Would I make it my go to coffee location? No, I do not think I will. It is just so small there is no place to sit even on a slow day, and on a busy one good luck. As for the coffee, it was aggressively okay, nothing special. In conclusion, fun location to visit once or twice, but that’s about it.</p>
                    </section>

                    <section class="last perky-planet-coffee">
                        <p>Your Casual Café Critic,</p>
                        <p>Nick</p>
                        <p>EDIT: They are currently having a GoFund me to survive Covid! Visit their website below to go help them!</p>
                        <p><a href="https://www.perkyplanet.org/">PerkyPlanet.org</a></p>
                        <p><a href="https://www.sevendaysvt.com/vermont/perky-planet-cafe-will-employ-people-with-disabilities/Content?oid=13596011">Sevenday's Article on Perky Planet</a></p>
                    </section>
                </article>
        </main>

    <?php include '../footer.php'; ?>
    </body>

</html>