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
        const targetElem = document.querySelectorAll('.elem_animate'),
              targetText = document.querySelectorAll('.text_animate'),
              targetFields = document.querySelectorAll('.elem_animate_field');

            
        if (window.innerWidth > 992) {
            targetFields.forEach(field => {
                const fieldElems = field.querySelectorAll('.elem_animate'),
                      first = field.querySelector('.first-animate');

                let delay = 0,
                    diff = 0.7;

                if (first) {
                    first.style.transitionDelay = delay+'s';
                    delay += diff;
                }

                fieldElems.forEach(item => {
                    if (!first || item != first) {
                        item.style.transitionDelay = delay+'s';
                        delay += diff; 
                    }
                });
            });
        }
        
        targetText.forEach(item => {
            let textCont = item.textContent.trim(),
                newInner = '',
                transit = 0;

            for (let i = 0; i < textCont.length; i++) {
                newInner += `<i class="or" style="transition: 0.4s all ${transit.toFixed(2)}s">${textCont[i]}</i>`;
                transit += 0.03;
            }
            item.innerHTML = newInner;
        });

        function returnHeight() {
            return window.innerWidth <= 600 ? window.innerHeight / 1.05 : window.innerHeight / 1.2
        }

        function removeAnim() {
            targetElem.forEach(item => item.classList.remove('anim'));
        }

        function setAnim(mass) {
            mass.forEach(item => {
                if (returnHeight() + window.scrollY >= item.getBoundingClientRect().y + window.scrollY) {
                    item.classList.add('anim');
                }
            });
        }

        function setChildAnim(mass) {
            if (window.innerWidth > 992) {
               mass.forEach(item => {
                    if (returnHeight() + window.scrollY >= item.getBoundingClientRect().y + window.scrollY) {
                        item.querySelectorAll('.elem_animate').forEach(itemChild => {
                            itemChild.classList.add('anim');
                        });
                    }
                }); 
            }
        }

        setChildAnim(targetFields);
        setAnim(targetElem);
        setAnim(targetText);

        window.addEventListener('scroll', () => {
            setChildAnim(targetFields);
            setAnim(targetElem);
            setAnim(targetText);
        });

        window.onbeforeunload = () => {
            removeAnim();
        }
        window.onpageshow = function() {
            setChildAnim(targetFields);
            setAnim(targetElem);
            setAnim(targetText);
        };
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
}

export default other;