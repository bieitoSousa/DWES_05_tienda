    {foreach from=$productos item=producto}
        <p><form id='{$producto->getcodigo()}' action='productos.php' method='post'>
        <input type='hidden' name='cod' value='{$producto->getcodigo()}'/>
        <input type='submit' name='enviar' value='Añadir'/>
               {*   
               Como un Ordenador hereda de producto y los dos tienen el metodo toString definido 
               llamo directamente a los productos.
               *}
              {$producto->toString()} 
              
             {*
               // Elimino del codigo 
                {$producto->getnombrecorto()}: {$producto->getPVP()} euros.
              *}
        </form></p>
    {/foreach}
