<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>untitled</title>
        <style type="text/css" media="screen">
            label{display:block;}
        </style> 
    </head>
    <body align="center">
    <table align="center" border="0" cellpadding="2" cellspacing="2">
    <tr>
        <td><strong>All Events</strong></td>
        <td></td>
        <td><strong><?php echo anchor('site/create', 'Add Event'); ?></strong></td>
        <td></td>
    </tr>
</table>
            
        <?php if(isset($records)) : foreach($records as $row) : ?>

        <h2><?php echo anchor("admin/event/$row->event_id", $row->type); ?></h2>
        <div><?php echo $row->date; ?></div>
        <div><?php echo $row->no_guests; ?></div>
        <div><?php echo $row->start_time; ?></div>
        <div><?php echo $row->end_time; ?></div>
        <div><?php echo $row->notes; ?></div>
        <h4><?php echo anchor("site/delete/$row->event_id", "Delete $row->type"); ?></h4>

        <?php endforeach; ?>
        
        <?php else : ?>
        <h2>No Records Returned</h2>
        <?php endif; ?>
  </body>
</html>