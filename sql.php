<?php 
    include "top.php"; 
?>

<main>
    <p>Create Table SQL</p>
<pre>

CREATE TABLE tblSurvey (
    pmkPuppySurvey INT AUTO_INCREMENT PRIMARY KEY,
    fldBreed VARCHAR(20),
    fldPuppies VARCHAR(20),
    fldName VARCHAR(30),
    fldEmailAddress VARCHAR(30),
    fldPhoneNumber VARCHAR(30),
    fldFeedback VARCHAR(200),
    fldInfo VARCHAR(1),
    fldUpdate TINYINT(1),
    fldDailyPics TINYINT(1)
)

INSERT INTO tblCCCForm (fldFavorite, fldOrder, fldName, fldEmailAddress, fldPhoneNumber, fldFeedback, fldInfo, fldUpdate, fldAllPosts) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)

('American', 'Harry', 'John Smith', 'johnsmith@email.com', '8028028028', 'This is some feedback', '1' '1' '1')


CREATE TABLE tblReview(
    pmkPlaceholderId INT AUTO_INCREMENT PRIMARY KEY,
	fldFlavor VARCHAR(255),
    fldAtmosphere VARCHAR(255),
    fldLocation VARCHAR(255),
    fldRating VARCHAR(255),
    fldVisit VARCHAR(255)
)

INSERT INTO tblReview
(fnkCafeID, fldFlavor, fldAtmosphere, fldLocation, fldRating, fldVisit)
VALUES
('Perky', 'Nothing special, but not terrible. Above average', 'Tiny shop, just a place to get a cup, not to hang out. Still feels cozy and friendly, with plenty of character', 'Perfect, right off Main St so it is close enough, but still far enough from the busy road to be a bit secluded', 'Three shots of espresso outa 5', 'If I am in the area')

INSERT INTO tblReview
(fnkCafeID, fldFlavor, fldAtmosphere, fldLocation, fldRating, fldVisit)
VALUES
('Kru', 'Delicious, but expensive. Very Expensive', 'Amazing, by far my favorite so far. A comfortable chaos of different colors, art, and styles that somehow all work together perfectly.', 'On Church and Pearl street, this cafe is in the middle of everything', '$$$$$$ outta five', 'Only after payday')

INSERT INTO tblReview
(fnkCafeID, fldFlavor, fldAtmosphere, fldLocation, fldRating, fldVisit)
VALUES
('Kestrel', 'Delicious, might be the best cup I ever had, although the price matched the flavor', 'Oppressively bland, like hanging out in an old timey hospital', 'Just off the beaten path, walking distance from the waterfront and the heart of Burlington', 'Why did the hipster burn his tongue? He drank his coffee before it was cold...', 'Ehhhhhhhhh probably not')

</pre>

</main>

<?php 
    include 'footer.php'; 
?>
</body>
</html>




