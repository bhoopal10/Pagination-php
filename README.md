# Pagination-php
This plugin for easy pagination for php
#Install
<code>
require(paginate.php);
$paginate = new paginate();
/* intial the current page, total_items,limit */
$paginate->init($page,$total_item,$limit);
/* once initalize the you can print any where in your code as below*/
echo $paginate->create_link();
</code>
