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
        const checkFields = document.querySelectorAll('.checkboxes');
        
        checkFields.forEach(field => {
            const fieldItems = document.querySelectorAll('.checkboxes-item'),
                  fieldRadio = field.classList.contains('radio');

            fieldItems.forEach(checkItem => {
                let checkInput = checkItem.querySelector('input');

                if (checkInput.checked || checkItem.classList.contains('active')) {
                    checkItem.classList.add('active');
                    checkInput.checked = true;
                }

                checkInput.addEventListener('change', () => {
                    if (fieldRadio) {
                        fieldItems.forEach(item => {
                            if (item != checkItem) {
                                item.classList.remove('active');
                                item.querySelector('input').checked = false;
                            }
                        });
                    }

                    if (checkInput.checked) checkItem.classList.add('active');
                    else checkItem.classList.remove('active');
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const selectFields = document.querySelectorAll('.select-field');

        selectFields.forEach(field => {
            const fieldName = field.querySelector('.select-field-name'),
                  fieldNameDefault = fieldName.getAttribute('data-default').trim(),
                  fieldNameSpan = fieldName.querySelector('span'),
                  fieldList = field.querySelector('.select-field-list'),
                  fieldSearch = fieldList.querySelector('input'),
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

            fieldSearch && fieldSearch.addEventListener('input', () => {
                let searchText = fieldSearch.value.trim();

                fieldListItems.forEach(item => {
                    if (!searchText || item.textContent.trim().indexOf(searchText) != -1)
                        item.style.display = '';
                    else item.style.display = 'none';
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