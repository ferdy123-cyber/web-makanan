<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="style/css" href="../style.css">
    <link rel="icon" href="../assets/image/unilever-logo.png">
    <title><?php echo $title ?></title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap");

    * {
        font-family: "Poppins", sans-serif;
    }

    .navbar {
        background-color: #0b4769;
        min-height: 70px;
        font-size: 18px;
        font-weight: 300;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9;
    }

    .search input {
        width: calc(100%-200px);
        height: 44px;
        border-radius: 22px;
        text-align: center;
    }

    .search button {
        border-radius: 22px;
        background-color: rgb(93, 192, 93);
        border-color: rgb(93, 192, 93);
    }

    .carousel {
        margin: auto;
        max-width: 1000px;
        width: 100%;
        min-height: 400px;
        overflow: hidden;
        padding-top: 100px;
    }

    .img-carousel {
        width: 100%;
        height: 400px;
        object-fit: cover;
        object-position: bottom;
    }

    .chategory {
        width: 100%;
        max-width: 1140px;
        margin: auto;
        margin-top: 10px;
        box-sizing: border-box;
    }

    .title-category {
        margin-top: 20px;
        font-size: 32px;
        font-weight: 600;
    }

    .box {
        height: 150px;
        margin: 0px;
        padding: 2px;
        position: relative;
    }

    .img-chategory {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .text-category {
        position: absolute;
        top: 0;
        width: calc(100% - 4px);
        height: calc(100% - 4px);
        background-color: rgba(0, 0, 0, 0.3);
        padding: 2px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 22px;
        font-weight: 500;
        letter-spacing: 1px;
    }

    .title-newRecipe {
        margin-top: 20px;
        font-size: 32px;
        font-weight: 600;
    }

    .newRecipe {
        width: 98%;
        max-width: 1140px;
        margin: auto;
        margin-bottom: 30px;
    }

    .recipes {
        position: relative;
        padding: 5px;
        color: rgb(48, 45, 45);
        text-decoration: none;
    }

    .recipes:hover {
        color: rgb(48, 45, 45);
    }

    .recipes p {
        font-size: 18px;
        font-weight: 600;
        margin-top: 10px;
    }

    .img-newRecipe {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .detail {
        font-size: 12px;
        margin-top: 10px;
    }

    .detail i {
        margin-right: 2px;
        color: #0f5b86;
    }

    .detail span {
        color: rgb(131, 122, 122);
        margin-right: 8px;
    }

    .footer {
        width: 100%;
        background-color: #0b4769;
        color: rgb(216, 213, 213);
        text-align: center;
        padding-top: 15px;
    }

    .footer p {
        padding-top: 5px;
    }

    .footer li {
        font-size: 12px;
        margin-right: 15px;
        list-style: none;
        margin-bottom: 10px;
    }

    .footer a {
        color: rgb(216, 213, 213);
    }

    .footer a:hover {
        color: rgb(216, 213, 213);
    }

    .footer i {
        font-size: 42px;
    }

    .hero {
        margin-top: 70px;
        width: 100%;
        position: relative;
    }

    .hero-text {
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        z-index: 2;
        font-size: 28px;
        font-weight: 600;
        letter-spacing: 2px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content-recipe-bycategory {
        max-width: 1100px;
        width: 95%;
        margin: auto;
    }

    .left-content {
        margin: auto;
        margin-top: 20px;
        margin-bottom: 25px;
    }

    .right-content {
        height: 650px;
        position: sticky;
        top: 70px;
        padding-top: 10px;
    }

    .title-right {
        font-size: 20px;
        font-weight: 500;
        margin-top: 10px;
        text-align: center;
    }

    .new-recipes-ads {
        width: 100%;
        max-width: 700px;
        height: 100px;
        margin: auto;
    }

    .new-recipes-ads img {
        width: 150px;
        height: 95px;
        object-fit: cover;
    }

    .new-recipes-ads a {
        margin-left: 10px;
        font-size: 14px;
        font-weight: 500;
        color: #262729;
        text-decoration: none;
    }

    .detail-recipe-title {
        color: #262729;
        font-size: 36px;
        font-weight: 600;
        line-height: 40px;
    }

    .author {
        margin-top: 10px;
    }

    .author span {
        font-size: 13px;
        color: rgb(131, 122, 122);
    }

    .img-detail {
        width: 100%;
        margin-top: 10px;
    }

    .img-detail img {
        width: 100%;
    }

    .detail-desc {
        color: #262729;
        text-align: initial;
        font-size: 16px;
        line-height: 26px;
        letter-spacing: 0.5px;
        word-spacing: 3px;
        margin-top: 20px;
        margin-left: 2px;
    }

    .detail-desc img {
        width: 100%;
        object-fit: cover;
        margin: 5px 0px;
    }

    .needItem {
        width: 100%;
        justify-content: center;
    }

    .needItem .item {
        margin-bottom: 10px;
    }

    .need-title {
        height: min-content;
    }

    .need-title p {
        margin-bottom: 3px;
    }

    .ingredient {
        width: 100%;
    }

    .list-ingredient {
        text-align: left;
    }

    .list-ingredient li {
        list-style-position: inside;
    }

    .step {
        width: 100%;
    }

    .pagination a {
        color: #0f5b86;
    }

    .contentSearch {
        width: 100%;
        max-width: 1140px;
        margin: auto;
    }

    @media (max-width: 1015px) {
        .carousel {
            padding-top: 70px;
        }
    }

    @media (max-width: 992px) {
        .right-content {
            height: auto;
            position: inherit;
            top: 0;
            padding-top: 10px;
            margin-bottom: 30px;
        }

        .title-right {
            font-size: 22px;
            font-weight: 500;
            margin-top: 10px;
            text-align: center;
        }

        .new-recipes-ads {
            width: 100%;
            max-width: 700px;
            height: auto;
        }

        .new-recipes-ads img {
            width: 195px;
            height: 145px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .new-recipes-ads a {
            font-size: 18px;
        }
    }

    @media (max-width: 512px) {
        .new-recipes-ads img {
            width: 125px;
            height: 95px;
        }

        .new-recipes-ads a {
            font-size: 16px;
        }
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #262729;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #4e5474;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark shadow" style="margin-bottom: 20px;">
        <div class="container-fluid" style="width: 95%; max-width: 1100px">
            <a class="navbar-brand" style="margin-right: 80px;" href="#">
                <!-- <img width="50px" height="50px"
                    src="https://www.masakapahariini.com/wp-content/uploads/2021/08/Sayur-Labu-Siam-Kuah-Santan-400x240.jpg"
                    alt="" /> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $beranda ?>" aria-current="page"
                            href="<?php echo base_url() ?>beranda">Beranda</a>
                    </li>
                </ul>
                <form class="d-flex search" action="<?php base_url() ?>cari">
                    <input name='key' class="form-control me-2" type="search" placeholder="Cari resep"
                        aria-label="Search">
                    <button class="btn btn-success" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>