<?php
/**
 * Atlas
 */
$site_name = ossn_site_settings('site_name');
if (isset($params['title'])) {
    $title = $params['title'] . ' : ' . $site_name;
} else {
    $title = ossn_site_settings('site_name');
}
if (isset($params['contents'])) {
    $contents = $params['contents'];
} else {
    $contents = '';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 

 <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Red Social para triangulación por intereses.">
    <meta name="author" content="a0110100110010110">


    <link rel="icon" href="<?php echo ossn_add_cache_to_url(ossn_theme_url().'images/favicon.ico');?>" type="image/x-icon" />   
    <title><?php echo $title; ?></title>
    
    <?php echo ossn_fetch_extend_views('ossn/endpoint'); ?>   
    <?php echo ossn_fetch_extend_views('ossn/admin/head'); ?>

    <script>
        <?php echo ossn_fetch_extend_views('ossn/admin/js/head'); ?>

    </script>
    <script>
        tinymce.init({
            toolbar: "bold italic underline alignleft aligncenter alignright bullist numlist image media link unlink emoticons autoresize fullscreen insertdatetime print spellchecker preview",
            selector: '.ossn-editor',
            plugins: "code image media link emoticons fullscreen insertdatetime print spellchecker preview",
            convert_urls: false,
            relative_urls: false,
            language: "<?php echo ossn_site_settings('language'); ?>",
        });
    </script>

</head>
<body>
    <div class="header">
        <div class="container" style="height: 100px">
        
             <div class="row" style="height: 100px;">
            <div class="col-md-12 center">
                        <img src="<?php echo ossn_theme_url(); ?>images/logo_animated.svg" style="width: 100px;height: 100px;">
                    </div>
                <?php if(ossn_isAdminLoggedin()){ ?>
                <div class="col-md-12 header-dropdown">
                    <ul class="navbar-right">   
                        <div class="dropdown">
                            <a id="dLabel" role="button" data-toggle="dropdown" data-target="#"><i class="fa fa-bars fa-3"></i></a> 
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                 <li><a href="<?php echo ossn_site_url("action/admin/logout", true);?>"><?php echo ossn_print('admin:logout');?></a></li>
                             </ul>
                        </div>
                     </ul>   
                </div>
                <?php } ?>
            </div>        
        
        </div>
    </div>
    <?php if(ossn_isAdminLoggedin()){ ?>
    <div class="row no-right-margins">
        <div class="topbar-menu">
          <?php echo ossn_view_menu('topbar_admin'); ?>
        </div>
    </div>    
    <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <?php echo $contents; ?>
            </div>
        </div>
        
</div>
        <!-- footer -->
        <footer>
            <div class="row">
                <div class="col-md-12 center">
                <?php echo ossn_print('copyright'); ?> <?php echo date("Y"); ?> <a href="<?php echo ossn_site_url(); ?>"><?php echo $site_name; ?></a>                      
                </div>
            </div>
        </footer>
        <!-- /footer -->
    </div> <!-- /container -->

</body>
</html>