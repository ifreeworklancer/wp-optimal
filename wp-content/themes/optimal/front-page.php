<?php

get_header();


$sections = [
    'intro',
    'advantages',
    'about',
    'category',
    'laboratory',
    'work',
    'contacts',
    'sale',
    'certificates',
];

foreach ($sections as $section) {
    include(__DIR__ . '/includes/template-parts/' . $section . '.php');
}

get_footer();