<?php


$new = [

    "new_nice"=>[

        "new_nice_one" =>[

                "apple",
                "orange",
                "banana"
        ]

    ],

];

//print_r($new);

//echo $new["new_nice"]["new_nice_one"][1];



$multi = [

    ["a", "b", "c"],
    ["d", "e", "f", "g"],
    ["h", "i", "j", "k", "l"],
    ["m", "n", "o", "p", "q", "r"],
    ["s", "t", "u", ["v", "w", "x", "y", "z"]]

];

//print_r($multi);

echo $multi[4][3][2];