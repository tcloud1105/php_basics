<?php
// upload a file
// new attributes: enctype="multipart/form-data"

?>
<form action="./process_upload" method="post">
 <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
 <input type="file" name="upload" value="" />
 <input type="submit" name="submit" value="submit"/>
</form>