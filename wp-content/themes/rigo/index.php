<?php
//Get the variables from the controller
$args = wpas_get_view_data();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello from Rigo!</title>
        <?php wp_head() ?>
    </head>
    <body>
        <p style="text-align: center;"><img style="max-height: 100px;" src="https://ucarecdn.com/f2e1f61a-efc3-4bd2-aca0-a86ed35cff8d/rigobertorocket.png" /></p>
        <h1>Hello from <?php echo $args['name']; ?>!</h1>
        <p>If you are able to see this, it means the MVC pattern is working correctly.</p>
        <p>Now you have to start building your <a href="https://github.com/alesanchezr/wpas-wordpress-dash/blob/master/src/WPAS/Controller/API.md">API endpoints</a> and <a href="https://github.com/alesanchezr/wpas-wordpress-dash/tree/master/src/WPAS/Types">Entities (Custom Post Types)</a>.</p>
        <p>Here are some useful links:</p>
        <ul>
            <li><a href="<?php echo get_site_url(); ?>/wp-admin">Login into the WordPress admin dashboard.</a></li>
             <li>This is a endpoint: GET: <a href="<?php echo get_site_url(); ?>/wp-json/sample_api/v1/courses">/courses</a></li>
            <li>This is a endpoint: GET: <a href="<?php echo get_site_url(); ?>/wp-json/sample_api/v1/user">/user</a></li>
            <li>You can download the <a href="https://www.getpostman.com/apps">postman client here.</a></li>
        </ul>
        <p style="text-align: center; margin-top: 100px;"><small>Made with <span style="color: red;">♥️</span>at <a target="_blank" href="https://4geeksacademy.com">4Geeks Academy</a></small></p>
    <?php wp_footer() ?>
    </body>
</html>
