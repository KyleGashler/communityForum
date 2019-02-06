<?php include '../view/header.php'; ?>
<main>
   <section>
       <h1>Delete An Event</h1>
       <form method="post" action="/Assign7/event/index.php">
           <input type="hidden" name="action" value="delete_event"/>
           <input type="hidden" name="event_id" value="<?php echo $event['EventId']; ?>"/>
           <table border="1">
               <tr><td>EventName</td><td>StartTime</td><td>Event Type</td><td>Event Location</td><td>Hours Duration</td></tr>
                   <tr>
                       <?php echo '<td>'.
                       $event['EventName'] . '</td><td>' .
                       $event['StartTime'] . '</td><td>' .
                       $event['EventType'] . '</td><td>' .
                       $event['EventLocation'] .'</td><td>' .
                       $event['HoursDuration'] .'</td>'
                       ?>
                   </tr>
           </table>
           Are you sure you want to delete this event? <input type="submit" value="yes" />
       </form>
   </section>
</main>
<?php include '../view/footer.php'; ?>  
