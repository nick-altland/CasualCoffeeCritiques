<?php include "../top.php"; ?>

        <main class="kru-coffee-collective">
            <h2>Kru Coffee Collective</h2>
            <article>
                <h3><em>Located on Church street, this colorful coffee shop has delicious drinks, an amazing location, and a carefully curated personality that I absolutely adore</em></h3>
                <section class=" table">
                    <table>
                        
                        <?php
                        $sql = 'SELECT fnkCafeID, fldFlavor, fldAtmosphere, fldLocation, fldRating, fldVisit FROM tblReview WHERE fnkCafeID =? ';

                        $data=array('Kru');
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
                
                <section class="first kru-coffee-collective">
                    <p>First impression? Color and carefully crafted disorder. While the walls are painted white, they all have some sort of texture to them. Tables, chairs, and couches sit at regular intervals. The space is full, but in a comfortable way, even with how many people there are at the moment. The disorder comes from the riot of colors. Not quite pastel, slightly dull but with a lot of personality. Orange and yellow and purple and green. Think “That 70’s Show” and you are on the right track. All the art is along the same color line, but with just enough splashes of bright contrasts to make it interesting. The tables are made of old worn wood and stained dark brown. Well, the one I am sitting at is. Both tables and chairs are a mishmash of several different sets, none of them matching. There are around a dozen bar stools at the windows, facing both Church and Pearl street. A long bench takes up the entirety of the eastern wall, with three tables set up next to it. In the middle of the floor are two more tables and chairs, smaller with seating for two. On either side of these are two different sets of these adorably ugly couches and chairs, with coffee tables placed between them. Finally, there is a cubby right next to the entrance with another lounge seating option, but this one has simpler, more boring white sofas. </p>
                </section>

                <section class="second kru-coffee-collective">
                    <p>Right when you walk in there is a sign directing traffic to the right, where you can order. There are two large TVs on the right wall, displaying the menu, but there are also a few more old fashioned blackboards covered in colorful chalk further down on the wall. The counter itself takes up the entire western wall, over a quarter of the entire room. It is stuffed with such a variety of machines that an organic chemist would be jealous. There are at least three baristas at a time, flitting back and forth, taking orders and making drinks. On the wall behind the middle of the bar is a large stained glass art piece of a steaming cappuccino cup, with light shining through from behind.  The bar itself is fronted with these lovely triangular brown tiles. Four large pillars run down the center of the room, probably concrete but made to look like classical roman marble. The high ceiling has several, curving filigreed plaster parts that add texture to the surface. On the other hand, the floor is made of long, wide cut wooden plants, stained a dark brown that still allows the grain to show through. </p>
                </section>

                <section class="third kru-coffee-collective">
                    <p>Lights hang down from the ceiling. Above the bar, single bulbs in glass cases sit at six foot intervals. The bulbs themselves are interesting, about a hand and a half long and emitting a soft yellow light. These are unique to the bar, as each “section” of the room has its own different light fixtures. The two tables and matching lounge sets in the middle of the room are lit by five cornered metal, egg shaped fixtures that hang from above. The bench on the eastern wall is lit by a row of tiny bulbs in a brown half shell shade. However, my favorite light source in the entire building is an art, consisting of twenty-four clay coffee cups, painted five different shades with a light pastel glaze. They are set in rows of eight-seven-eight on the northern wall, and a soft pink light shines gently from each. Very lovely effect, all told, even if it is more for show then function. Finally, the bar stools by the large glass windows are lit by bulbs in small glass balls, suspended in metal hoops.</p>

                    <figure class = "kru-coffee-collective">
                        <img src="../images/kruCoffeeWideShot.jpg" alt="picture of kru">
                    </figure>
                </section>

                <section class="fourth kru-coffee-collective">
                    <p>This place is busy. Almost every space is taken. I am currently sharing a table in the far back left corner with a guy nursing an empty cup, just hanging out and texting. While there are a few other people with their laptops working, the clientele seem to be mostly people just dropping by to talk and hang out with friends. I have to say, the variety of people here is quite impressive. Yes, the majority are the younger, early to late twenties individuals you expect to find in college town coffee shop, but there have been people from all walks of life drift through. This is most likely thanks to its position at the end of Church street, the most popular tourist destination in the city.</p>
                </section>

                <section class="fifth kru-coffee-collective">
                    <p>As for the coffee, well, I have no idea. I didn’t order one. I got a 20oz green matcha tea since I had already had a latte at another place and was still slightly buzzing. I have no idea what a matcha tea is, but it was just over 7$, and I ended up enjoying it immensely. A sip begins with the bold flavor of the creamy oat milk, but fades slowly into the almost bitter taste of the tea. The texture is a little gritty almost, even through the frothy cream of the milk. It is different, but really good. And, after googling what it is, I am now immune to all diseases after drinking it.</p>
                </section>

                <section class="sixth kru-coffee-collective">
                    <p>I really liked Kru Coffee Collective. A lot. From the moment I walked in I just gelled with the atmosphere. The riot of colors and decor just feels whimsical and wonderful, and despite how busy it was, way more people then I like to be around usually, I just felt comfortable. This place feels like someone started with the bones of a modern coffee shop, then built their own personal dream store, carefully placing each individual piece into its place until their vision was complete. The end result is wonderful.</p>
                </section>

                <section class="seventh kru-coffee-collective">
                    <p>Kru Coffee Collective is actually a chain, with the one location in Burlington and another in Saratoga, New York. The Saratoga location is the original, with the Burlington store opening in March of 2020. Not an auspicious start date, the savvy reader might note, but despite this it seems like the second location has succeeded in staying alive and even prosper. </p>
                </section>

                <section class="eighth kru-coffee-collective">
                    <p>The background of Kru is actually very interesting. According to their website, this all came about when the founders, the Brock’s, decided to grow coffee at their house in Hawaii. After building it out and working on it for 10 years, they decided to open a coffee roasting/cafe in Saratoga. While that farm is the original source, Kru has branched out to different sources to keep up with the demand of selling wholesale coffee, alongside their two locations. Their tag line is “Get Roasted”. </p>
                </section>

                <section class="ninth kru-coffee-collective">
                    <p>Kru is a family owned business, and the Burlington store is managed by husband and wife team Tom and Lisa Weber. Tom is in charge of the kitchen, but it turns out the individual responsible for the “Whimsical color and patterns, as well as the eclectic style of the customer seating” is Lisa. Eclectic, what a wonderful word. She also features a local artist every few months to change up the decor, which is a neat idea.</p>
                </section>

                <section class="tenth kru-coffee-collective">
                    <p>In addition to selling coffee, the Burlington location is also a bakery, selling a variety of baked goods made daily. Their Facebook is plastered with trays upon trays of donuts that, I have to admit, are making me very hungry. In fact, that seems to be all they post there. Donuts. No wait there was one that was a sandwich. Looks like a good sandwich. Anyways, although I have not tried the food, the reviews on Yelp and Restaurant Rant are glowing, so I can only assume they are wonderful. This applies to the coffee as well, which is why I am comfortable posting this after only trying one green magic juice. </p>
                </section>

                <section class="eleventh kru-coffee-collective">
                    <p>In conclusion, I like Kru, but I am not sure if it will become my go to spot. The prices are very high, which has to be taken into consideration, but more so just how busy it was. It is a personal preference, but I prefer to more quieter spaces to work and relax in. I will have to visit a few more times to see if it was the time/day I went, but from talking with friends it seems like Kru is always popping. However, I might go despite this. Looking back over what I wrote, I spent an absurd amount of time going over the decor and the lighting and all that. But it was all so special I just wanted to give a clear impression of how much work went into this. I will say it again, I really really liked it. Kru is definitely worth a visit, would recommend.</p>
                </section>

                <section class="last kru-coffee-collective">
                    <p>Your Communal Communist Comrade,</p>
                    <p>Nick</p>
                    <p>Kru’s Website:  <a href = "https://krucoffee.com/">https://krucoffee.com/</a></p>
                    <p><a href = "https://www.saratoga.com/saratogabusinessjournal/2020/01/owners-of-kru-coffee-in-saratoga-springs-to-open-second-shop-in-burlington-vermont/">Article about opening the Burlington store </a></p>
                </section>

            </article>

        </main>

    <?php include '../footer.php'; ?>
    </body>

</html>