<?php
// Carrega as classes necessárias 

include_once 'TExpression.class.php';
include_once 'TFilter.class.php';

// Copiar um filtro por data (string)
$filter1 = new Tfilter ('data','=', '2007-06-02');
echo $filter1 ->dump();
echo "<br>\n";

// Cria um filtro por salário (integer)
$filter2 = new Tfilter ('salário','>', 3000);
echo $filter2 ->dump();
echo "<br>\n";


// Cria um filtro por genero (array)
$filter3 = new Tfilter ('genero','IN', array("M","F"));
echo $filter3 ->dump();
echo "<br>\n";

// Cria um filtro por contrato (NULL)
$filter4 = new Tfilter ('contato','IS NOT', NULL);
echo $filter4 ->dump();
echo "<br>\n";

// Cria um filtro por ativo (booleano)
$filter5 = new Tfilter ('ativo','=', TRUE);
echo $filter5 ->dump();
echo "<br>\n";



?>