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

function get_top_rated_page( $url ){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}


if (isset($_GET["getAllCompanyContacts"])) {
    fetchContacts();
}
?>
