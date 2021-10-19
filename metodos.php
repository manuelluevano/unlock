<?php
//INCLUYE UN TEMPLATE
require 'includes/templates/header.php';

?>


<main>

    <h3>Subir metodo de Unlock o Software</h3>

    <div class="seccion contenedor">
        <form action="" class="form">

            <div class="campo_toolpit">
                <label for="">MARCA:</label>
                <select name="" id="">
                    <option value="1">samsung</option>
                    <option value="2">xiaomi</option>
                    <option value="3">motorola</option>
                </select>
                <div class="tooltip"><i class="fas fa-info-circle"></i>
                    <span class="tooltiptext">SI NO ESTA LA MARCA, PIDE AL ADMINISTRADOR QUE LA AGREGUEt</span>
                </div>
            </div>
            <div class="campo_toolpit">
                <label for="">MODELO:</label>
                <select name="" id="">
                    <option value="1">j700</option>
                    <option value="2">S8 PLUS</option>
                    <option value="3">S9 PLUS</option>
                </select>
                <div class="tooltip"><i class="fas fa-info-circle"></i>
                    <span class="tooltiptext">SI NO ESTA EL MODELO, PIDE AL ADMINISTRADOR QUE LA AGREGUEt</span>
                </div>
            </div>
            <div class="campo">
                <label for="">METODO:</label>
                <div class="radio">
                    <div class="valor">
                        <p>FRP</p>
                        <input type="radio" name="metodo" value="frp">
                    </div>
                    <div class="valor">
                        <p>UNLOCK</p>
                        <input type="radio" name="metodo" value="unlock">
                    </div>
                    <div class="valor">
                        <p>MDM/PAYJOY</p>
                        <input type="radio" name="metodo" value="mdm/payjoy">
                    </div>
                    <div class="valor">
                        <p>OTRO</p>
                        <input type="radio" name="metodo" value="otro">
                    </div>
                </div>
            </div>
            <div class="campo">


                <label for="">PASOS:</label>
                <textarea name="" id="" cols="30" rows="10">

                </textarea>
            </div>

            <div class="campo">
                <label for="">SUBIR IMAGENES: </label>
                <input type="file">
            </div>

    </div>
    <div class="flex_end contenedor">
        <input type="submit" value="enviar">
    </div>
    </form>
    </div>

</main>


<?php
//INCLUYE UN TEMPLATE
require 'includes/templates/footer.php';

?>