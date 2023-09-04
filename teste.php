
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include_once('conexao.php');
// SDK do Mercado Pago
include_once 'vendor/autoload.php';
// Adicione as credenciais
MercadoPago\SDK::setAccessToken('TEST-4432656948811640-090420-361f047f592a49ab9c7e245232f78fb0-269206052');

$id_user = 1;

$preference = new MercadoPago\Preference();

$query_cart = "SELECT * FROM Carrinho 
INNER JOIN Produtos
ON Carrinho.id_Prod = Produtos.id_Prod where usuario='{$id_user}'";

$results_prod = mysqli_query($conexao, $query_cart);
$cont = 1;
$itensMP = array();
while($row2 = $results_prod->fetch_assoc()){
  
  ${'item' . $cont} = new MercadoPago\Item();
  ${'item' . $cont}->id = "BRL";
  ${'item' . $cont}->title = "{$row2['nome_prod']}";
  ${'item' . $cont}->picture_url = "{$row2['caminho']}";
  ${'item' . $cont}->quantity = $row2['quantidade'];
  ${'item' . $cont}->unit_price = (double)$row2['preco'];
  ${'item' . $cont}->currency_id = "BRL";
  array_push($itensMP,${'item' . $cont}); 
 $cont ++;
}

// Cria um item na preferência
$item = new MercadoPago\Item();
$item->title = 'Produto 1';
$item->quantity = 1;
$item->unit_price = 75.56;

// Cria um item na preferência
$item2 = new MercadoPago\Item();
$item2->title = 'Produto 2';
$item2->quantity = 1;
$item2->unit_price = 75.56;
 

# Building an item
$preference->items = array($item,$item2);



$preference->payment_methods = array(
 "excluded_payment_types" => array(
     array("id" => "visa")
 ),
 "installments" => 12
 );

 $preference->back_urls = array(
  "success" => $BASE_URL . "/teste.php",
  "failure" => $BASE_URL . "/failure",
  "pending" => $BASE_URL . "/pending"
);
$preference->auto_return = "approved";

$preference->notification_url = $BASE_URL . '/teste2.php';

$preference->external_reference = "A Custom External Reference";
 $preference->save();

?>


<script src="https://sdk.mercadopago.com/js/v2"></script>

<script>
    const mp = new MercadoPago('TEST-6d00c21c-c82a-40e4-88af-d3c1b08d7bce', {
    locale: 'pt-BR'
  });
// Inicializa o checkout
mp.checkout({
  preference: {
      id: '<?php echo $preference->id;?>'
  },
  autoOpen: true, // Habilita a abertura automática do Checkout Pro
});
</script>