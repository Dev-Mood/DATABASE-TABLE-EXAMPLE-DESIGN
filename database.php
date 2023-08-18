<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
        <title>Database Table</title>
    </head>
    <body>
        <div class="nav-container">
            <ul>
            <li><a href="#">Database: Users_reg <i class="fa fa-caret-right"></i> </a></li>
            <li><a href="#">Table: Users</a></li>
            </ul>
        </div>

        <div class="navbar">
            <ul>
            <li><a class='active' href="#"><i class="fa fa-list"></i> Browse</a></li>
            <li><a href="#"><i class="fa fa-road"></i> Structure</a></li>
            <li><a href="#"><i class="fa fa-file"></i> SQL</a></li>
            <li><a href="#"><i class="fa fa-search"></i> Search</a></li>
            <li><a href="#"><i class="fa fa-plus"></i> Insert</a></li>
            <li><a href="#"><i class="fa fa-download"></i> Export</a></li>
            <li><a href="#"><i class="fa fa-cloud-upload"></i> Import</a></li>
            <li><a href="#"><i class="fa fa-address-card"></i> Priviledges</a></li>
            <li><a href="#"><i class="fa fa-wrench"></i> Operations</a></li>
            <li><a href="#"><i class="fa fa-eye"></i> Tracking</a></li>
            <li><a href="#"><i class="fa fa-exclamation-triangle"></i> Triggers</a></li>
            </ul>
        </div>

        <div class="container-box">
            <input type="checkbox"> Profilling
            [<a href="#">Edit inline</a>]
            [<a href="#">Edit</a>]
            [<a href="#">Explain SQL</a>]
            [<a href="#">Create PHP code</a>]
            [<a href="#">Refresh</a>]
        </div>

        <div class="main-box">
            <input type="checkbox"> Show all | Number of rows <select>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            Filter rows: <input type="text" name="search" placeholder="Search this table">
        
            <div class="button-section">
            <button>Extra options</button>
        </div>
        </div>

        <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>fullname</th>
                <th>gender</th>
                <th>email</th>
                <th>password</th>
                <th>reg_date</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Windel</td>
                <td>Windel Navales</td>
                <td>Male</td>
                <td>hacks@gmail.com</td>
                <td>notprogrammer</td>
                <td>2023-08-17 19:45:38</td>
            </tr>
        </table>

        <div class="table-container">
            <input type="checkbox"> Show all | Number of rows: <select>
                <option value="1">1</option>
            </select>
            Filter rows: <input type="text" name="searchbox" placeholder="Search this table">
        </div>

        <fieldset>
            <legend>Query results operations</legend>
            <ul>
            <li><a href="#"><i class="fa fa-print"></i> Print</a></li>
            <li><a href="#"><i class="fa fa-clipboard"></i> Copy to clipboard</a></li>
            <li><a href="#"><i class="fa fa-download"></i> Export</a></li>
            <li><a href="#"><i class="fa fa-bar-chart-o"></i> Display chart</a></li>
            <li><a href="#"><i class="fa fa-search-plus"></i> Create view</a></li>
            </ul>
        </fieldset>

        <fieldset>
            <legend><i class="fa fa-book"></i> Bookmark this SQL query</legend>
            <label>Label:</label>
            <input type="text" name="searchfield">
            <input type="checkbox"> Let every user access this bookmark
            <div class="botton-bookmark">
                <button class="button-mark">Bookmark this SQL query</button>
            </div>
        </fieldset>

        <div class="last-container">
            <i class="fa fa-window-restore"></i> Console
        </div>
    </body>
</html>