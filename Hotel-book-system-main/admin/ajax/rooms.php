<?php

require('../include/db_config.php');
require('../include/essentials.php');
adminLogin();

if(isset($_POST['add_room'])) {
    $features = filteration(json_decode($_POST['features']));
    $facilities = filteration(json_decode($_POST['facilities']));
    $frm_data = filteration($_POST);
    $flag = 0;
    print_r($frm_data);

    $q = "INSERT INTO `rooms` (`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES ('$frm_data[name]', $frm_data[area], $frm_data[price], $frm_data[quantity], $frm_data[adult], $frm_data[children], '$frm_data[desc]')";

    if ($con->query($q) === TRUE) {
        echo '<div class="alert custom-alert alert-success alert-dismissible fade show" role="alert">
            <strong>Update Successful!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } else {
        echo '<div class="alert custom-alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Update Failed! Try Again Later.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}



if(isset($_POST['get_all_rooms']))
{

    $res = selectAll('rooms');
    $i = 1;

    $data = "";

    while($row = mysqli_fetch_assoc($res))
    {
        if($row['status'] == 1)
        {
            $status = "<button onclick='toggle_status($row[id], 0)' class='btn btn-success btn-sm shadow-none'>active</button>
            ";
        }
        else {
            $status = "<button onclick='toggle_status($row[id], 1)' class='btn btn-warning btn-sm shadow-none'>inactive</button>
            ";
        }


        $data.= "
            <tr class='align-middle'>
                <td>$i</td>
                <td>$row[name]</td>
                <td>$row[area] sq. ft.</td>
                <td>
                    <span class='badge rounded-pill bg-light text-dark'>
                        Adult: $row[adult]
                    </span><br>
                    <span class='badge rounded-pill bg-light text-dark'>
                        Child: $row[children]
                    </span>
                </td>
                <td>৳$row[price]</td>
                <td>$row[quantity]</td>
                <td>$status</td>
                <td>
                <button type='button' onclick='edit_details($row[id])' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#edit-room'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </button>
                </td>
            </tr>
        ";
        $i++;
    }

    echo $data;
};



// if (isset($_POST['get_room'])) {
//     $frm_data = filteration($_POST);

//     $room_id = intval($frm_data['get_room']); // Ensure it's an integer

//     $q = "SELECT * FROM `rooms` WHERE `id`=$room_id";
//     $res1 = mysqli_query($con, $q);

//     if ($res1) {
//         $roomdata = mysqli_fetch_assoc($res1);

//         $data = ["roomdata" => $roomdata];
//         echo json_encode($data);
//     } else {
//         echo json_encode(["error" => "Failed to fetch room data."]);
//     }
//     print_r($data);
//     mysqli_close($con); // Close the database connection
// }




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





if (isset($_POST['toggle_status'])) {
    $status = intval($_POST['value']); // Ensure it's an integer
    $room_id = intval($_POST['toggle_status']); // Ensure it's an integer

    $q = "UPDATE `rooms` SET `status` = $status WHERE `id` = $room_id";

    if ($con->query($q) === TRUE) {
        echo 1;
    } else {
        echo 0;
    }
}






