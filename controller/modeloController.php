<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/itel/dao/modeloDAO.php';
    $marca_id = $_POST["marca_id"];
	
	$modeloDao = new ModeloDAO();
	$result = $modeloDao->getModelosByMarca($marca_id);
		
    //$result = mysqli_query($conn,"SELECT * FROM modelo where fk_marca = $marca_id");
?>
    <option value="">Selecione o modelo</option>
    
    <?php
		foreach($result as $modelo) : ?>
        
            <option value="<?php echo $modelo["pk_modelo"];?>"><?php echo $modelo["nome"];?></option>
			
    <?php
        endforeach
    ?>