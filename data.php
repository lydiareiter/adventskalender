<?php
$data[0] = "Backe zu Weihnachten viele Kekse aus Glück, gehe damit Deines Weges und gib jedem ein Stück.";
$data[1] = "Heil'ge Nacht, mit tausend Kerzensteigst du feierlich herauf, o, so geh' in unsern Herzen, Stern des Lebens, geh' uns auf!";
$data[2] = "Wirklich Weihnachten ist dann, wenn die Stille der Heiligen Nacht auch in unser Herz gefunden hat.";
$data[3] = "Backe zu Weihnachten viele Kekse aus Glück, gehe damit Deines Weges und gib jedem ein Stück.";
$data[4] = "Das ist das Wunder der Heiligen Nacht, dass in die Dunkelheit der Erde die helle Sonne scheint.";
$data[5] = "Erst wenn Weihnachten im Herzen ist, liegt Weihnachten auch in der Luft.";
$data[6] = "Weiß sind Türme, Dächer, Zweige, und das Jahr geht auf die Neige, und das schönste Fest ist da!";
$data[7] = "Es fülle sich Dein Heim mit Glück, Dein Herz mit Liebe, Deine Tage mit Freude, an Weihnachten und das ganze Jahr.";
$data[8] = "Hell erleuchten alle Kerzen, mein Weihnachtsgruß, er kommt von Herzen!";
$data[9] = "Seht ihr den Stern am Himmel strahlen? Will er mit seiner Schönheit prahlen? Schön ist er wie kein andrer Stern. Ich wär' bei ihm so gern!";
$data[10] = "Ich wünsch' mir ein Geschenk, an das ich immer denk'. Doch es gibt ja auch noch dich, das ist genug für mich!";
$data[11] = "In der Geborgenheit der Familie Weihnachten feiern zu können, ist in der heutigen Zeit wohl das schönste aller Geschenke.";
$data[12] = "Das ist das Wunder der Heiligen Nacht, dass in die Dunkelheit der Erde die helle Sonne scheint.";
$data[13] = "Advent und Weihnachten sind wie ein Schlüsselloch, durch das auf unsrem dunklen Erdenweg ein Schein aus der Heimat fällt.";
$data[14] = "Liebe, Spaß und Freude liegen in der Luft. Also muss Weihnachten sein. ♡";
$data[15] = "Weihnachten ist nicht Weihnachten, wenn mann nicht bei seinen Liebsten sein kann.";
$data[16] = "Wahre Weihnacht ist dann, wenn der Mensch in Frieden leben kann. Das wünsch' ich euch, sowie Glück und Segen zu Weihnachten und auf all euren Wegen!";
$data[17] = "Schön ist die Weihnachtszeit so voller Freud' und Glückseligkeit.";
$data[18] = "Am Weihnachten geht es nicht um Geschenke sondern um die Liebe, die man mit einander teilt.";
$data[19] = "Hell erleuchten alle Kerzen, mein Weihnachtsgruß, er kommt von Herzen!";
$data[20] = "In ihrer Ungewissheit feiern wir die Weihnachtszeit.";
$data[21] = "Weihnachten ohne Geschenke ist kein Weihnachten mehr.";
$data[22] = "Weihnachtsfreude wird verkündet unter jedem Lichterbaum. Leuchte Licht mit hellem Schein, bei Dir soll heute Freude sein.";
$data[23] = "Frieden auf Erden bliebe bestehen, wenn die Besinnung von Weihnachten nicht würde gehen.";


if(isset($_GET["date"])) {
    $date = $_GET["date"];
   
    if($date < 24) {
        echo json_encode($data[$date - 1]);
    }
}

?>