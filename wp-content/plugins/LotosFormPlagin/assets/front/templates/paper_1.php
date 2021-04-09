<div class="contract__wrapper">
    <form data-id-contract="<?= $title ?>" class="contract__form">

        <input type="hidden" name="id-title" value="<?= $title ?>">
        <input type="hidden" name="id-email" value="<?= $email ?>">

        <p class="ls-title">Заполните поля для формирования документов</p>

        <div class="pnf">
            <input type="text" class="ls-input" name="<?= $title ?>-familia" placeholder="Фамилия">
            <input type="text" class="ls-input" name="<?= $title ?>-name" placeholder="Имя">
            <input type="text" class="ls-input" name="<?= $title ?>-patronymic" placeholder="Отчество">
        </div>

        <p class="ls-title">Паспорт</p>

        <div class="passport">
            <div class="ls-row">
                <div class="field">
                    <label>Дата рождения:</label>
                    <input type="date" name="<?= $title ?>-data-born">
                </div>
                <div class="field">
                    <label>Cерия:</label>
                    <input type="text" name="<?= $title ?>-seria" placeholder="0000">
                </div>
                <div class="field">
                    <label>№</label>
                    <input type="text" name="<?= $title ?>-number" placeholder="000000">
                </div>
            </div>

            <div class="ls-row">
                <div class="long-field">
                    <label>Hазвание выдавшего органа: </label>
                    <textarea name="<?= $title ?>-where-take"></textarea>
                </div>
                <div class="field">
                    <label> Дата выдачи: </label>
                    <input type="date" name="<?= $title ?>-data-taking">
                </div>
            </div>
        </div>

        <p class="ls-title">Адрес по месту регистрации</p>

        <div class="address">
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
        <div class="theSame">
            <input type="checkbox" name="the-same">
            <label> Адрес совпадает с адресом регистрации </label>
        </div>

        <p class="ls-title">адрес по месту Жительства</p>

        <div class="address">
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




        <label>Телефон: </label>
        <input type="phone" name="<?= $title ?>-phone">

        <button data-id-contract="<?= $title ?>" class="lotos_send_from">send</button>
    </form>
</div>