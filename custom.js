'use strict'

window.addEventListener('DOMContentLoaded', () => {
    try {
        const counterFields = document.querySelectorAll('.counter');

        counterFields.forEach(counter => {
            const counterInp = counter.querySelector('input'),
                  counterInc = counter.querySelector('.increase'),
                  counterDec = counter.querySelector('.decrease');

            let curr = +counterInp.value,
                max = +(counterInp.getAttribute('data-max') || '').trim(),
                min = +(counterInp.getAttribute('data-min') || '1').trim();

            const setVal = (dirr = 0, num = -1) => {
                curr += dirr;

                if (num != -1) curr = +num.replace(/\D/g, '');

                if (curr < min) curr = min;
                if (max && curr > max) curr = max;

                counterInp.value = curr;
            }

            counterInc.addEventListener('click', () => setVal(1));
            counterDec.addEventListener('click', () => setVal(-1));
            counterInp.addEventListener('input', () => counterInp.value = counterInp.value.replace(/\D/g, ''));
            counterInp.addEventListener('blur', () => setVal(0, counterInp.value));
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const cartTable = document.querySelector('.order__cart-table'),
              cartTableItems = cartTable.querySelectorAll('.home__products-item'),
              cartEmpty = document.querySelector('.order__cart-empty'),
              cartBtns = document.querySelector('.order__cart-btns');

        let count = cartTableItems.length;

        cartTableItems.forEach(item => {
            let itemDelete = item.querySelector('.delete');

            itemDelete.addEventListener('click', () => {
                item.remove();
                
                if (--count === 0) {
                    cartTable.style.display = 'none';
                    cartBtns.style.display = 'none';
                    cartEmpty.classList.add('active');
                }
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
});