<?php include_once 'config/helpers.php'; ?>

<h1>Tu pedido se ha confirmado</h1>
	<p>
		Tu pedido ha sido guardado con exito, una vez que realices la transferencia
		bancaria a la cuenta 7382947289239ADD con el coste del pedido, será procesado y enviado.
	</p>
	<br/>

        
              Número de pedido: <?= $iou->id ?>
              <br>
		Total a pagar: <?= $iou->coste ?>
                <br>
		Productos:
                <?php while($py=$po->fetch_object()):?>
                <?= $py->nombre ?>
                <br>
                <?= $py->precio ?>
                <br>
                <?= $py->unidades ?>

                <?php endwhile; ?>

