<!-- Contacto -->
<div class="contact-container">
    <div class="col">
        <div class="content">
            <strong>En Metabóliko</strong> estamos comprometidos contigo y queremos darte la mejor atención.
        </div>
    </div>

    <div class="col">
        <div class="form">
            <div class="form-control full">
                <label for="">Nombre</label>
                <input type="text" placeholder="Nombre">
            </div>

            <div class="form-control half">
                <label for="">Email</label>
                <input type="text" placeholder="Email">
            </div>
            <div class="form-control half">
                <label for="">Teléfono</label>
                <input type="text" placeholder="Teléfono">
            </div>


            <div class="form-control third">
                <label for="">Edad</label>
                <input type="text" placeholder="Edad">
            </div>
            <div class="form-control third">
                <label for="">Peso</label>
                <input type="text" placeholder="Peso">
            </div>
            <div class="form-control third">
                <label for="">Estatura</label>
                <input type="text" placeholder="Estatura">
            </div>
            <div class="form-control full">
                <label for="">Tratamiento de interés</label>
                <select name="Tratamientos" id="Tratamientos" class="select-custom">
                    <option value="Cirugías para Bajar de Peso">Cirugías para Bajar de Peso</option>
                    <option value="Cirugía Antirreflujo por Laparoscopia">Cirugía Antirreflujo por Laparoscopia</option>
                    <option value="Colecistectomía por Laparoscopía">Colecistectomía por Laparoscopía</option>
                    <option>Hernia Abdominal por Laparoscopia</option>
                    <option>Hernia Inguinal por Laparoscopia</option>
                    <option>Laparoscopia Avanzada</option>
                    <option>Minilaparoscopia</option>
                    <option>Apendicectomía por Laparoscopia</option>
                    <option>Cirugía Metabolica</option>
                    <option>Cirugía para Diabetes</option>
                    <option>Cirugía Bariátrica</option> -->
                </select>
            </div>
            <div class="form-control full">
                <center>
                    <input type="submit" value="Enviar">
                </center>
            </div>
        </div>
    </div>
</div><!-- Contacto -->

<script>
$('#Tratamientos').CustomSelect(
    'Cirugía para perder peso'
);
</script>