<?php
session_start();
require('../model/calendar_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
   $action = filter_input(INPUT_GET, 'action');
   if ($action == NULL) {
       $action = 'list_calendar';
   }
}

if ($action == 'list_calendar') {
   $user_id=$_SESSION['UserId'];

   $calendars = get_calendar_entries($user_id);
   include('calendar_list.php');
}
else if($action == 'add_first'){
   $event_id = filter_input(INPUT_GET, 'event_id');
   $user_id=$_SESSION['UserId'];
   $event = get_event_info($event_id);
   $calendars = get_calendar_entries($user_id);
   include('calendar_probability.php');
}
else if($action == 'add_second'){
   $event_id = filter_input(INPUT_POST, 'event_id');
   $probability = filter_input(INPUT_POST, 'probability');
   $user_id=$_SESSION['UserId'];
   $added_rows = add_to_calendar($event_id, $user_id, $probability);
   if($added_rows > 0){
       $message = 'New Event Added to Calendar';
   } else{
       $message = 'Event Already Part of Calendar';
   }
   $event = get_event_plan($event_id, $user_id);
   $calendars = get_calendar_entries($user_id);
   include('calendar_addition.php');
}
