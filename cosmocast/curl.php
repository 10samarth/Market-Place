<?php
function fetchContacts()
{
    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "https://danielsjsu.com/company/userSearch.php"
    );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $lines = explode("\n", $response);
    
    echo '<div class="container sectionSeperator mt-5">';
    echo '<p>Fetching contacts using cURL....';
    $count = 0;
    if (count($lines) > 0) {
        echo "<h2 mt-5>Company B Ecode Staff Page</h2>";
        echo "<table class=\"contactsTbl\">";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Email</th>";
        echo "<th>Address</th>";
        echo "<th>Home phone</th>";
        echo "<th>Cell phone</th>";
        foreach ($lines as $line) {
            if (strpos($line, "First Name") !== false){
                $data = explode("<br>", $line);
                foreach ($data as $contact) {
                    if (strlen($contact) > 0) {
                        $value = explode(":", $contact);
                        if ($count % 6 == 0) {
                            echo "<tr>";
                        }
                        $col = 0;
                        foreach ($value as $attr) {
                            if ($col == 1) {
                                echo "<td>";
                                echo $attr;
                                echo "</td>";
                            }
                            $col += 1;
                        }
                        if ($count + (1 % 6) == 0) {
                            echo "</tr>";
                        }
                        $count += 1;
                    }
                }
            }
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "error parsing page, showing raw data below";
        echo $response;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.koushikp25.com/contacts.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo '<div class="container sectionSeperator mt-5">';
    echo "<h2 mt-5>Company C</h2>";
    echo $response;
    echo "</div>";
}

function get_web_page( $url, $cookiesIn = '' ){
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => true,     //return headers in addition to content
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        CURLINFO_HEADER_OUT    => true,
        CURLOPT_SSL_VERIFYPEER => true,     // Validate SSL Certificates
        CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
        CURLOPT_COOKIE         => $cookiesIn
    );

    $ch      = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $rough_content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

    $header_content = substr($rough_content, 0, $header['header_size']);
    $body_content = trim(str_replace($header_content, '', $rough_content));
    $pattern = "#Set-Cookie:\\s+(?<cookie>[^=]+=[^;]+)#m"; 
    preg_match_all($pattern, $header_content, $matches); 
    $cookiesOut = implode("; ", $matches['cookie']);

    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;
    $header['headers']  = $header_content;
    $header['content'] = $body_content;
    $header['cookies'] = $cookiesOut;
return $header;
}


if (isset($_GET["getAllCompanyContacts"])) {
    fetchContacts();
}
?>
