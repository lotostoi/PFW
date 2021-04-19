<div class="modalWindow">
    <div class="modalWindow__body">
        <p class="modalWindow__title">ДОКУМЕНТЫ УСПЕШНО СФОРМИРОВАНЫ</p>
        <p class="modalWindow__text">Вам осталось прийти к нам в клинику и подписать документы. </p>
        <p class="modalWindow__text"> Также, для ознакомления копия документов были отправлены Вам на почту.</p>
        <button class="modalWindow__button">OK</button>
    </div>
</div>


<form data-id-contract="<?= $title ?>" class="contract__form" id="ls-form">
    <input type="hidden" name="to-email" value="<?= $email ?>">
    <input type="hidden" name="id-title" value="<?= $title ?>">
    <input type="hidden" name="id-email" value="<?= $email ?>">

    <div class="ls-fields">
        <div class="ls-fields__body">
            <p class="ls-title">Заполните поля для формирования документов</p>

            <div class="pnf">
                <div class="field">
                    <input type="text" data-save title="Обязательно к заполнению" class="ls-input" name="lsFamilia" placeholder="Фамилия" required>
                </div>
                <div class="field">
                    <input type="text" data-save title="Обязательно к заполнению" class="ls-input" name="lsName" placeholder="Имя" required>
                </div>
                <div class="field">
                    <input type="text" data-save class="ls-input" name="lsPatronymic" placeholder="Отчество">
                    <label> Не обязательно к заполнению</label>
                </div>
            </div>

            <p class="ls-title">Паспорт</p>

            <div class="passport">
                <div class="ls-row">
                    <div class="field">
                        <label>Дата рождения:</label>
                        <input type="date" data-save name="lsDataBorn" id="lsDataBorn" title="Обязательно">
                    </div>
                    <div class="field">
                        <label>Cерия:</label>
                        <input type="text" data-save name="lsSeria" title="Обязательно к заполнению(0000)" placeholder="0000">
                    </div>
                    <div class="field">
                        <label>№</label>
                        <input type="text" data-save name="lsNumber" title="Обязательно к заполнению(000000)" placeholder="000000">
                    </div>
                </div>

                <div class="ls-row">
                    <div class="long-field">
                        <label>Hазвание выдавшего органа: </label>
                        <textarea name="lsWhereTake" data-save title="Обязательно к заполнению" required></textarea>
                    </div>
                    <div class="field">
                        <label> Дата выдачи: </label>
                        <input type="date" data-save id="lsDataTaking" name="lsDataTaking" title="Обязательно к заполнению">
                    </div>
                </div>
            </div>

            <p class="ls-title">Адрес по месту регистрации</p>

            <div class="address firstAddres">
                <div class="city">
                    <label class="title">Город: </label>
                    <input type="text" data-save name="lsFirstCity" title="Обязательно к заполнению" required>
                </div>
                <div class="street">
                    <label class="title">Улица: </label>
                    <input type="text" data-save name="lsFirstStreet" title="Обязательно к заполнению" required>
                </div>
                <div class="house-flat">
                    <div class="house">
                        <label>Дом: </label>
                        <input type="text" data-save name="lsFirstHouse" title="Обязательно" required>
                    </div>
                    <div class="flat">
                        <label>Kвартира: </label>
                        <input type="text" data-save name="lsFirstFlat" title="Обязательно" required>
                    </div>
                </div>
            </div>
            <div class="theSame">
                <input type="checkbox" data-save name="the-same" id="theSame">
                <label> Адрес совпадает с адресом регистрации </label>
            </div>

            <p class="ls-title">Адрес по месту жительства</p>

            <div class="address secondAddres">
                <div class="city">
                    <label class="title">Город: </label>
                    <input type="text" data-save name="lsSecondCity" title="Обязательно к заполнению" required>

                </div>
                <div class="street">
                    <label class="title">Улица: </label>
                    <input type="text" data-save name="lsSecondStreet" title="Обязательно к заполнению" required>
                </div>
                <div class="house-flat">
                    <div class="house">
                        <label>Дом: </label>
                        <input type="text" data-save name="lsSecondHouse" title="Обязательно" required>
                    </div>
                    <div class="flat">
                        <label>Kвартира: </label>
                        <input type="text" data-save name="lsSecondFlat" title="Обязательно" required>
                    </div>
                </div>
            </div>

            <p class="ls-title ls-margin">Kонтактные данные </p>


            <div class="address">
                <div class="city">
                    <label>Телефон </label>
                    <input type="text" data-save id="lsPhone" name="lsPhone" title="Обязательно к заполнению" placeholder="+7(___) ___-____">
                </div>
                <div class="city">
                    <label>Доп. телефон </label>
                    <input type="text" data-save id="lsAddPhone" name="lsAddPhone" title="+7(999) 999-9999" placeholder="+7(___) ___-____">
                    <label> Не обязательно к заполнению</label>
                </div>
                <div class="city">
                    <label>e-mail </label>
                    <input type="email" data-save name="lsEmailUser" placeholder="mail@mail.ru" title="Обязательно к заполнению">
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
                <div class="list-row <?= $field['type'] === "field" || $field['type'] === "not-number" ? 'light' : ''  ?>" data-variant-id="field_<?= $field['number'] ?>">
                    <p class="title">
                        <?= $field['type'] !== "not-number" ?  $field['number'] . '. ' . $field['title'] : $field['title'] ?>
                    </p>
                    <?php if ($field['type'] === "field" || $field['type'] === "not-number") : ?>
                        <div class="variants">
                            <div class="inputs">
                                <div class="local-variant">
                                    <label for="yes_1">Да</label>
                                    <input type="checkbox" data-save name="yes_<?= $field['number'] ?>" class="not-message" data-id="field_<?= $field['number'] ?>">
                                </div>
                                <div class="local-variant">
                                    <label for="no_1">Нет</label>
                                    <input type="checkbox" data-save name="no_<?= $field['number'] ?>" class="not-message" data-id="field_<?= $field['number'] ?>" required>
                                </div>
                                <div class="local-variant">
                                    <label for="think_1">Затрудняюсь ответить</label>
                                    <input type="checkbox" data-save name="think_<?= $field['number'] ?>" class="not-message" data-id="field_<?= $field['number'] ?>">
                                </div>
                            </div>
                        </div>
                    <?php elseif ($field['type'] === "period") : ?>
                        <div class="ls-period">
                            <input data-save type="text" name="period" title="Только цифры" placeholder="Мес.">
                        </div>
                    <?php endif ?>
                </div>
                <small class="error-for-list" data-id="field_<?= $field['number'] ?>">Выберите один вариант</small>
                <?php if (array_key_exists('add_info', $field)) : ?>
                    <div class="add-field">
                        <textarea name="<?= $field['number'] ?>-text" data-save placeholder="<?= $field['add_info'] ?>"></textarea>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
    <div class="end-form">
        <div class="end-form__body">
            <div class="end_message">
                В заключении дополнительный информационный текст о...
            </div>
            <div class="end_message-cheked" data-variant-id="allFieldsIsTrue">
                <input type="checkbox" name="allFieldsIsTrue" data-id="allFieldsIsTrue" id="allFieldsIsTrue" data-save name="allFieldsIsTrue" class="not-message" data-id="allFieldsIsTrue" required>
                <label for="allFieldsIsTrue">Все поля заполнены мною верно.</label>
            </div>
            <small class="error-for-end" data-id="allFieldsIsTrue">Обязательно для заполнения</small>
            <div class="end_message-agreement" data-variant-id="lsAgreement">
                <input type="checkbox" name="lsAgreement" data-id="lsAgreement" id="lsAgreement" data-save name="lsAgreement" class="not-message" data-id="lsAgreement" required>
                <label for="lsAgreement">Даю согласие на обработку персональных данных.</label>
            </div>
            <small class="error-for-end" data-id="lsAgreement">Обязательно для заполнения</small>
            <button class="submit lotos_send_from" type="submit">
                <span class="text_button">Сформировать документ и отправить.</span>
                <div class="loader blocked"></div>
            </button>
            <button class="g-recaptcha" data-sitekey="6Le3vqsaAAAAAOYwu25yQZXFrRGLQlt6oEJGFWwr" data-callback="onSubmit" style="display: none;">Отправить</button>
        </div>
    </div>
</form>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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


    $.validator.addMethod("isPeriod", function(value, element) {
        console.log(value, 'val');
        if (/^\d{0,3}$/.test(value) || value === '') {
            return true
        } else {
            return false
        }

    }, "Только цифры");

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
        const ev = new Event('blur')

        const createConnect = (e = null) => {
            if (e) {
                e.preventDefault()
            }
            firstAddres.forEach((el, i) => {
                secondAddres[i].value = el.value
                if (isError) {
                    secondAddres[i].dispatchEvent(ev)
                }
            })
        }

        const removeConnect = () => {

            firstAddres.forEach((el, i) => {
                secondAddres[i].value = ''
                secondAddres[i].dispatchEvent(ev)
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

    const wrapperHealthyList = document.querySelector('.contract__form')

    const healthyList = document.querySelectorAll('.variants')

    wrapperHealthyList.addEventListener('change', (e) => {

        e.preventDefault()

        const el = e.target
        const type = el.type

        if (type === 'checkbox') {
            const elName = el.name
            const dataId = el.dataset.id
            const wrapper = document.querySelector(`div[data-variant-id="${dataId}"]`)
            const inputs = [...wrapper ? wrapper.querySelectorAll('input[type="checkbox"]') || [el] : [el]]
            const errorMessage = document.querySelector(`small[data-id="${dataId}"]`)

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
                        errorMessage instanceof Element && errorMessage.classList.remove('error')
                        wrapper instanceof Element && wrapper.classList.remove('error')
                    } else {
                        errorMessage instanceof Element && errorMessage.classList.add('error')
                        wrapper instanceof Element && wrapper.classList.add('error')
                    }
                }
            })
        }
    })

    // saving inputs values

    const inputsForSave = [...document.querySelectorAll('[data-save]')]


    document.querySelector('.contract__form').addEventListener('change', addHandler)
    document.querySelector('.contract__form').addEventListener('input', addHandler)
    document.querySelector('.contract__form').addEventListener('blur', addHandler)

    function addHandler(e) {
        const el = e.target
        if (el.tagName === "INPUT" || el.tagName === "TEXTAREA" && el.hasAttribute('data-save')) {
            if (el.type === 'checkbox') {
                const inputs = document.querySelectorAll(`input[data-id="${el.dataset.id}"]`).length ?
                    document.querySelectorAll(`input[data-id="${el.dataset.id}"]`) : [el]
                inputs.forEach(input => {
                    if (input.name === el.name) {
                        localStorage.setItem(`ls-${input.name}`, input.checked ? 'yes' : 'notChecked')
                        el.setAttribute('required', '')
                    } else {
                        localStorage.setItem(`ls-${input.name}`, 'notChecked')
                        input.removeAttribute('required')
                    }
                })
            } else {
                localStorage.setItem(`ls-${el.name}`, `${el.value}`)
            }
        }
    }

    inputsForSave.forEach(input => {
        const value = localStorage.getItem(`ls-${input.name}`) || null

        if (value && value !== 'notChecked' && input.id !== "theSame") {

            if (input.type === 'checkbox') {
                const inputs = document.querySelectorAll(`input[data-id="${input.dataset.id}"]`)
                inputs.forEach(el => {
                    if (input.name === el.name) {
                        el.setAttribute('required', '')
                    } else {
                        el.removeAttribute('required')
                    }
                })
                input.checked = true
            } else {
                input.value = value
            }
        } else if (input.id === "theSame") {
            input.checked = value === 'notChecked' ? false : true
            input.dispatchEvent(new Event('change'))
        }

    })

    const listInputs = [...document.querySelectorAll('.variants > .inputs  input')]

    document.querySelector('.modalWindow__button').addEventListener('click', () => {
        document.querySelector('.modalWindow').classList.remove('on')
        grecaptcha.reset()
    })


    async function onSubmit(token) {

        const button = document.querySelector('.lotos_send_from')
        const buttonText = button.querySelector('span')
        const buttonDiv = button.querySelector('div')

        button.classList.add('blocked')
        buttonText.classList.add('blocked')
        buttonDiv.classList.remove('blocked')


        try {
            const body = new FormData(document.querySelector('.contract__form'));

            listInputs.forEach(input => {
                if (!input.checked) {
                    body.append(input.name, '')
                } else {
                    body.set(input.name, '+')
                }
            })

            body.append('action', 'my_action');

            const response = await fetch(ajax_obj.ajaxurl, {
                method: 'POST',
                body
            });
            const res = await response.json();

            document.querySelector('.modalWindow').classList.add('on')

        } catch (e) {
            console.log(e)
        }

        button.classList.remove('blocked')
        buttonText.classList.remove('blocked')
        buttonDiv.classList.add('blocked')

        grecaptcha.reset()
    }


    $("#ls-form").validate({
        submitHandler: function(form) {
            document.querySelector(".g-recaptcha").click();
        },
        errorPlacement: function(error, element) {

            const dataId = element.data("id") || null;

            if (dataId) {
                const message = document.querySelector(`small[data-id="${dataId}"]`)
                const wrapper = document.querySelector(`div[data-variant-id="${dataId}"]`)
                message instanceof Element && message.classList.add('error')
                wrapper instanceof Element && wrapper.classList.add('error')
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
            period: {
                // required: true,
                minlength: 0,
                isPeriod: true,
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
            lsEmailUser: {
                required: true,
                email: true
            }
        }
    });

    $("#lsPhone").mask("+7(999) 999-9999");
    $("#lsAddPhone").mask("+7(999) 999-9999");
</script>