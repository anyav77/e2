<?php

return [
    '/' => ['AppController', 'index'],
    '/contact' => ['AppController', 'contact'],
    '/about' => ['AppController', 'about'],
    '/products' => ['ProductController', 'index'],
    '/product' => ['ProductController', 'show'],
    '/products/save-review' => ['ProductController', 'saveReview'],
    '/practice' => ['AppController', 'practice'],
    '/practice2' => ['AppController', 'practice2'],
    '/products/new' => ['ProductController', 'newproduct'],
    '/products/add-product' => ['ProductController', 'addproduct'],
];
