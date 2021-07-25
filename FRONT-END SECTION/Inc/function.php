<?php
include(__DIR__ . "./server_config.php");

function check_user_login($connect)
{
    if (isset($_SESSION['uID'])) {
        $id = $_SESSION['uID'];
        $query = "SELECT * FROM user WHERE ID = '$id' LIMIT 1";

        $result = mysqli_query($connect, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    } else {
        header("");
        die;
    }
}

function check_employee_login($connect)
{
    if (isset($_SESSION['eID'])) {
        $id = $_SESSION['eID'];
        $query = "SELECT * FROM employee WHERE ID = '$id' LIMIT 1";

        $result = mysqli_query($connect, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    } else {
        header("");
        die;
    }
}

function check_admin_login($connect)
{
    if (isset($_SESSION['aID'])) {
        $id = $_SESSION['aID'];
        $query = "SELECT * FROM admin WHERE ID = '$id' LIMIT 1";

        $result = mysqli_query($connect, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    } else {
        header("");
        die;
    }
}

function generateKey()
{
    $length = 6;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



function newDate($day)
{
    $date = date('Y-m-d', time() + 4 * 3600);
    echo date('Y-m-d', strtotime($date . ' + ' . $day . 'days'));
}


function shiftStatus($shift)
{
    $flag = '';
    $time = (int) date('G', time() + 4 * 3600);

    if ($shift == '9AM - 12PM') {
        if ($time >= 9 && $time < 12) {
            $flag = 'In Progress';
        } elseif ($time < 9) {
            $flag = 'Not Started';
        } elseif ($time >= 12) {
            $flag = 'Done';
        }
    } else if ($shift == '3PM - 6PM') {
        if ($time >= 15 && $time < 18) {
            $flag = 'In Progress';
        } elseif ($time < 15) {
            $flag = 'Not started';
        } elseif ($time >= 18) {
            $flag = 'Done';
        }
    }
    return $flag;
}
function orderStatus($date, $shift)
{
    $flag = '';
    $c_date = date('Y-m-d', time() + 4 * 3600);
    $c_day = (int)date('d', time() + 4 * 3600);
    $c_month = (int)date('m', time() + 4 * 3600);
    $c_year = (int)date('Y', time() + 4 * 3600);

    $year = explode('-', $date);
    $year = (int)$year[0];

    $month = explode('-', $date);
    $month = (int)$month[1];

    $day = explode('-', $date);
    $day = (int)$day[2];

    if ($date == $c_date) {
        $flag = shiftStatus($shift);
    } else {
        if ($c_year < $year) {
            $flag = 'Not started';
        } elseif ($c_year == $year) {
            if ($c_month < $month) {
                $flag = 'Not started';
            } elseif ($c_month == $month) {
                if ($c_day < $day) {
                    $flag = 'Not started';
                } elseif ($c_day > $day) {
                    $flag = 'Done';
                }
            } else {
                $flag = 'Done';
            }
        } elseif ($c_year > $year) {
            $flag = 'Done';
        }
    }

    return $flag;
}