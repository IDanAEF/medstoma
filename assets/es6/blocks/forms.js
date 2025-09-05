const forms = () => {
    const hideScroll = () => {
        document.querySelector('body').classList.add('fixed');
        document.querySelector('html').classList.add('fixed');
    }

    const showScroll = () => {
        document.querySelector('body').classList.remove('fixed');
        document.querySelector('html').classList.remove('fixed');
    }

    const toggleScroll = () => {
        document.querySelector('body').classList.toggle('fixed');
        document.querySelector('html').classList.toggle('fixed');
    }

    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
    }

    try {
        const selectFields = document.querySelectorAll('.select-field');

        selectFields.forEach(field => {
            const fieldName = field.querySelector('.select-field-name'),
                  fieldNameDefault = fieldName.getAttribute('data-default').trim(),
                  fieldNameSpan = fieldName.querySelector('span'),
                  fieldList = field.querySelector('.select-field-list'),
                  fieldListItems = fieldList.querySelectorAll('span'),
                  fieldMulti = field.classList.contains('multi');

            fieldListItems.forEach(listItem => {
                listItem.addEventListener('click', () => {
                    if (!fieldMulti) {
                        fieldNameSpan.textContent = listItem.textContent.trim();
                        fieldListItems.forEach(item => item != listItem ? item.classList.remove('active') : '');
                    }

                    listItem.classList.toggle('active');
                    fieldList.classList.remove('active');
                    fieldName.classList.remove('active');

                    if (!fieldMulti && !listItem.classList.contains('active') && fieldNameDefault) 
                        fieldNameSpan.textContent = fieldNameDefault;
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const formAjax = document.querySelectorAll('form.form'),
              modal = document.querySelector('.modal'),
              modalSuccess = document.querySelector('.modal__success'),
              modalItems = document.querySelectorAll('.modal__item');

        formAjax.forEach(form => {
            const formBtn = form.querySelector('.btn');

            form.addEventListener('submit', (e) => {
                e.preventDefault();

                formBtn.classList.add('disable');

                const formData = new FormData(form);

                postData(form.action, formData)
                .then((res) => {
                    formBtn.classList.remove('disable');
                    modal.classList.add('active');
                    modalItems.forEach(item => item.classList.remove('active'));
                    modalSuccess.classList.add('active');
                    hideScroll();
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default forms;