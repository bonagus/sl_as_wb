<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SLAS WEB</title>
    <link rel="shortcut icon" type="x-icon" href="" />

    <meta name="description" content="app_desc">
    <meta name="keywords" content="">
    <meta name="author" content="app_author">

    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/bootstrap.min.css" type="text/css">
    <style type="text/css">
      body {
        font-size: .875rem;
      }

      .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
      }

      /*
       * Sidebar
       */

      .sidebar {
        position: fixed;
        top: 0;
        /* rtl:raw:
        right: 0;
        */
        bottom: 0;
        /* rtl:remove */
        left: 0;
        z-index: 100; /* Behind the navbar */
        padding: 48px 0 0; /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      }

      @media (max-width: 767.98px) {
        .sidebar {
          top: 5rem;
        }
      }

      .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
      }

      .sidebar .nav-link {
        font-weight: 500;
        color: #333;
      }

      .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #727272;
      }

      .sidebar .nav-link.active {
        color: #007bff;
      }

      .sidebar .nav-link:hover .feather,
      .sidebar .nav-link.active .feather {
        color: inherit;
      }

      .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
      }

      /*
       * Navbar
       */

      .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
      }

      .navbar .navbar-toggler {
        top: .25rem;
        right: 1rem;
      }

      .navbar .form-control {
        padding: .75rem 1rem;
        border-width: 0;
        border-radius: 0;
      }

      .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
      }

      .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
      }

      .footer {
        position: fixed;
        /*top: 0;*/
        /* rtl:raw:
        right: 0;
        */
        bottom: 0;
        /* rtl:remove */
        /*left: 0;*/
        z-index: 100; /* Behind the navbar */
        /*padding: 99px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);*/
      }

    </style>
</head>
<body>
    <noscript>
        <meta http-equiv="refresh" content="0; url=<?= base_url() ?>noscript.html" />
    </noscript>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </header>