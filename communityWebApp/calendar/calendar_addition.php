<?php include '../view/header.php'; ?>
<main>
   <section>
   <h1><?=$message?></h1>
       <table border="1">
       <tr><td>Event Name</td><td>Event Start Time</td><td>Event Location</td><td>Attendance Probability</td></tr>
           <tr>
               <?php echo '<td>'.
               $event['EventName'] . '</td><td>' . 
               $event['StartTime'] . '</td><td>'. 
               $event['EventLocation'] .'</td><td>' .
               $event['AttendProbability'] . '%</td>'; ?>
           </tr>
       </table>
   <h1>All Calendar Entries</h1>
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
