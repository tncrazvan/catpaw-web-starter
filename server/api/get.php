<?php

use const CatPaw\Web\APPLICATION_JSON;

use CatPaw\Web\Attributes\ProducesItem;

class Quote {
    public function __construct(
        public string $content,
    ) {
    }
}

return
#[ProducesItem(
    Quote::class,
    APPLICATION_JSON,
    new Quote( content: '"Cats are connoisseurs of comfort." - James Herriot' ),
)]
function() {
    static $lines = [
        '"Cats are connoisseurs of comfort." - James Herriot',
        '"Just watching my cats can make me happy." - Paula Cole',
        '"I\'m not sure why I like cats so much. I mean, they\'re really cute obviously. They are both wild and domestic at the same time." - Michael Showalter',
        '"You can not look at a sleeping cat and feel tense." - Jane Pauley',
        '"The phrase \'domestic cat\' is an oxymoron." - George Will',
        '"One cat just leads to another." - Ernest Hemingway',
    ];

    return new Quote(content: $lines[array_rand($lines)]);
};