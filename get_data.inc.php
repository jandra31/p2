<?php

class Database
{
    private static $init = FALSE;
    public static $conn;

    public static function initialize()
    {
        if (self::$init === TRUE) return;
        self::$init = TRUE;
        self::$conn = new mysqli("localhost", "root", "0000", "PROJECT2_DB");
    }
}

Database::initialize();

//insert post data into que query
function add_data($data)
{
    $name = $data['EVENT_NAME'];
    $date = $data['DUE_DATE'];
    $description = $data['EVENT_DESCRIPTION'];
    $type = $data['EVENT_TYPE'];
    $query = "INSERT INTO PAYMENTS(EVENT_NAME, EVENT_DESCRITPION,DUE_DATE, EVENT_TYPE) VALUES ('$name','$description','$date','$type')";
    mysqli_query(Database::$conn, $query);
}

//select query for the data
function view_data()
{
    //filter options creates a where statement for the query which is inserted before executing it
    switch ($_GET['FILTER']) {
        case 'P':
            $today = date("Y-m-d");
            $filter = " WHERE DUE_DATE > '$today' ";
            break;
        case 'D':
            $today = date("Y-m-d");
            $filter = " WHERE DUE_DATE < '$today' ";
            break;
        case 'M':
            $filter = " WHERE EVENT_TYPE = 'monthly' ";
            break;
        case '1':
            $filter = " WHERE EVENT_TYPE = 'one time' ";
            break;
        case 'O':
            $filter = " WHERE EVENT_TYPE = 'other' ";
            break;
        //if no filter option is present leaves it empty
        default:
            $filter = ' ';
    }

    $query = "SELECT * FROM PAYMENTS" . $filter . "ORDER BY DUE_DATE DESC ";
    $results = mysqli_query(Database::$conn, $query);

    //builds the output by looping through resuts and concatenating formated html to $html_out
    $html_out = '';
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            //color codes results based on when payments are due
            if ($row['DUE_DATE'] > date("Y-m-d")) {
                $background = 'background-color: lightgreen';
            } elseif ($row['DUE_DATE'] == date("Y-m-d")) {
                $background = 'background-color: lightgoldenrodyellow';
            } elseif ($row['DUE_DATE'] < date("Y-m-d")) {
                $background = 'background-color: lightpink';
            }
            $name = $row['EVENT_NAME'];
            $date = $row['DUE_DATE'];
            //format date
            $date = explode('-', $date);
            $date = $date[1] . '/' . $date[2] . '/' . $date[0];
            //!format date
            $description = $row['EVENT_DESCRITPION'];
            $type = $row['EVENT_TYPE'];

            $html_out .= "
                <div class='row common-padding-top-5'>
                    <div class='col-md-8 offset-md-2 common-padding-10' style='$background'>
                        <div class='text-center'>
                            $name
                        </div>
                        <div class='text-center'>
                            $description
                        </div>
                        <div class='text-center'>
                            $date
                        </div>
                        <div class='text-center'>
                            $type
                        </div>
                    </div>
                </div>
            ";
        }
        print $html_out;
    } else {
        echo "No results found";
    }
}
