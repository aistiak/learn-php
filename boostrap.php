<?php

require 'database/Connection.php' ;
require 'QueryBuilder.php';


return new QueryBuilder(

	Connection::make()

) ;
