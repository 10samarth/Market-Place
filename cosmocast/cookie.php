<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

function set_login_cookie($name, $email, $user_id) {
    if (!isset($_COOKIE['UserName']) and !isset($_COOKIE['UserEmail'])) { 

        echo $_SERVER['HTTP_HOST'];

        setcookie('UserName', $name, time() + (86400 * 365), '/');
        $_COOKIE['UserName'] = $name;
        setcookie('UserEmail', $email, time() + (86400 * 365), '/');
        $_COOKIE['UserEmail'] = $email;
        setcookie('user_id',  $user_id, time() + (86400 * 365), '/');
        $_COOKIE['user_id'] = $user_id;

        setcookie('sammy', 1, time() + (86400 * 365), '/');

        echo "<h1>login cookie set!/////</h1>";
        echo $_COOKIE['UserName'];
        echo $_COOKIE['user_id'];
        echo $_COOKIE['UserEmail'];
        echo $_COOKIE['sammy'];

        var_dump($_COOKIE);
        
    }
}

function set_pages_cookie($pname) {
    if (!isset($_COOKIE['top_pages']) and !isset($_COOKIE['recent_pages'])) {
        $top_pages = array();
        $top_pages[$pname] = 1;
        $recent_pages = array($pname);
        setcookie('top_pages', json_encode($top_pages), time() + (86400 * 365), '/cosmocast');
        setcookie('recent_pages', json_encode($recent_pages), time() + (86400 * 365), '/cosmocast');
        setcookie('visitCount', 1, time() + (86400 * 365), '/cosmocast');
    }
}
function update_pages_cookie($pname) {
    if (isset($_COOKIE['top_pages']) and isset($_COOKIE['recent_pages'])) {
        $recent_pages = json_decode($_COOKIE['recent_pages'], true);
        $top_pages = json_decode($_COOKIE['top_pages'], true);
        $visitCount = $_COOKIE['visitCount'];
        
        //update recent viewed pages
        if (count($recent_pages) > 4) {
            $recent_pages[($visitCount - 1) % 5] = $pname;
        } else {
            array_push($recent_pages, $pname);
        }
        //top visited pages
        $page_count = $top_pages[$pname] + 1;
        $top_pages[$pname] = $page_count;
        arsort($top_pages);
        setcookie('top_pages', json_encode($top_pages), time() + (86400 * 365), '/cosmocast');
        setcookie('recent_pages', json_encode($recent_pages), time() + (86400 * 365), '/cosmocast');
        setcookie('visitCount', $visitCount + 1, time() + (86400 * 365), '/cosmocast');
    }
}
function get_pages_cookie() {
    if (isset($_COOKIE['top_pages']) and isset($_COOKIE['recent_pages'])) {
        $recent_pages = json_decode($_COOKIE['recent_pages'], true);
        $len = count($recent_pages) - 1;
        echo "<h3>Last five previously visited products</h3>";
        echo "<table class=\"contactsTbl mt-5\">";
        echo "<th>Page Name</th>";
        echo "<th>Visit</th>";
        for ($i = $len;$i > - 1;$i--) {
            echo "<tr>";
            echo "<td>";
            echo $recent_pages[$i];
            echo "</td>";
            echo "<td>";
            echo '<a style="color:white" href="/cosmocast/Services/' . $recent_pages[$i] . '" >Click Me</a>';
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data";
    }
}
function get_top_pages_cookie() {
    if (isset($_COOKIE['top_pages']) and isset($_COOKIE['recent_pages'])) {
        $top_pages = json_decode($_COOKIE['top_pages'], true);
        $keys = array_keys($top_pages);
        $len = count($keys) > 5 ? 5 : count($keys);
        echo "<h3>Five most visited products</h3>";
        echo "<table class=\"contactsTbl mt-5\">";
        echo "<th>Page Name</th>";
        echo "<th>Count</th>";
        echo "<th>Visit</th>";
        for ($i = 0;$i < $len;$i++) {
            echo "<tr>";
            echo "<td>";
            echo $keys[$i];
            echo "</td>";
            echo "<td>";
            echo $top_pages[$keys[$i]];
            echo "</td>";
            echo "<td>";
            echo '<a style="color:white" href="/cosmocast/Services/' . $keys[$i] . '" >Click Me</a>';
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data";
    }
}
?>