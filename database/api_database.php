<?php

$disc_list = [
  [
    "author" => "Bon Jovi",
    "cover" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
    "title" => "New Jersey",
    "year" => "1988",
    "genre" => "Rock"
  ],
  [
    "author" => "Queen",
    "cover" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
    "title" => "Live at Wembley 86",
    "year" => "1992",
    "genre" => "Pop"
  ],
  [
    "author" => "Sting",
    "cover" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
    "title" => "Ten's Summoner's Tales",
    "year" => "1993",
    "genre" => "Pop"
  ],
  [
    "author" => "Steve Gadd Band",
    "cover" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
    "title" => "Steve Gadd Band",
    "year" => "2018",
    "genre" => "Jazz"
  ],
  [
    "author" => "Iron Maiden",
    "cover" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
    "title" => "Brave new World",
    "year" => "2000",
    "genre" => "Metal"
  ],
  [
    "author" => "Eric Clapton",
    "cover" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
    "title" => "One more car, one more raider",
    "year" => "2002",
    "genre" => "Rock"
  ],
  [
    "author" => "Deep Purple",
    "cover" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
    "title" => "Made in Japan",
    "year" => "1972",
    "genre" => "Rock"
  ],
  [
    "author" => "Metallica",
    "cover" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
    "title" => "And Justice for All",
    "year" => "1988",
    "genre" => "Metal"
  ],
  [
    "author" => "Dave Weckl",
    "cover" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
    "title" => "Hard Wired",
    "year" => "1994",
    "genre" => "Jazz"
  ],
  [
    "author" => "Michael Jacjson",
    "cover" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
    "title" => "Bad",
    "year" => "1987",
    "genre" => "Pop"
  ]
];

// var_dump($disc_list);
header("content-type: application/json");
echo json_encode($disc_list);
?>
