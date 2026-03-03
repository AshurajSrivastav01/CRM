<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $Title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('asset/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/css/home.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/css/about.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/css/blog.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/css/contact.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/css/categories.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/css/categories.css') }}" rel="stylesheet">

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Blogosphere</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
                <div class="search-container ms-3">
                    <div class="search-icon" id="searchIcon">
                        <i class="bi bi-search"></i>
                    </div>
                    <form class="search-form" id="searchForm">
                        <input type="search" class="search-input" placeholder="Search..." aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </nav>
