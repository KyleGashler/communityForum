<?php include '../view/header.php'; ?>
<main>
   <section>
       <h1>Add Event to Calendar</h1>
       <form action="/assign7/calendar/index.php" method="POST">
           <input type="hidden" name="action" value="add_second"/>
           <input type="hidden" name="event_id" value="<?=$event['EventId']?>"/>
           <table border="1">
           <tr><td>Event Name</td><td>Event Start Time</td><td>Event Location</td><td>Attendance Probability</td></tr>
               <tr>
                   <?php echo '<td>'.
                   $event['EventName'] . '</td><td>' . 
                   $event['StartTime'] . '</td><td>'. 
                   $event['EventLocation'] .'</td><td>' .
                   'Enter Attendance Probability: <input name="probability" type="text" size="3"/> <input type="submit" value="submit" /></td>'; ?>
               </tr>
           </table>
       </form>
       <h1>Events Currently in Calendar</h1>
       <table border="1">
       <tr><td>Event Name</td><td>Event Start Time</td><td>Event Location</td><td>Attendance Probability</td></tr>
       <?php foreach ($calendars as $calendar) :?>
           <tr>
               <?php echo '<td>'.
               $calendar['EventName'] . '</td><td>' . 
               $calendar['StartTime'] . '</td><td>'. 
               $calendar['EventLocation'] .'</td><td>' .
               $calendar['AttendProbability'] . '%</td>'; ?>
           </tr>
       <?php endforeach; ?>
       </table>
       <?php //var_dump($books); ?>
   </section>
</main>
<?php include '../view/footer.php'; ?>
