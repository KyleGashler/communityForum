<?php
session_start();
require('../model/event_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
  $action = filter_input(INPUT_GET, 'action');
  if ($action == NULL) {
      $action = 'list_events';
  }
}

if ($action == 'list_events') {
  $events = read_events();
  $message = '';
  include('event_list.php');
}
else if($action == 'add_event'){
  include('event_add.php');
}
else if($action == 'add_event_data'){
  $event_name = filter_input(INPUT_POST, 'event_name');
  $event_type = filter_input(INPUT_POST, 'event_type');
  $event_location = filter_input(INPUT_POST, 'event_location');
  $start_time = filter_input(INPUT_POST, 'start_time');
  $end_time = filter_input(INPUT_POST, 'end_time');
  $hours_duration = filter_input(INPUT_POST, 'hours_duration');
  $records_added = create_event($event_name,
                          $event_type, $event_location, $start_time, 
                                $end_time, $hours_duration);
  $message = '';
  if ($records_added > 0){
    $message = 'Event Added';

  }
  else {
    $message = 'Error Adding Event';
  }
  $events = read_events();
  include('event_list.php');

}
else if($action == 'edit_event'){
  include('event_edit.php');
}
else if($action == 'edit_event_data'){

}
else if($action == 'delete_event'){
  include('event_delete_confirm');
}
else if($action == 'delete_event_confirm'){

}
