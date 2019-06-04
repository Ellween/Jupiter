<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home->Articles
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Artiles', route('posts'));
});

// Home->Drafts
Breadcrumbs::for('drafts', function ($trail) {
    $trail->parent('home');
    $trail->push('Drafts', route('drafts'));
});

// Home->Published
Breadcrumbs::for('published', function ($trail) {
    $trail->parent('home');
    $trail->push('Published', route('published'));
});

// Home->Searched
Breadcrumbs::for('Searched', function ($trail) {
    $trail->parent('home');
    $trail->push('Searched', route('Searched'));
});
