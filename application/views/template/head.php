<!DOCTYPE html>
<html>
    <head>
        <?php
            $title = '';
            switch($head)
            {
                case "Welcome":
                    $title = "Welcome";
                break;


                default:
                break;
            }
        ?>
        <title><?php echo $title; ?></title>
    </head>