<div class="contract__wrapper">
    <h1><?= $title ?></h1>
    <form data-id-contract="<?= $title ?>" class="contract__form">
        <input type="hidden" name="id-title" value="<?= $title ?>">
        <input type="hidden" name="id-email" value="<?= $email ?>">
        <label>Фамилия:</label>
        <input type="text" name="<?= $title ?>-familia" placeholder="Фамилия">
        <label>Имя:</label>
        <input type="text" name="<?= $title ?>-name" placeholder="Имя">
        <label>Отчество:</label>
        <input type="text" name="<?= $title ?>-patronymic" placeholder="Отчество">
        <div class="address">
            <p>Адресу (по месту регистрации):</p>
            <div class="sity">
                <label>Город: </label>
                <input type="text" name="<?= $title ?>-reg-sity">
            </div>
            <div class="street">
                <label>Улица: </label>
                <input type="text" name="<?= $title ?>-reg-street">
            </div>
            <div class="house">
                <label>Дом-квартира: </label>
                <input type="text" name="<?= $title ?>-reg-house">
            </div>
        </div>

        <div class="address">
            <p>Адресу (по месту регистрации):</p>
            <div class="theSame">
            <label> Адрес совпадает с адресом регистрации </label>
            <input type="checkbox" name="the-same">
            </div>
            <div class="sity">
                <label>Город: </label>
                <input type="text" name="<?= $title ?>-live-sity">
            </div>
            <div class="street">
                <label>Улица: </label>
                <input type="text" name="<?= $title ?>-live-street">
            </div>
            <div class="house">
                <label>Дом-квартира: </label>
                <input type="text" name="<?= $title ?>-live-house">
            </div>
        </div>


        <div class="pasport">
            <label>Паспорт:</label>
            <div class="cont">
                <label>Cерия:</label> <input type="number" name="<?= $title ?>-seria"> <label>№</label> <input type="number" name="<?= $title ?>-number">
            </div>
            <div class="data-taking">
                <label> Дата выдачи: </label>
                <input type="date" name="<?= $title ?>-data-taking">
                <label>Дата рождения:</label>
                <input type="date" name="<?= $title ?>-data-born">
            </div>
            <label>Hазвание выдавшего органа: </label>
            <textarea name="<?= $title ?>-where-take"></textarea>
        </div>

        <label>Телефон: </label>
        <input type="phone" name="<?= $title ?>-phone">
        
        <button data-id-contract="<?= $title ?>" class="lotos_send_from">send</button>
    </form>
</div>