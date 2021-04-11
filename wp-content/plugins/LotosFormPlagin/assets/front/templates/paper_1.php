<form data-id-contract="<?= $title ?>" class="contract__form" id="ls-form">

    <input type="hidden" name="id-title" value="<?= $title ?>">
    <input type="hidden" name="id-email" value="<?= $email ?>">

    <div class="ls-fields">
        <div class="ls-fields__body">
            <p class="ls-title">Заполните поля для формирования документов</p>

            <div class="pnf">
                <div class="field">
                    <input type="text" title="Минимум 2 символа" class="ls-input" name="lsFamilia" placeholder="Фамилия" required>
                </div>
                <div class="field">
                    <input type="text" title="Минимум 2 символа" class="ls-input" name="lsName" placeholder="Имя" required>
                </div>
                <div class="field">
                    <input type="text" class="ls-input" name="<?= $title ?>-patronymic" placeholder="Отчество">
                </div>
            </div>

            <p class="ls-title">Паспорт</p>

            <div class="passport">
                <div class="ls-row">
                    <div class="field">
                        <label>Дата рождения:</label>
                        <input type="date" name="lsDataBorn" id="lsDataBorn" title="01.01.2000">
                    </div>
                    <div class="field">
                        <label>Cерия:</label>
                        <input type="text" name="lsSeria" title="Обязательное поле(0000)" placeholder="0000">
                    </div>
                    <div class="field">
                        <label>№</label>
                        <input type="text" name="lsNumber" title="Обязательное поле(000000)" placeholder="000000">
                    </div>
                </div>

                <div class="ls-row">
                    <div class="long-field">
                        <label>Hазвание выдавшего органа: </label>
                        <textarea name="<?= $title ?>-where-take" title="Обязательное поле" required></textarea>
                    </div>
                    <div class="field">
                        <label> Дата выдачи: </label>
                        <input type="date" id="lsDataTaking" name="lsDataTaking" title="01.01.2000">
                    </div>
                </div>
            </div>

            <p class="ls-title">Адрес по месту регистрации</p>

            <div class="address firstAddres">
                <div class="sity">
                    <label>Город: </label>
                    <input type="text" name="first-sity" required>
                </div>
                <div class="street">
                    <label>Улица: </label>
                    <input type="text" name="first-street" required>
                </div>
                <div class="house">
                    <label>Дом-квартира: </label>
                    <input type="text" name="first-house" required>
                </div>
            </div>
            <div class="theSame">
                <input type="checkbox" name="the-same" id="theSame">
                <label> Адрес совпадает с адресом регистрации </label>
            </div>

            <p class="ls-title">Адрес по месту жительства</p>

            <div class="address secondAddres">
                <div class="sity">
                    <label>Город: </label>
                    <input type="text" name="second-sity" required>
                </div>
                <div class="street">
                    <label>Улица: </label>
                    <input type="text" name="second-street" required>
                </div>
                <div class="house">
                    <label>Дом-квартира: </label>
                    <input type="text" name="second-house" required>
                </div>
            </div>

            <p class="ls-title ls-margin">Kонтактные данные </p>


            <div class="address">
                <div class="sity">
                    <label>Телефон </label>
                    <input type="text" id="lsPhone" name="lsPhone" title="+7(999) 999-9999" placeholder="+7(___) ___-____">
                </div>
                <div class="sity">
                    <label>Доп. телефон </label>
                    <input type="text" id="lsAddPhone" name="lsAddPhone" title="+7(999) 999-9999" placeholder="+7(___) ___-____">
                </div>
                <div class="sity">
                    <label>e-mail </label>
                    <input type="email" name="lsEmail" placeholder="mail@mail.ru" title="mail@mail.ru">
                </div>
            </div>

        </div>

    </div>

    <div class="ls-healthyList">
        <div class="ls-healthyList__body">
            <div class="list-title">
                <p class="title">Лист здоровья</p>
                <p class="description">Специалисты ООО «Aurora DentHouse» хотели бы как можно лучше провести Ваше лечение. Его успех в немалой степени зависит от состояния Вашего здоровья. Пожалуйста, ответьте на все вопросы полностью, выбрав ( ДА или НЕТ).</p>
            </div>
            <?php foreach ($fields as $field) : ?>
                <div class="list-row <?= (int) $field['number'] % 2 ? 'dark' : 'light'  ?>">
                    <p class="title">
                        <?= $field['type'] !== "not-number" ?  $field['number'] . '. ' . $field['title'] : $field['title'] ?>
                    </p>
                    <?php if ($field['type'] !== "period") : ?>
                        <div class="variants" data-variant-id="field_<?= $field['number'] ?>">
                            <div class="inputs">
                                <div class="local-variant">
                                    <label for="yes_1">Да</label>
                                    <input type="checkbox" name="yes_<?= $field['number'] ?>" data-id="field_<?= $field['number'] ?>">
                                </div>
                                <div class="local-variant">
                                    <label for="no_1">Нет</label>
                                    <input type="checkbox" name="no_<?= $field['number'] ?>" class="not-message" data-id="field_<?= $field['number'] ?>" required>
                                </div>
                                <div class="local-variant">
                                    <label for="think_1">Затрудняюсь ответить</label>
                                    <input type="checkbox" name="think_<?= $field['number'] ?>" data-id="field_<?= $field['number'] ?>">
                                </div>
                            </div>
                            <small class="error-for-list" data-id="field_<?= $field['number'] ?>">Выберите один вариант</small>
                        </div>
                    <?php else : ?>
                        <div class="ls-period">
                            <input type="text" name="period" placeholder="Мес.">
                        </div>
                    <?php endif ?>
                </div>
                <?php if (array_key_exists('add_info', $field)) : ?>
                    <div class="add-field">
                        <textarea name="<?= $field['number'] ?>" placeholder="<?= $field['add_info'] ?>"></textarea>
                    </div>
                <?php endif ?>
            <?php endforeach ?>

        </div>
    </div>


    <input class="submit lotos_send_from" type="submit" value="Submit">
</form>

<script>
    let isError = false

    const createEventBlur = (e) => {
        if (isError) {
            const ev = new Event('blur')
            e.target.dispatchEvent(ev)
        }
    }

    // adding new hendler for valid date

    $.validator.addMethod("lsDate", function(value, element) {
        if (/^\d{4}\-\d{2}\-\d{2}$/.test(value)) {
            return true
        } else {
            return false
        }

    }, "01.01.2000");

    // adding new hendler for valid phone

    $.validator.addMethod("lsPhoneValid", function(value, element) {
        if (/^\+7\(\d{3}\) \d{3}\-\d{4}$/.test(value)) {
            return true
        } else {
            return false
        }
    }, "+7(999) 999-9999");

    // fixing bugs with inputmask and insert date from calendar

    document.getElementById('lsDataBorn').addEventListener('change', createEventBlur)
    document.getElementById('lsDataTaking').addEventListener('change', createEventBlur)
    document.getElementById('lsPhone').addEventListener('change', createEventBlur)
    document.getElementById('lsAddPhone').addEventListener('change', createEventBlur)


    // simulare addreses

    const switchSimular = document.getElementById("theSame")


    const simularAddresOnOff = (e) => {
        const firstAddres = document.querySelector('.firstAddres').querySelectorAll('input')
        const secondAddres = document.querySelector('.secondAddres').querySelectorAll('input')

        const createConnect = (e = null) => {
            if (e) {
                e.preventDefault()
            }
            firstAddres.forEach((el, i) => {
                secondAddres[i].value = el.value
                if (isError) {
                    const ev = new Event('blur')
                    secondAddres[i].dispatchEvent(ev)
                }
            })
        }

        const removeConnect = () => {

            firstAddres.forEach((el, i) => {
                secondAddres[i].value = ''
            })
        }


        if (e.target.checked) {
            secondAddres.forEach(el => el.setAttribute('readonly', ''))

            createConnect()
            document.querySelector('.firstAddres').addEventListener('input', createConnect)
            document.querySelector('.firstAddres').addEventListener('change', createConnect)
            document.querySelector('.firstAddres').addEventListener('blur', createConnect)

        } else {

            secondAddres.forEach(el => el.removeAttribute('readonly'))
            document.querySelector('.firstAddres').removeEventListener('input', createConnect)
            document.querySelector('.firstAddres').removeEventListener('change', createConnect)
            document.querySelector('.firstAddres').removeEventListener('blur', createConnect)
            removeConnect()
        }

    }

    switchSimular.addEventListener("change", simularAddresOnOff)


    // code for inputs from healthy list

    const wrapperHealthyList = document.querySelector('.ls-healthyList__body')

    const healthyList = document.querySelectorAll('.variants')

    wrapperHealthyList.addEventListener('change', (e) => {

        e.preventDefault()

        const el = e.target
        const type = el.type

        if (type === 'checkbox') {
            const elName = el.name
            const dataId = el.dataset.id
            const wrapper = document.querySelector(`div[data-variant-id="${dataId}"]`)
            const inputs = [...wrapper.querySelectorAll('input[type="checkbox"]')]
            const errorMessage = wrapper.querySelector(`small[data-id="${dataId}"]`)

            el.setAttribute('required', '')

            inputs.forEach(input => {
                if (input.hasAttribute('required') && input.name !== elName) {
                    input.removeAttribute('required')
                }
                if (input.name !== elName) {
                    input.checked = false
                }
                if (isError) {
                    if (inputs.some(el => el.checked)) {
                        errorMessage.classList.remove('error')
                        wrapper.classList.remove('error')
                    } else {
                        errorMessage.classList.add('error')
                        wrapper.classList.add('error')
                    }
                }
            })
        }
    })



    // config validat plugin

    $("#ls-form").validate({
        errorPlacement: function(error, element) {

            const dataId = element.data("id") || null;
            

            if (dataId) {
                document.querySelector(`small[data-id="${dataId}"]`).classList.add('error')
                console.log(document.querySelector(`div[data-variant-id="${dataId}"]`));
                document.querySelector(`div[data-variant-id="${dataId}"]`).classList.add('error')
            }

            if (!isError) {
                isError = true
            }

            if (element.is(".not-message")) {
                return false;
            } else {
                error.insertAfter(element);
            }
        },

        rules: {
            lsFamilia: {
                required: true,
                minlength: 2,
                maxlength: 30,
            },
            lsName: {
                required: true,
                minlength: 2,
                maxlength: 30,
            },
            lsDataBorn: {
                required: true,
                lsDate: true
            },
            lsSeria: {
                required: true,
                minlength: 4,
                maxlength: 4,
                digits: true,
            },
            lsNumber: {
                required: true,
                minlength: 6,
                maxlength: 6,
                digits: true,
            },
            lsDataTaking: {
                required: true,
                lsDate: true,
            },
            lsPhone: {
                required: true,
                lsPhoneValid: true,
            },
            lsAddPhone: {
                required: true,
                lsPhoneValid: true,
            },
            lsEmail: {
                required: true,
                email: true
            }
        }
    });

    $("#lsPhone").mask("+7(999) 999-9999");
    $("#lsAddPhone").mask("+7(999) 999-9999");
</script>