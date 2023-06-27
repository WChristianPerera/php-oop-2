<?php

$categories = [
    new Category(1, 'Cats'),
    new Category(1, 'Dogs'),
];

$arrProduct = [
    new Food(1,'food.jpg', 'Kibble', 17, $categories[0]),
    new Game(1,'ball.jpg','Bouncing-Ball', 6, $categories[0]),
    new Kennel(1,'kennel.jpg', 'Kennel', 50, $categories[0]),
];