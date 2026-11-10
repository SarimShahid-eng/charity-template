<?php

// Friendly names + hints for each block (section) of each page, shown in the admin page editor.
$banner = ['Page title banner', 'The title strip at the top of the page: background picture, page title and the small "Home › page" trail.'];
$news   = ['Newsletter banner', 'The coloured strip near the bottom with the subscribe box.'];
$mission = ['Make a difference', 'Call-to-action block: "Make a difference today / Join mission" text, icons and figures.'];

return [
    'home' => [
        'Hero Banner'           => ['Top banner', 'The first big screen visitors see: button label, supporter photos and the main picture. (The big heading and intro text are in "Logo & site info → Home banner text".)'],
        'Feature Block One'     => ['Four icon boxes', 'Row of four small icon boxes right below the top banner.'],
        'Feature Block Two'     => ['About us', 'The "About us" block with pictures, headline and short story.'],
        'Causes Section One'    => ['Campaigns heading', 'Title above the donation cards. The cards themselves are managed in "Donation campaigns".'],
        'Feature Block Three'   => $mission,
        'Event Section One'     => ['Upcoming events', 'The list of events with picture, date, title and time.'],
        'Feedback Section One'  => ['Testimonials', 'What your supporters and volunteers say about you.'],
        'Feature Block Four'    => ['Donate now block', 'Block with the "Donate now to make an impact" text and volunteering points.'],
        'Blog Section One'      => ['News & articles', 'Latest news cards with picture, author and date.'],
        'Fancy Banner One'      => $news,
    ],
    'donations' => [
        'Inner Banner'          => $banner,
        'Causes Section One'    => ['Campaign list heading', 'Title above the donation cards. The cards themselves are managed in "Donation campaigns".'],
        'Fancy Banner One'      => $news,
    ],
    'about' => [
        'Inner Banner'          => $banner,
        'Feature Block Two'     => ['About us intro', 'Pictures, headline and short story about your organisation.'],
        'Feature Block Seven'   => ['Four icon boxes', 'Row of four small icon boxes describing what you do.'],
        'Counter Sectiom One'   => ['Numbers (counters)', 'The big animated figures, e.g. charities supported, money raised.'],
        'Feature Block Three'   => $mission,
        'Feedback Section Two'  => ['Testimonials', 'Quotes from supporters, with their names and photos.'],
        'Feature Block Eight'   => ['Questions & answers (FAQ)', 'Frequently asked questions and their answers.'],
        'Fancy Banner One'      => $news,
    ],
    'contact' => [
        'Inner Banner'          => $banner,
        'Contact Section'       => ['Contact boxes & form text', 'Titles of the address / phone / email boxes and the heading above the contact form. (Your real address, phone and email are in "Logo & site info".)'],
        'Fancy Banner One'      => $news,
    ],
];
