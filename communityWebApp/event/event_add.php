<?php include '../view/header.php'; ?>
<main>
   <section>
       <h1>Add An Event</h1>
        <form action="/assign7/event/index.php" method="post">
            <input type="hidden" name="action" value="add_event_data"/>
           Event Name: <input type="text" name="event_name"><br/>
           Event Type: <select name="event_type"><br/>
         <option  value="Comedy Night">Comedy Night</option>
         <option  value="Dance Performance">Dance Performance</option>
         <option  value="Gardening">Gardening</option>
         <option  value="Home and Family Expo">Home and Family Expo</option>
         <option  value="Musical Performance">Musical Performance</option>
         <option  value="Play">Play</option>
         </select><br/>
         Event Location <input type="text" name="event_location" size="3"><br/>
         Event Date and Start Time:<input type="text" name="start_time" size="3"><br/>
         Event Date and End Time:<input type="text" name="end_time" size="3"><br/>
         Event Hours Duration: <input type="text" name="hours_duration" size="3"><br/>
         <input type="submit" value="submit">
        </form>

   </section>
</main>
<?php include '../view/footer.php'; ?>  