const other = () => {
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

    const getCookie = (name) => {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));

        return matches ? decodeURIComponent(matches[1]) : '';
    }

    const setCookie = (name, value, options = {}) => {
        options = {
            path: '/',
            ...options
        };

        if (options.expires instanceof Date) 
            options.expires = options.expires.toUTCString();

        let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

        for (let optionKey in options) {
            updatedCookie += "; " + optionKey;

            let optionValue = options[optionKey];
            if (optionValue !== true) {
                updatedCookie += "=" + optionValue;
            }
        }

        document.cookie = updatedCookie;
    }

    try {
        const bodyClickContent = document.querySelectorAll('.body-click-content'),
              bodyClickTarget = document.querySelectorAll('.body-click-target');

        document.body.addEventListener('click', (e) => {
            if (e.target.classList.contains('body-click-target') || e.target.classList.contains('body-click-close')) {
                e.preventDefault();

                let contentElem = 
                    e.target.getAttribute('data-content') ? 
                    document.querySelector('.body-click-content[data-content="'+e.target.getAttribute('data-content')+'"]') : 
                    (e.target.nextElementSibling ? e.target.nextElementSibling : '');

                bodyClickContent.forEach(item => contentElem != item && item.classList.contains('global-hide') ? item.classList.remove('active') : '');
                bodyClickTarget.forEach(item => item.classList.contains('global-hide') && item != e.target ? item.classList.remove('active') : '');
                
                if (contentElem && contentElem.classList.contains('body-click-content'))
                    contentElem.classList.toggle('active');
                else 
                    e.target.parentElement.classList.remove('active');

                !e.target.classList.contains('not-active') ? e.target.classList.toggle('active') : '';
            } else if (!e.target.closest('.body-click-content')) {
                bodyClickContent.forEach(item => !item.classList.contains('not-global') ? item.classList.remove('active') : '');
                bodyClickTarget.forEach(item => !item.classList.contains('not-active') && !item.classList.contains('not-global') ? item.classList.remove('active') : '');
            }
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const modal = document.querySelector('.modal'),
              modalBtns = document.querySelectorAll('[data-call-modal]'),
              modalItems = document.querySelectorAll('.modal__item');

        modalBtns.forEach(btn => {
            if (btn.getAttribute('data-call-modal')) {
                btn.addEventListener('click', () => {
                    modalItems.forEach(item => item.classList.remove('active'));

                    modal.classList.add('active');
                    modal.querySelector('.modal__item[data-modal="'+btn.getAttribute('data-call-modal')+'"]')
                        .classList.add('active');

                    hideScroll();
                });
            }
        });

        modal.addEventListener('click', (e) => {
            if (e.target == modal || e.target.classList.contains('modal__close') || e.target.classList.contains('modal__hide')) {
                modalItems.forEach(item => item.classList.remove('active'));
                modal.classList.remove('active');
                showScroll();
            }
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const headerBurger = document.querySelectorAll('.header__burger'),
              headerMobile = document.querySelector('.header__mobile'),
              headerMobileClose = headerMobile.querySelector('.header__mobile-close');

        const closeMobileMenu = () => {
            headerBurger.forEach(item => item.classList.remove('active'));
            headerMobile.classList.remove('active');
            showScroll();
        }

        headerBurger.forEach(burger => {
            burger.addEventListener('click', () => {
                burger.classList.toggle('active');
                headerMobile.classList.toggle('active');
                toggleScroll();
            });
        });

        headerMobileClose && headerMobileClose.addEventListener('click', closeMobileMenu);

        document.body.addEventListener('click', (e) => {
            if (
                !e.target.classList.contains('header__mobile') && 
                !e.target.classList.contains('header__burger') && 
                !e.target.closest('.header__mobile')
            ) closeMobileMenu();
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        Fancybox.bind("[data-fancybox]");

        const iframeUsage = document.querySelectorAll('a[data-iframe-usage]');

        iframeUsage.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();

                new Fancybox([
                    {
                        type: 'html',
                        src: '<iframe src="'+item.href+'" class="framed-video" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
                    }
                ]);
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const tabsField = document.querySelectorAll('.tabs-field');

        tabsField.forEach(field => {
            const tabs = field.querySelectorAll('.tabs-name'),
                  tabsContent = field.querySelectorAll('.tabs-content');

            const setTab = (i = 0) => {
                tabs.forEach(item => item.classList.remove('active'));
                tabsContent.forEach(item => item.classList.remove('active'));

                tabs[i].classList.add('active');
                tabsContent[i].classList.add('active');
            }

            setTab();

            tabs.forEach((tab, i) => {
                tab.addEventListener('click', () => setTab(i)); 
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
    
    try {
        const headerBarCats = document.querySelector('.header__bar-cats'),
              headerBarBtn = document.querySelector('.header-bar-btn'),
              catsClose = headerBarCats.querySelector('.header__bar-cats-close'),
              catsList = headerBarCats.querySelector('.header__bar-cats-list'),
              catsLinks = headerBarCats.querySelector('.header__bar-cats-links'),
              catsListItems = catsList.querySelectorAll('.header__bar-cats-item'),
              catsLinksItems = catsLinks.querySelectorAll('.header__bar-cats-subs');

        const setActive = (i = 0) => {
            if (window.innerWidth <= 576) hideScroll();

            catsList.classList.add('active');
            catsLinks.classList.add('active');

            catsListItems.forEach(item => item.classList.remove('active'));
            catsLinksItems.forEach(item => item.classList.remove('active'));

            catsListItems[i].classList.add('active');
            catsLinksItems[i].classList.add('active');
        }

        const closeActive = () => {
            catsList.classList.remove('active');
            catsLinks.classList.remove('active');

            catsListItems.forEach(item => item.classList.remove('active'));
            catsLinksItems.forEach(item => item.classList.remove('active'));
        }

        if (window.innerWidth > 576) setActive();

        catsListItems.forEach((listItem, i) => {
            listItem.addEventListener('click', () => setActive(i));
            listItem.addEventListener('mouseenter', () => setActive(i));
        });

        catsClose.addEventListener('click', () => {
            if (catsLinks.classList.contains('active')) closeActive();
            else {
                headerBarBtn.classList.remove('active');
                headerBarCats.classList.remove('active');
            }

            showScroll();
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const orderRadioField = document.querySelectorAll('.order-radio-field');

        orderRadioField.forEach(field => {
            const labels = field.querySelectorAll('label');

            labels.forEach(label => {
                const labelInp = label.querySelector('input');

                if (labelInp.checked) label.classList.add('active');

                labelInp.addEventListener('change', () => {
                    labels.forEach(item => item.classList.remove('active'));
                    label.classList.add('active');
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const cookieBlock = document.querySelector('.cookie'),
              cookieBtn = cookieBlock.querySelector('.cookie__btn'),
              cookieCheckbox = cookieBlock.querySelector('input[name="cookie-check"]');

        if (!getCookie('cookie-check')) {
            cookieBlock.classList.add('active');

            cookieCheckbox.addEventListener('change', () => {
                if (cookieCheckbox.checked)
                    cookieBtn.classList.remove('disable');
                else cookieBtn.classList.add('disable');
            });

            cookieBtn.addEventListener('click', () => {
                setCookie('cookie-check', '1', {'max-age': 3600*24*31});
                cookieBlock.classList.remove('active');
            });
        }
    } catch (e) {
        console.log(e.stack);
    }
}

export default other;