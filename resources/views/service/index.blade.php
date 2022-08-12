<h1>Post List</h1>

<?php
DB::connection("mysql");

$services = DB::select('select * from posts');

foreach ($services as $service) {

    echo "<h3>" . $service->title . "</h3>";
}

?>
