<?php
require('database.php');

function get_calendar_entries($user_id) {
   global $db;
   $query =   'SELECT e.EventId, EventName, StartTime, EventType, 
                      EventLocation, HoursDuration, AttendProbability
               FROM event e JOIN calendar c on e.EventId = c.EventId
               WHERE c.UserId = :userid';
   $statement = $db->prepare($query);
   $statement->bindParam(':userid', $user_id);
   $statement->execute();
   $calendars = $statement->fetchAll();
   $statement->closeCursor();
   return $calendars;
}

function get_event_info($event_id) {
   global $db;
   $query =   'SELECT EventId, EventName, EventType, EventLocation, StartTime, HoursDuration
               FROM event_tracker.event
               WHERE EventId = :eventid';
   $statement = $db->prepare($query);
   $statement->bindParam(':eventid', $event_id);
   $statement->execute();
   $event = $statement->fetch();
   $statement->closeCursor();
   return $event;   
}

function get_event_plan($event_id, $user_id) {
   global $db;
   $query =   'SELECT e.EventId, EventName, StartTime, EventType, EventLocation, HoursDuration, AttendProbability
               FROM event e JOIN calendar c on e.EventId = c.EventId
               WHERE e.EventId = :eventid AND c.UserId = :userid';
   $statement = $db->prepare($query);
   $statement->bindParam(':eventid', $event_id);
   $statement->bindParam(':userid', $user_id);
   $statement->execute();
   $event = $statement->fetch();
   $statement->closeCursor();
   return $event;   
}

function add_to_calendar($event_id, $user_id, $probability){
   global $db;
   $stmt1 = $db->prepare('SELECT CalendarId FROM calendar WHERE EventId = :eventid and UserId = :userid');
   $stmt1->bindParam(':eventid', $event_id);
   $stmt1->bindParam(':userid', $user_id);
   $stmt1->execute();
   $book =  $stmt1->fetch(PDO::FETCH_BOTH);
   $already_in_calendar = $stmt1->rowCount() > 0;
   $stmt1->closeCursor();

   if(!$already_in_calendar){
       $stmt = $db->prepare('INSERT INTO calendar (UserId, EventId, AttendProbability)
       VALUES (:userid, :eventid, :probability )');

       $stmt->bindParam(':userid', $user_id);
       $stmt->bindParam(':eventid', $event_id);
       $stmt->bindParam(':probability', $probability);
       $stmt->execute();
       return $stmt->rowCount();
   } else{
       return 0;
   }
}
