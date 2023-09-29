 <?php

date_default_timezone_set("Africa/Nairobi");

require_once "config.php";
require_once "config/constants.php";

    function ClassAutoLoad($ClassName){
        $directories = array("config", "processes", "layouts", "templates");
        foreach($directories AS $dir){
            $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . ".php";
            if(is_readable($FileName)){
                require $FileName;
            }
        }
    }
    spl_autoload_register('ClassAutoLoad', true, true);



$DB = New dbConnection(HOSTNAME,DBNAME,HOSTUSER,HOSTPASS,DBPORT);


$OBJ_Proc = new article();
$OBJ_Layouts = new layouts();
$OBJ_Article_Templates = new article_templates();


$OBJ_Proc->add_article($DB);
$articles = $OBJ_Proc->getAllArticles($DB);

