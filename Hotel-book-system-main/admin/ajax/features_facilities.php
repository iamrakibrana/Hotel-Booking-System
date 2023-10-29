<?php

require('./admin/include/db_config.php');
require('./admin/include/essentials.php');
adminLogin();


if (isset($_POST['add_feature'])) {
    $hname = 'localhost';
    $uname = 'root';
    $pass = '1234';
    $db = 'hbwebsite';

    // Initialize connection
    $con = mysqli_connect($hname, $uname, $pass, $db);
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Include the filteration function code here
    function filteration($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = trim($value);
            $data[$key] = stripslashes($value);
            $data[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            $data[$key] = strip_tags($value);
        }
        return $data;
    }

    $frm_data = filteration($_POST);
    $name = $con->real_escape_string($frm_data['feature_name']); // Correct the field name
    
    // Use prepared statement to insert data
    $stmt = $con->prepare("INSERT INTO `hbwebsite`.`features` (`name`) VALUES (?)");
    $stmt->bind_param("s", $name); // "s" indicates a string type

    if ($stmt->execute()) {
        echo "success"; // Return a success response
    } else {
        echo "Failed to add feature: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}


// if(isset($_POST['get_all_rooms']))
// {
//     $res = selectAll('rooms');
//     $i = 1;

//     $data = "";

//     while($row = mysqli_fetch_assoc($res))
//     {
//         if($row['status'] == 1)
//         {
//             $status = "<button onclick='toggle_status($row[id], 0)' class='btn btn-success btn-sm shadow-none'>active</button>
//             ";
//         }
//         else {
//             $status = "<button onclick='toggle_status($row[id], 1)' class='btn btn-warning btn-sm shadow-none'>inactive</button>
//             ";
//         }


//         $data.= "
//             <tr class='align-middle'>
//                 <td>$i</td>
//                 <td>$row[name]</td>
//                 <td>$row[area] sq. ft.</td>
//                 <td>
//                     <span class='badge rounded-pill bg-light text-dark'>
//                         Adult: $row[adult]
//                     </span><br>
//                     <span class='badge rounded-pill bg-light text-dark'>
//                         Adult: $row[children]
//                     </span>
//                 </td>
//                 <td>৳$row[price]</td>
//                 <td>$row[quantity]</td>
//                 <td>$status</td>
//                 <td>
//                 <button type='button' onclick='edit_details($row[id])' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#edit-room'>
//                     <i class='fa-solid fa-pen-to-square'></i>
//                 </button>
//                 </td>
//             </tr>
//         ";
//         $i++;
//     }

//     echo $data;
// };



// if(isset($_POST['get_room']))
// {
//     $frm_data = filteration($_POST);

//     $res1 = select("SELECT * FROM `rooms` WHERE `id`=?", [$frm_data['get_room']], 'i');

//     $roomdata = mysqli_fetch_assoc($res1);

//     $data = ["roomdata" => $roomdata];
//     $data = json_encode($data);

//     echo $data;

// };



// if(isset($_POST['edit_room']))
// {
//     $frm_data = filteration($_POST);
//     $flag = 0;

//     $q1 = "UPDATE `rooms` SET `name`=?, `area`=?, `price`=?, `quantity`=?, `adult`=?, `children`=?, `description`=? WHERE `id`=?";
//     $values = [$frm_data['name'], $frm_data['area'], $frm_data['price'], $frm_data['quantity'], $frm_data['adult'], $frm_data['children'], $frm_data['desc'], $frm_data['room_id']];

//     if(update($q1, $values, 'siiiiisi')){
//         $flag = 1;
//     }
// };





// if(isset($_POST['toggle_status']))
// {
//     $frm_data = filteration($_POST);

//     $q = "UPDATE `rooms` SET `status`=? WHERE `id`=?";
//     $v = [$frm_data['value'], $frm_data['toggle_status']];

//     if(update($q, $v, 'ii'))
//     {
//         echo 1;
//     }
//     else {
//         echo 0;
//     }
// }
