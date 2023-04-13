<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/adminpanel.css" />
</head>

<body>

    <header>
        <a href="index.html" class="logo">Home</a>
        <nav>
            <ul>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="hero-section-admin">
        <div class="row">
            <div class="columns">
                <h1>Filters</h1>
            </div>
            <div class="columns">
                <button class="button">Rap</button>
                <button class="button">RnB</button>
                <button class="button">Techno</button>
            </div>
            <div class="columns">
                <input type="search" placeholder="Search for a song...">
                <button class="button">Search</button>
                </ul>
            </div>

            <div class="row tabela">
                <table class="table-expand">
                    <thead>
                        <tr class="table-expand-row">
                            <th width="200">Artist</th>
                            <th width="200">Song name</th>
                            <th class="text-right" width="150">Category</th>
                            <th width="150">Release date</th>
                            <th width="150">Best ranking</th>
                            <th width="150"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-expand-row" data-open-details>
                            <td>LL COOL J</td>
                            <td>Ain't nobody</td>
                            <td class="text-right">RnB</td>
                            <td>1983</td>
                            <td>5</td>
                            <td><button class="button">Details</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </div>

    <div class="sticky-footer-css">
        <div class="columns shrink footer text-center">
            <p>©Danilo Popovic.All rights reserved</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
</body>

</html>