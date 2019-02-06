<?php
session_start();
include 'view/header.php';
?>
<main>
   <h1>Menu</h1>
   <ul>
       <li>
           <a href="user">Users</a>
       </li>
       <li>
           <a href="event">Events</a>
       </li>
       <li>
           <a href="groups">Groups</a>
       </li>
       <li>
           <a href="calendar">Calendar</a>
       </li>
       <li>
           <a href="groupmembership">GroupMembership</a>
       </li> 
       <li>
           <a href="share">CalendarShares</a>
       </li>                         
   </ul>
</main>
<?php include 'view/footer.php'; ?>
