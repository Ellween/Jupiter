<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home->Posts
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Artiles', route('posts'));
});

