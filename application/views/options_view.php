<!DOCTYPE html>

<html align="center" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>untitled</title>
        <style type="text/css" media="screen">
            label{display:block;}
        </style> 
    </head>
    <body>
        <h2>Create</h2>
        <?php echo form_open('site/create'); ?>
        
        <p>
            <label for="type">Type</label>
            <input type="text" name="type" id="type"/>            
        </p>
        
        <p>
            <label for="date">Date</label>
            <input type="date" name="date" id="date"/>            
        </p>
        
        <p>
            <label for="no_guests">Guest numbers</label>
            <input type="text" name="no_guests" id="no_guests"/>            
        </p>
        
        <p>
            <label for="start_time">Start Time</label>
            <input type="time" name="start_time" id="start_time"/>            
        </p>
        
        <p>
            <label for="end_time">End Time</label>
            <input type="time" name="end_time" id="end_time"/>            
        </p>
        
        <p>
            <label for="notes">Additional notes</label>
            <input type="text" name="notes" id="notes"/>            
        </p>
        
        <p>
            <input type="submit" value="Submit"/>
        </p>                
        <?php echo form_close(); ?>
        
        <br />
        
        <!--<h2>Read</h2>
        
        <?php/* if(isset($records)) : foreach($records as $row) : */?>
        
        <h2><?php// echo anchor("site/delete/$row->event_id", $row->type); ?></h2>
        <div><?php// echo $row->no_guests; ?></div>
        <?php/* endforeach; */?>
        
        <?php/* else : */?>
        <h2>No Records Returned</h2>
        <?php/* endif; */?>
        
        <br />
        
        <h2>Delete</h2>
        
        <p>to sample the delete method simply click one of the headings listed above, delete query will automatically run</p>
    --></body>
</html>