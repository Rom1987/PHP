<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>

    
    <form class="modal-content" action="record.php" method="POST">

        <div class="container" >
            <label for="record_address"><b>Адрес реагистрации</b></label>
            <input type="record_address" placeholder="Введите адрес регистрации" name="record_address" required>

            <label for="datetime"><b>Дата и время приёма</b></label>
            <input type="datetime-local" placeholder="Введите дату и время приёма" name="datetime" required>
                
            <label for="breeder"><b>Производитель</b></label>
            <input type="text" placeholder="Введите производителя" name="breeder" required>

            <label for="model"><b>Модель</b></label>
            <input type="text" placeholder="Введите модель" name="model" required>

            <label for="car_number"><b>Автомобильный номер (Б000ББ00 или Б000ББ00)</b></label>
            <input type="text" placeholder="Введите автомобильный номер" name="car_number" pattern="[А-я]{1}[0-9]{3}[А-я]{2}[0-9]{2,3}" maxlength="9" required>
            
            <label for="category"><b>Категория</b></label>
            <select name="category" required>
                <option value="" disabled selected>Категория</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="M">M</option>
            </select>

            <button type="submit">Отправить</button>
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Отмена</button>
        </div>
    </form>