<?php include '../view/header.php'; ?>
<main>
 <section>
     <h1>All Events</h1>
     <?php echo $message .'<br/>'; ?>
     <a href="/Assign7/event/index.php?action=add_event">Add Event</a>
     <table border="1">
     <tr><td>EventName</td><td>StartTime</td><td>Event Type</td><td>Event Location</td><td>Hours Duration</td><td>Action</td><td>Modify</td></tr>
     <?php foreach ($events as $event) :?>
         <tr>
             <?php echo '<td>'.
             $event['EventName'] . '</td><td>' .
             $event['StartTime'] . '</td><td>' .
             $event['EventType'] . '</td><td>' .
             $event['EventLocation'] .'</td><td>' .
             $event['HoursDuration'] .'</td><td>' .
             '<a href=\'../calendar/index.php?action=add_first&event_id='. $event['EventId'] .'\'>Add to Calendar</a></td><td>' .
             '<a href=\'/assign7/event/index.php?action=edit_event&event_id='.$event['EventId'].'\'>Edit</a> | <a href=\'/assign7/event/index.php?action=delete_event_confirm&event_id='.$event['EventId'].'\'>Delete</a> </td>';
             ?>
         </tr>
     <?php endforeach; ?>
     </table>
     <?php //var_dump($books); ?>
 </section>
</main>
<?php include '../view/footer.php'; ?>
