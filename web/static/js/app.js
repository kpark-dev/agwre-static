(async () => {

    var UIElement = (function () {
        var DOMElem = {
            recentViewBtn: '#recent-views-button',
            recentViewBtnClose: '#recent-views-close',
            mobileMenuBtn: '#mobile-menu-btn',
            slideDownBtn: '.button-slide-down',
            modalContent: '.modal-popup',
            browseEstateBtn: '#browseEstate',
            bookWalkThroughBtn: '#bookWalkthrough',
            homesDropDown: '.estate-items-holder .homes-holder',
            navTabMenu: '.navTabMenuItem',
            navTabContent: '.navTabContent',
            grid: '.grid',
            displayBox: '.display-homes-box',
            buttonViewType: '.button-view-type',
            cssSlider: '.css-slider',
            goToTopMore: '.button-go-top'
        };

        return {
            getDOMElem: function () {
                return DOMElem;
            }
        }
    })();

    var UIController = (function ($, ui) {
        var dom = ui.getDOMElem();

        var windowLoad = function () {

        };

        var windowScroll = function () {
            $(window).on('scroll', function () {

            })
        }

        var onWindowResize = function () {
            $(window).on('resize', function () {

            })
        };

        var slickSlider = function (elem, options) {
            $(elem).slick(options)
        };
        var unslickSlider = function (elem) {
            const $elem = $(elem);
            if ($elem.hasClass('slick-initialized')) {
                $elem.slick('unslick');
            }
        };

        var chosenSelect = function (elem) {
            $(elem).chosen({
                disable_search_threshold: 10,
                search_contains: true
            });
        }

        // var sameHeight = function (elem) {
        //     $(elem).matchHeight({
        //         byRow: false
        //     });
        // };

        // var sameHeightByRow = function (elem) {
        //     $(elem).matchHeight({
        //         byRow: true
        //     });
        // };

        var modalFade = function (elem, callback, json) {
            const $elem = $(elem);
            $elem.modal({
                fadeDuration: 200
            });
            if (typeof callback == 'function') {
                callback($elem, json);
            }
        };

        //Click Events
        var clickEvents = function () {

            if ($('.filterTrigger').length) {
                $('.filterTrigger').on('click', function (e) {
                    e.preventDefault();
                    $('.filterContents').addClass('active');
                })
            }
            if ($('.filterClose').length) {
                $('.filterClose').on('click', function (e) {
                    e.preventDefault();
                    $('.filterContents').removeClass('active');
                })
            }

            if ($('.subMenu .withSubMenu').length) {
                $('.subMenu .withSubMenu').on('click', function (e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $("#" + target).addClass("active");
                })
            }

            if ($('.closeMenuBtn').length) {
                $('.closeMenuBtn').on('click', function (e) {
                    e.preventDefault();
                    $(".subMenuItems").removeClass("active");
                })
            }

            if ($('.backToManinMenu').length) {
                $('.backToManinMenu').on('click', function (e) {
                    e.preventDefault();
                    $(".subMenuItems").removeClass("active");
                })
            }

            if ($('.js-scroll-to-form').length) {
                $('.js-scroll-to-form').on('click', function (e) {
                    e.preventDefault();
                    $("html, body").animate({ scrollTop: $('.forms-block').offset().top });
                })
            }
            window.addEventListener('click', function (e) {
                document.querySelectorAll('.dropdown').forEach(function (dropdown) {
                    if (!dropdown.contains(e.target)) {
                        // Click was outside the dropdown, close it
                        dropdown.open = false;
                    }
                });
            });
            $('.contact-form-trigger').on('click', function () {
                var target = $(this).data('target');
                var trigger = $(this);
                var time = 0;
                if (trigger.hasClass('active')) {
                    trigger.removeClass('active');
                    $('#' + target).removeClass('active').slideUp();
                } else {
                    if ($('.contact-forms .contact-form.active').length) {
                        time = 500;
                    }
                    $('.contact-forms .contact-form.active').removeClass('active').slideUp();
                    $('.contact-form-trigger.active').removeClass('active');
                    setTimeout(function () {
                        trigger.toggleClass('active');
                        $('#' + target).addClass('active').slideDown();
                    }, time);
                }
            });

            $('.recently-viewed .trigger').on('click', function () {
                $(this).toggleClass('active');
                $('.sub-menu-holder').removeClass('active');
                $('header').toggleClass('recently-viewed-open');
                $('.recently-viewed-holder').slideToggle();
            });

            $('.recently-viewed-holder .close').on('click', function () {
                $('header').toggleClass('recently-viewed-open');
                $('.recently-viewed-holder').slideToggle();
            });

            $('.js-star:not(.favourites-toggle-button)').on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('active');
            });

            $('.js-show-response').on('click', function (e) {
                e.preventDefault();
                $('.modal-content.form-content').addClass('hide');
                $('.modal-content.thankyou-content').removeClass('hide');
            });

            $('.js-close-enquire-modal').on('click', function (e) {
                e.preventDefault();
                $('.modal-close').click()
            });

            $('.show-enquire-modal').on('click', function (e) {
                e.preventDefault();
                $('#enquire_modal .modal-content.form-content').removeClass('hide');
                $('#enquire_modal .modal-content.thankyou-content').addClass('hide');
            });

            $('.show-display-homes-modal').on('click', function (e) {
                e.preventDefault();
                $('#display_homes_modal .modal-content.form-content').removeClass('hide');
                $('#display_homes_modal .modal-content.thankyou-content').addClass('hide');
            });

            $('.enquire-form button').on('click', function (e) {
                e.preventDefault();
                $('.enquire-form').addClass('hide');
                $('.enquire-form-response').removeClass('hide');
            });

            $('.enquire-side-bar-holder').click(function (event) {
                if (event.target.className === 'enquire-side-bar-holder active') {
                    $('.enquire-side-bar-holder').removeClass('active');
                    $("html, body").removeClass('no-scroll');
                    $("html, body").removeClass('with-overlay');
                }
            })

            $('.enquire-side-bar .close-side-bar img').on('click', function () {
                $('.enquire-side-bar-holder').removeClass('active');
                $("html, body").removeClass('no-scroll');
                $("html, body").removeClass('with-overlay');
            });

            $('.open-side-bar').on('click', function () {
                $('.enquire-form').removeClass('hide');
                $('.enquire-form-response').addClass('hide');
                $('.enquire-side-bar-holder').addClass('active');
                $("html, body").addClass('no-scroll');
                $("html, body").addClass('with-overlay');
            });

            const $floorPlanTabControl = $('.floorplan-tab-control:not(.style-only)');
            if ($floorPlanTabControl.length) {
                initHomeDesignsFacadeSlider();
                $floorPlanTabControl.find('.tab-control').on('click', function (e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $(this).parent('.floorplan-tab-control').find('.tab-control').removeClass('active');
                    $(this).parent('.floorplan-tab-control').next('.floorplan-tab-content').find('.tab-content').removeClass('active');
                    $(this).addClass('active');
                    $(this).parent('.floorplan-tab-control').next('.floorplan-tab-content').find('#' + target).addClass('active');
                    initHomeDesignsFacadeSlider();
                });
            }

            $('.tabset .tab-controls label').each((index, element) => {
                const $this = $(element);
                const tabState = {
                    disabled: false
                };
                $this.on('click', function (e) {
                    e.preventDefault();
                    if (tabState.disabled) {
                        return;
                    }
                    var target = $this.data('target');
                    $('.tabset .tab-controls label').removeClass('active');
                    $('.tab-panels section').removeClass('active');
                    $this.addClass('active');
                    const $targetTabPanel = $('.tab-panels #' + target);
                    $targetTabPanel.addClass('active');
                    $targetTabPanel.get(0).dispatchEvent(new CustomEvent('tabShown', {
                        detail: { tabState }
                    }));

                    if ($('.dh-tabset').length) {
                        $targetTabPanel.find('.dh-tab-control').removeClass('active');
                        $targetTabPanel.find('.dh-tab-panel').removeClass('active');
                        $targetTabPanel.find('.dh-tab-control:first-child').addClass('active');
                        $targetTabPanel.find('.dh-tab-panel:first-child').addClass('active');

                        if (window.innerWidth < 1024) {
                            $('.dh-tabset .dh-tab-controls').slick({
                                adaptiveHeight: true,
                                variableWidth: true,
                                slidesToScroll: 1,
                                swipe: true,
                                infinite: false,
                                swipeToSlide: true,
                                dots: false,
                                arrows: false
                            });
                        }
                    }
                });
            });

            $('.home-designs-list__tabs .tab-item').on('click', function (e) {
                e.preventDefault();
                var target = $(this).data('target');
                $(this).parent('.tab-list').find('.tab-item').removeClass('active');
                $(this).parent('.tab-list').parent('.home-designs-list__tabs').find('.tab-item-content').removeClass('active');
                $(this).addClass('active');
                $(this).parent('.tab-list').parent('.home-designs-list__tabs').find('.tab-item-content.' + target).addClass('active');
                initFacadeSlider();
                initHomeDesignsFacadeSlider();
            });

            $('.favourites__tabs .tab-item').on('click', function (e) {
                e.preventDefault();
                var target = $(this).data('target');
                $(this).parent('.tab-list').find('.tab-item').removeClass('active');
                $(this).parent('.tab-list').parent('.favourites__tabs').find('.tab-item-content').removeClass('active');
                $(this).addClass('active');
                $(this).parent('.tab-list').parent('.favourites__tabs').find('.tab-item-content.' + target).addClass('active');
                initFacadeSlider();
                initHomeDesignsFacadeSlider();
            });

            // menu
            $headerWithSubmenu = $('header .header-bottom .links .with-submenu');
            $headerWithSubmenu.on('mouseover', function () {
                $(this).addClass('active');
                $(".main-holder").addClass('submenu-overlay');
                $(".footer-holder").addClass('submenu-overlay');
            });
            $headerWithSubmenu.on('mouseout', function () {
                $(this).removeClass('active');
                $(".main-holder").removeClass('submenu-overlay');
                $(".footer-holder").removeClass('submenu-overlay');
            });

            $('.main-menu.with-sub-menu .main-link').on('click', function (e) {
                e.preventDefault();
                $(this).parent('.with-sub-menu').toggleClass('active');
                $(this).next('.sub-menu').slideToggle();
            });

            const sideBarMenu = document.getElementById('sidebar-menu')
            if (sideBarMenu) {
                sideBarMenu.addEventListener('change', (event) => {
                    $("html, body").toggleClass('no-scroll');
                })
            }

            const $rangeItem = $('.range-item:not(.hb-filter-checkbox)');
            if ($rangeItem.length) {
                $rangeItem.on('click', function () {
                    $(this).toggleClass('active');
                });
            }

            $('.js-toggle-filter').on('click', function () {
                $(this).toggleClass('active');
                $('.bottom-filter').slideToggle();
            });

            $('.js-toggle-filter-mobile').on('click', function () {
                $('.mobile-filter').slideToggle();
            });

            $('.js-toggle-filter-mobile-1').on('click', function () {
                $('.mobile-filter').slideToggle();
                $('.js-toggle-mobile-filter').toggleClass('active');
            });

            $('.js-toggle-mobile-filter').on('click', function () {
                $(this).toggleClass('active');
                $('.mobile-home-filter').toggleClass('active');
                $('.mobile-filter').slideToggle();
            });

            $('.close-home-preview').on('click', function () {
                var preview = $(this).parent('.col-span-12').parent('.row').parent('.col-span-12').parent('.home-preview').parent('.home-preview-holder').parent('.home-designs-preview');
                preview.toggleClass('active');
                // $(this).parent('.column').parent('.floorplan-blocks').parent('.column').parent('.row').parent('.home-preview-holder').parent('.home-designs-preview').slideToggle();
                preview.find('.js-toggle-preview').removeClass('disabled');
            });

            $('.close-facade-preview').on('click', function () {
                var preview = $(this).parent('.col-span-6').parent('.row').parent('.fullwidth-col').parent('.row').parent('.col-span-12').parent('.home-preview').parent('.home-preview-holder').parent('.home-designs-preview');
                preview.toggleClass('active');
                preview.find('.js-toggle-preview').removeClass('disabled');
                $('.home-designs-preview').css('min-height', '0');
            });

            $('.close-map-preview').on('click', function () {
                var mapBlock = $('.fullwidth-map-block');
                mapBlock.slideToggle();
                var text = "Open map";
                if ($(this).hasClass('active')) {
                    text = "Close map";
                }
                $(this).html(text).toggleClass('active');
            });

            $('.js-toggle-preview').on('click', function (e) {
                // if (window.innerWidth > 1023) {
                e.preventDefault();
                var preview = $(this).parent('.home-designs-list__actions').parent('.home-designs-list__item').next('.home-designs-preview');
                var time = 0;
                $('.home-designs-preview').css('min-height', '0');
                if (preview.hasClass('active')) {
                    preview.removeClass('active');
                } else {
                    if ($('.home-designs-preview.active').length) {
                        time = 500;
                    }
                    $('.home-designs-preview.active').removeClass('active');
                    $('.js-toggle-preview').removeClass('disabled');
                    setTimeout(function () {
                        preview.toggleClass('active');
                        var minHValue = '912px';
                        if (window.innerWidth < 768) {
                            minHValue = '360px';
                        }
                        $('.home-designs-preview.active').css('min-height', minHValue);
                        $(this).addClass('disabled')
                        setTimeout(function () {
                            var dataTarget = $('.home-designs-preview.active')
                            var floatingHeader = 0;
                            if (window.innerWidth < 1200) {
                                floatingHeader = 107;
                            }
                            $('html, body').animate({
                                scrollTop: $(dataTarget).offset().top - floatingHeader
                            }, 500);
                            var previewHeight = $('.home-designs-preview.active .home-preview').height();
                            $('.home-designs-preview.active').css('min-height', previewHeight + 'px');
                        }, 1000);
                    }, time);
                }
                // }
            });


            $(".anchor-to-link").click(function (e) {
                e.preventDefault();
                var dataTarget = $(this).data('target');
                $('html, body').animate({
                    scrollTop: $("#" + dataTarget).offset().top
                }, 1000);
            });

            $(".additional-features .item").click(function (e) {
                e.preventDefault();
                $(this).toggleClass('active');
            });


            $('.dh-tabset .dh-tab-controls .dh-tab-control').on('click', function (e) {
                e.preventDefault();
                var target = $(this).data('target');
                if (window.innerWidth < 1024) {
                    $(this).parent('.slick-track').parent('.slick-list').parent('.dh-tab-controls').parent('.dh-tabset').find('.dh-tab-control').removeClass('active');
                    $(this).parent('.slick-track').parent('.slick-list').parent('.dh-tab-controls').parent('.dh-tabset').find('.dh-tab-panel').removeClass('active');
                    $(this).addClass('active');
                    $(this).parent('.slick-track').parent('.slick-list').parent('.dh-tab-controls').parent('.dh-tabset').find('.dh-tab-panel#' + target).addClass('active');
                } else {
                    $(this).parent('.dh-tab-controls').parent('.dh-tabset').find('.dh-tab-control').removeClass('active');
                    $(this).parent('.dh-tab-controls').parent('.dh-tabset').find('.dh-tab-panel').removeClass('active');
                    $(this).addClass('active');
                    $(this).parent('.dh-tab-controls').parent('.dh-tabset').find('.dh-tab-panel#' + target).addClass('active');
                }
            });

        }

        var initflexSlider = function () {
            // $('.flex-slider .flex-slider-item').on('click', function () {
            //     $('.flex-slider .flex-slider-item').removeClass('active');
            //     $(this).toggleClass('active');
            // });
            $('.flex-slider ul li').on('click', function (e) {
                var target = $(this).data('target');
                if ($(this).hasClass('active')) {
                    e.preventDefault();
                    location.href = target;
                }
                $('.flex-slider ul li').removeClass('active');
                $(this).toggleClass('active');
            });
        }

        var videoEvents = function () {
            if ($('.js-play-video').length) {
                $('html').on('click', '.js-play-video', function () {
                    var vimeoHeight, vimeoWidth;
                    vimeoHeight = $(this).outerHeight();
                    vimeoWidth = $(this).outerWidth();

                    $('.trailer-image img').hide();

                    var $iframe = $('<iframe />', {
                        src: 'https://www.youtube.com/embed/fla02yFATuY?autoplay=1&rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0',
                        class: 'vimeo',
                        frameborder: 0
                    })

                    $iframe.attr('width', vimeoWidth).attr('height', vimeoHeight);

                    $(this).parent().removeClass('video');
                    $(this).replaceWith($iframe);

                    if ($('.trailer-text').length) {
                        $('.trailer-text').hide();
                    }

                });
            }
        }

        //Unite
        var unitegallery = function (id) {
            var $id = $(id);
            if ($id.length) {
                var galleryOptions = {
                    gallery_theme: "tiles",
                    tiles_col_width: 370,
                    tiles_align: "center",
                    tiles_exact_width: false,
                    tiles_space_between_cols: 30,
                    tiles_space_between_cols_mobile: 30,
                    tiles_include_padding: false,
                    tiles_min_columns: 1,
                    tiles_max_columns: 4,
                    tile_enable_border: false,
                    tile_enable_outline: false,
                    tile_enable_shadow: false,
                    tile_width: 370,
                    tile_height: 155,
                    theme_gallery_padding: 0,
                    lightbox_type: "compact",
                    lightbox_overlay_opacity: 0.85,
                    lightbox_slider_image_shadow: false,
                    lightbox_arrows_position: "inside",
                    lightbox_slider_image_border: false,
                    lightbox_slider_image_border_width: 20,
                    lightbox_slider_image_border_color: "transparent",
                    lightbox_arrows_inside_alwayson: true,
                    tiles_align: "left",
                }
                var galleryFacade = $id.unitegallery(galleryOptions);
                var galleryFacadeCaption = $id.next('.gallery-details').find('.caption');
                var galleryFacadeTotal = $id.next('.gallery-details').find('.counter .total');
                var galleryFacadeCurrent = $id.next('.gallery-details').find('.counter .current-num');

                $('.ug-thumb-wrapper,.ug-thumb-image,.ug-thumb-overlay').addClass('aos-item').attr('data-aos', 'fade-in').attr('data-aos-duration', '800');
                initAnimation();
                galleryFacadeTotal.html(galleryFacade.getNumItems());
                galleryFacade.on("item_change", function (num, data) {
                    galleryFacadeCaption.html(data.description);
                    galleryFacadeCurrent.html(num + 1);
                });
            }
        }

        //Isotope
        var isotopeInit = function (elem) {
            if ($(elem).length) {
                var options = {
                    itemSelector: '.column',
                    layoutMode: 'masonry', //masonry
                    percentPosition: true,
                };

                $(elem).each(function () {
                    var self = $(this);
                    if (typeof $(this).imagesLoaded == 'function') {
                        $(this).imagesLoaded(function (instance) {
                            if (instance.isComplete) {
                                self.isotope(options);
                            }
                        });
                    }
                })
            }
        };

        var initAnimation = function () {
            if ($('.aos-item').length) {
                AOS.init({
                    easing: 'ease-in-out-sine'
                });
            }
        };

        var initPhotoSwipeFromDOM = function (gallerySelector) {

            // parse slide data (url, title, size ...) from DOM elements 
            // (children of gallerySelector)
            var parseThumbnailElements = function (el) {
                var thumbElements = el.childNodes,
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl,
                    linkEl,
                    size,
                    item;

                for (var i = 0; i < numNodes; i++) {

                    figureEl = thumbElements[i]; // <figure> element

                    // include only element nodes 
                    if (figureEl.nodeType !== 1) {
                        continue;
                    }



                    if (figureEl.className.indexOf('slick-cloned') > 0) {
                        continue;
                    }


                    linkEl = figureEl.children[0]; // <a> element

                    size = linkEl.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };



                    if (figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML;
                    }

                    if (linkEl.children.length > 0) {
                        // <img> thumbnail element, retrieving thumbnail url
                        item.msrc = linkEl.children[0].getAttribute('src');
                    }

                    item.el = figureEl; // save link to element for getThumbBoundsFn
                    items.push(item);
                }

                // console.log(items);
                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && (fn(el) ? el : closest(el.parentNode, fn));
            };

            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function (e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                // find root element of slide
                var clickedListItem = closest(eTarget, function (el) {
                    return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                });

                if (!clickedListItem) {
                    return;
                }

                // find index of clicked item by looping through all child nodes
                // alternatively, you may define index via data- attribute
                var clickedGallery = clickedListItem.parentNode,
                    childNodes = clickedListItem.parentNode.childNodes,
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if (childNodes[i].nodeType !== 1) {
                        continue;
                    }

                    if (childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }


                if (index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe(index, clickedGallery);
                }
                return false;
            };

            // parse picture index and gallery index from URL (#&pid=1&gid=2)
            var photoswipeParseHash = function () {
                var hash = window.location.hash.substring(1),
                    params = {};

                if (hash.length < 5) {
                    return params;
                }

                var vars = hash.split('&');
                for (var i = 0; i < vars.length; i++) {
                    if (!vars[i]) {
                        continue;
                    }
                    var pair = vars[i].split('=');
                    if (pair.length < 2) {
                        continue;
                    }
                    params[pair[0]] = pair[1];
                }

                if (params.gid) {
                    params.gid = parseInt(params.gid, 10);
                }

                return params;
            };




            var openPhotoSwipe = function (index, galleryElement, disableAnimation, fromURL) {
                $('body').addClass('photoSwipeOpen');
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                index -= 1;
                // console.log(index);

                // define options (if needed)
                options = {

                    // define gallery index (for URL)
                    galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                    getThumbBoundsFn: function (index) {
                        // See Options -> getThumbBoundsFn section of documentation for more info
                        var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect();

                        return { x: rect.left, y: rect.top + pageYScroll, w: rect.width };
                    }

                };

                // PhotoSwipe opened from URL
                if (fromURL) {
                    if (options.galleryPIDs) {
                        // parse real index when custom PIDs are used 
                        // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                        for (var j = 0; j < items.length; j++) {
                            if (items[j].pid == index) {
                                options.index = j;
                                break;
                            }
                        }
                    } else {
                        // in URL indexes start from 1
                        options.index = parseInt(index, 10) - 1;
                    }
                } else {
                    options.index = parseInt(index, 10);
                }

                // exit if index not found
                if (isNaN(options.index)) {
                    return;
                }

                if (disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();

                gallery.listen('close', function () {
                    $('body').removeClass('photoSwipeOpen');
                });

                gallery.listen('afterChange', function () {

                    var curr = gallery.currItem;
                    var index2 = curr.el.dataset.slickIndex;
                    console.log(index2);
                    // $('.slider-main').slick('slickGoTo', index);

                    // $('.slider-main').slick("slickSetOption", 'speed', 1, true);
                    // $('.slider-main').slick("slickSetOption", 'waitForAnimate', false, false);
                    $('.slider-main').slick('slickGoTo', index2);
                    // $('.slider-main').slick("slickSetOption", 'speed', 300, true);
                    // $('.slider-main').slick("slickSetOption", 'waitForAnimate', true, false);

                });

            };

            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll(gallerySelector);

            for (var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                galleryElements[i].onclick = onThumbnailsClick;
            }

            // Parse URL and open gallery if it contains #&pid=3&gid=1
            var hashData = photoswipeParseHash();
            if (hashData.pid && hashData.gid) {
                openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
            }
        };

        var initSlickPhotoSwipeSlider = function (gallerySelector) {
            if ($(gallerySelector).length) {

                $(gallerySelector).slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    fade: false,
                    dots: true,
                    accessibility: false,
                    speed: 300
                });
            }
        };
        var initSlickPhotoSwipeSliderOneImage = function (gallerySelector) {

            // Init empty gallery array
            var container = [];

            // Loop over gallery items and push it to the array
            $(gallerySelector).find('figure').each(function () {
                var $link = $(this).find('a'),
                    item = {
                        src: $link.attr('href'),
                        w: $link.data('width'),
                        h: $link.data('height'),
                        title: $link.data('caption')
                    };
                container.push(item);
            });

            // Define click event on gallery item
            $(gallerySelector).find('a').click(function (event) {

                // Prevent location change
                event.preventDefault();

                // Define object and gallery options
                var $pswp = $('.pswp')[0],
                    options = {
                        index: $(this).parent('figure').index(),
                        bgOpacity: 0.85,
                        showHideOpacity: true
                    };

                // Initialize PhotoSwipe
                var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
                gallery.init();
            });
        };

        var initAccordion = function () {
            if ($('.accordion-tabs').length > 0) {
                var accordion = document.getElementsByClassName("accordion-tab");
                var i;

                for (i = 0; i < accordion.length; i++) {
                    accordion[i].addEventListener("click", function (e) {
                        e.preventDefault();
                        this.classList.toggle("active");
                        var accordionPanel = this.nextElementSibling;
                        if (accordionPanel.style.display === "block") {
                            accordionPanel.style.display = "none";
                        } else {
                            accordionPanel.style.display = "block";
                        }
                    });
                }
            }
            if ($('.accordion').length) {
                $(document).on('click', '.accordion', function () {
                    $this = $(this);
                    $target = $this.next();
                    $holder = $this.parent('.accordion-holder');

                    if (!$target.hasClass('active')) {
                        $this.addClass('active');
                        $holder.addClass('active');
                        $target.addClass('active').slideDown('slow');
                    } else {
                        $target.removeClass('active').stop(true, true).slideUp('slow');
                        $this.removeClass('active');
                        $holder.removeClass('active');
                    }
                });
            }
            if ($('.floorplan-accordion').length) {
                $(document).on('click', '.floorplan-accordion', function () {
                    $this = $(this);
                    $target = $this.next();

                    if (!$target.hasClass('active')) {
                        $this.addClass('active');
                        $target.addClass('active').slideDown('slow');
                    } else {
                        $target.removeClass('active').stop(true, true).slideUp('slow');
                        $this.removeClass('active');
                    }
                });
            }
        };

        //Range Slider
        var rangeSlider = function (range) {
            if ($(range).length) {
                $(range).slider({
                    range: "min",
                    min: 1,
                    max: 30,
                    value: 5,
                    create: function (event, ui) {
                        $(range).parent('.slider-wrapper').find('.ui-slider-handle').append("<span class='value'></span>");
                        $(range).parent('.slider-wrapper').find('.value').html('5 years');

                    },
                    slide: function (event, ui) {
                        $(range).parent('.slider-wrapper').find('.value').html(ui.value + ' years');
                    }
                });
            }
        };
        var rangeSliderNoVal = function (range) {
            if ($(range).length) {
                $(range).slider({
                    range: "min",
                    min: 1,
                    max: 100,
                    value: 80,
                    create: function (event, ui) {
                        //   $(range).parent('.slider-wrapper').find('.ui-slider-handle').append("<span class='value'></span>");
                        //   $(range).parent('.slider-wrapper').find('.value').html('5 years');

                    },
                    slide: function (event, ui) {
                        //    $(range).parent('.slider-wrapper').find('.value').html(ui.value + ' years');
                    }
                });
            }
        };

        var initDonutChart = function (chart) {
            if ($("#donutChart").length) {
                var options = {
                    animationEnabled: true,
                    title: {
                        text: ""
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: "90%",
                        // showInLegend: true,
                        // legendText: "{label}",
                        // indexLabel: "{label}: #percent%",
                        dataPoints: [
                            {
                                label: "", y: 500,
                                color: "#B9C5D1"
                            },
                            {
                                label: "", y: 60,
                                color: "#0E202C"
                            },
                            {
                                label: "", y: 30,
                                color: "#0e202c66"
                            }
                        ]
                    }]
                };
                $(chart).CanvasJSChart(options);
            }
        };
        var initDonutChart2 = function (chart) {
            if ($("#donutChart2").length) {
                var options = {
                    animationEnabled: true,
                    title: {
                        text: ""
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: "90%",
                        // showInLegend: true,
                        // legendText: "{label}",
                        // indexLabel: "{label}: #percent%",
                        dataPoints: [
                            {
                                label: "", y: 500,
                                color: "#B9C5D1"
                            },
                            {
                                label: "", y: 60,
                                color: "#0E202C"
                            },
                            {
                                label: "", y: 30,
                                color: "#0e202c66"
                            },
                            {
                                label: "", y: 30,
                                color: "#9fa6a9"
                            }
                        ]
                    }]
                };
                $(chart).CanvasJSChart(options);
            }
        };

        //Unite
        var uniteGallery = function (id) {
            if ($(id).length) {
                var galleryOptions = {
                    slider_enable_zoom_panel: false,
                    theme_enable_text_panel: false,
                    slider_control_zoom: false,
                    strippanel_enable_handle: false,
                    strippanel_enable_buttons: false,
                    theme_enable_hidepanel_button: false,
                    theme_enable_play_button: false,
                    thumb_height: 0,
                    thumb_width: 0,
                    slider_enable_bullets: false,
                    slider_bullets_offset_vert: 100,
                    slider_scale_mode: "down",
                }
                var galleryFacade = $(id).unitegallery(galleryOptions);
                var galleryFacadeCaption = $(id).next('.gallery-details').find('.caption');
                var galleryFacadeTotal = $(id).next('.gallery-details').find('.counter .total');
                var galleryFacadeCurrent = $(id).next('.gallery-details').find('.counter .current-num');


                galleryFacadeTotal.html(galleryFacade.getNumItems());
                galleryFacade.on("item_change", function (num, data) {
                    galleryFacadeCaption.removeAttr('style');
                    if ($.trim(data.description) != '') {
                        galleryFacadeCaption.html(data.description);
                    } else {
                        galleryFacadeCaption.css('visibility', 'hidden');
                    }
                    galleryFacadeCurrent.html(num + 1);
                });

                var firstSlide = galleryFacade.getItem(0);
                galleryFacadeCaption.html(firstSlide.description);
                galleryFacadeCurrent.html(firstSlide.index + 1);

                // change if other gallery added
                document.querySelector(id).onfullscreenchange = function () {
                    $(id).toggleClass('fullscreencast');
                    if (!$(id).children('.gallery-details').length) {
                        var countDrac = $(id).parents('.gallery-holder').children('.gallery-details').clone();
                        $(id).append(countDrac);


                        // for fullscreen view
                        var fullCaption = countDrac.find('.caption');
                        var fullTotal = countDrac.find('.counter .total');
                        var fullCurrent = countDrac.find('.counter .current-num');
                        fullTotal.html(galleryFacade.getNumItems());
                        galleryFacade.on("item_change", function (num, data) {
                            fullCaption.html(data.description);
                            fullCurrent.html(num + 1);
                        });
                    }
                }

                document.addEventListener('webkitfullscreenchange', fullScreenCast(id));
                document.addEventListener('mozfullscreenchange', fullScreenCast(id));
                document.addEventListener('msfullscreenchange', fullScreenCast(id));
                document.addEventListener('fullscreenchange', fullScreenCast(id));

                function fullScreenCast(id) {
                    $(id).toggleClass('fullscreencast');
                    if (!$(id).children('.gallery-details').length) {
                        var countDrac = $(id).parents('.gallery-holder').children('.gallery-details').clone();
                        $(id).append(countDrac);


                        // for fullscreen view
                        var fullCaption = countDrac.find('.caption');
                        var fullTotal = countDrac.find('.counter .total');
                        var fullCurrent = countDrac.find('.counter .current-num');
                        fullTotal.html(galleryFacade.getNumItems());
                        galleryFacade.on("item_change", function (num, data) {
                            fullCaption.html(data.description);
                            fullCurrent.html(num + 1);
                        });
                    }
                }
            }
        }

        var initArticleSlider = function () {
            if ($('.articleSlider').length) {
                if (window.innerWidth < 1024) {
                    $('.articleSlider').slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        swipe: true,
                        infinite: true,
                        swipeToSlide: true,
                        dots: true,
                        arrows: false,
                        responsive: [{
                            breakpoint: 1023,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToScroll: 1,
                                slidesToShow: 1,
                                infinite: false,
                                dots: true,
                            }
                        }
                        ]
                    });
                }
            }
        }

        var initTestimonialSlider = function () {
            $('.testimonial-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                swipe: true,
                infinite: true,
                swipeToSlide: true,
                dots: true,
                arrows: false,
                autoplay: false,
                autoplaySpeed: 4000,
            });
        }

        var initExploreHomesSlider = function () {
            if ($('.explore-homes-slider').length) {
                $('.explore-homes-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipe: true,
                    infinite: true,
                    swipeToSlide: true,
                    dots: true,
                    arrows: false,
                    autoplay: false,
                    autoplaySpeed: 4000,
                });
            }
        }
        var initExploreNeighborhoodSlider = function () {
            if ($('.explore-neighborhood-slider').length) {
                $('.explore-neighborhood-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipe: true,
                    swipeToSlide: true,
                    dots: true,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0',
                });
            }
        }
        var initRecentHomesSlider = function () {
            if ($('.recent-homes-slider').length) {
                $('.recent-homes-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipe: true,
                    infinite: true,
                    swipeToSlide: true,
                    dots: true,
                    arrows: false,
                    autoplay: false,
                    autoplaySpeed: 4000,
                });
            }
        }
        var initTeamSlider = function () {
            if ($('.teams-slider').length) {
                if (window.innerWidth < 768) {
                    $('.teams-slider').slick({
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true,
                        adaptiveHeight: true,
                        variableWidth: true,
                    });
                }
            }
        }

        var initTwoColSlider = function () {
            if ($('.two-col-slider').length) {
                var $swiperSelector = $('.two-col-slider .swiper-container');

                $swiperSelector.each(function (index) {
                    var $this = $(this);
                    $this.addClass('swiper-slider-' + index);

                    var dragSize = $this.data('drag-size') ? $this.data('drag-size') : 50;
                    var freeMode = $this.data('free-mode') ? $this.data('free-mode') : false;
                    var loop = $this.data('loop') ? $this.data('loop') : false;
                    var slidesDesktop = $this.data('slides-desktop') ? $this.data('slides-desktop') : 1.66;
                    var slidesTablet = $this.data('slides-tablet') ? $this.data('slides-tablet') : 1.3;
                    var slidesMobile = $this.data('slides-mobile') ? $this.data('slides-mobile') : 1;
                    var spaceBetween = $this.data('space-between') ? $this.data('space-between') : 56;

                    if (window.innerWidth < 1200) {
                        spaceBetween = 24;
                    }
                    if (window.innerWidth < 1024) {
                        spaceBetween = 16;
                    }

                    var swiper = new Swiper('.swiper-slider-' + index, {
                        direction: 'horizontal',
                        loop: loop,
                        freeMode: freeMode,
                        spaceBetween: spaceBetween,
                        breakpoints: {
                            1920: {
                                slidesPerView: slidesDesktop
                            },
                            768: {
                                slidesPerView: slidesTablet
                            },
                            320: {
                                slidesPerView: slidesMobile
                            }
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        scrollbar: {
                            el: '.swiper-scrollbar',
                            draggable: true,
                            // dragSize: dragSize
                        }
                    });
                });
            }
        }

        var initReviewsSlider = function () {
            if ($('.reviews-slider').length) {
                var $swiperSelector = $('.reviews-slider .swiper-container');

                $swiperSelector.each(function (index) {
                    var $this = $(this);
                    $this.addClass('reviews-swiper-slider-' + index);

                    var dragSize = $this.data('drag-size') ? $this.data('drag-size') : 50;
                    var freeMode = $this.data('free-mode') ? $this.data('free-mode') : false;
                    var loop = $this.data('loop') ? $this.data('loop') : false;
                    var slidesDesktop = $this.data('slides-desktop') ? $this.data('slides-desktop') : 2.2;
                    var slidesTablet = $this.data('slides-tablet') ? $this.data('slides-tablet') : 1.8;
                    var slidesMobile = $this.data('slides-mobile') ? $this.data('slides-mobile') : 1;
                    var spaceBetween = $this.data('space-between') ? $this.data('space-between') : 72;

                    if (window.innerWidth < 1200) {
                        spaceBetween = 24;
                    }

                    var swiper = new Swiper('.reviews-swiper-slider-' + index, {
                        direction: 'horizontal',
                        loop: loop,
                        freeMode: freeMode,
                        spaceBetween: spaceBetween,
                        breakpoints: {
                            1024: {
                                slidesPerView: slidesDesktop
                            },
                            768: {
                                slidesPerView: slidesTablet
                            },
                            320: {
                                slidesPerView: slidesMobile
                            }
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        scrollbar: {
                            el: '.swiper-scrollbar',
                            draggable: true,
                            // dragSize: dragSize
                        }
                    });
                });
            }
        }

        var initOtherHomesSlider = function () {
            if ($('.other-homes-slider').length) {
                var $swiperSelector = $('.other-homes-slider .swiper-container');

                $swiperSelector.each(function (index) {
                    var $this = $(this);
                    $this.addClass('other-homes-swiper-slider-' + index);

                    var dragSize = $this.data('drag-size') ? $this.data('drag-size') : 50;
                    var freeMode = $this.data('free-mode') ? $this.data('free-mode') : false;
                    var loop = $this.data('loop') ? $this.data('loop') : false;
                    var slidesDesktop = $this.data('slides-desktop') ? $this.data('slides-desktop') : 3.05;
                    var slidesTablet = $this.data('slides-tablet') ? $this.data('slides-tablet') : 2.5;
                    var slidesMobile = $this.data('slides-mobile') ? $this.data('slides-mobile') : 1;
                    var spaceBetween = $this.data('space-between') ? $this.data('space-between') : 30;

                    if (window.innerWidth < 1200) {
                        spaceBetween = 24;
                    }
                    if (window.innerWidth < 1024) {
                        spaceBetween = 16;
                    }

                    var swiper = new Swiper('.other-homes-swiper-slider-' + index, {
                        direction: 'horizontal',
                        loop: loop,
                        freeMode: freeMode,
                        spaceBetween: spaceBetween,
                        breakpoints: {
                            1024: {
                                slidesPerView: slidesDesktop
                            },
                            768: {
                                slidesPerView: slidesTablet
                            },
                            320: {
                                slidesPerView: slidesMobile
                            }
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        scrollbar: {
                            el: '.swiper-scrollbar',
                            draggable: true,
                            // dragSize: dragSize
                        }
                    });
                    // initFacadeSlider();
                });
            }
        }
        var initNewsSlider = function () {
            if ($('.news-slider').length) {
                var $swiperSelector = $('.news-slider .swiper-container');

                $swiperSelector.each(function (index) {
                    var $this = $(this);
                    $this.addClass('news-swiper-slider-' + index);

                    var dragSize = $this.data('drag-size') ? $this.data('drag-size') : 50;
                    var freeMode = $this.data('free-mode') ? $this.data('free-mode') : false;
                    var loop = $this.data('loop') ? $this.data('loop') : false;
                    var slidesDesktop = $this.data('slides-desktop') ? $this.data('slides-desktop') : 3;
                    var slidesTablet = $this.data('slides-tablet') ? $this.data('slides-tablet') : 3;
                    var slidesMobile = $this.data('slides-mobile') ? $this.data('slides-mobile') : 1.1;
                    var spaceBetween = $this.data('space-between') ? $this.data('space-between') : 40;

                    if (window.innerWidth < 1200) {
                        spaceBetween = 40;
                    }
                    if (window.innerWidth < 1024) {
                        spaceBetween = 16;
                    }

                    var swiper = new Swiper('.news-swiper-slider-' + index, {
                        direction: 'horizontal',
                        loop: loop,
                        freeMode: freeMode,
                        spaceBetween: spaceBetween,
                        breakpoints: {
                            1024: {
                                slidesPerView: slidesDesktop
                            },
                            768: {
                                slidesPerView: slidesTablet
                            },
                            320: {
                                slidesPerView: slidesMobile
                            }
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        scrollbar: {
                            el: '.swiper-scrollbar',
                            draggable: true,
                            // dragSize: dragSize
                        }
                    });
                });
            }
            if ($('.news-slider-two').length) {
                var $swiperSelector = $('.news-slider-two .swiper-container');

                $swiperSelector.each(function (index) {
                    var $this = $(this);
                    $this.addClass('news-two-swiper-slider-' + index);

                    var dragSize = $this.data('drag-size') ? $this.data('drag-size') : 50;
                    var freeMode = $this.data('free-mode') ? $this.data('free-mode') : false;
                    var loop = $this.data('loop') ? $this.data('loop') : false;
                    var slidesDesktop = $this.data('slides-desktop') ? $this.data('slides-desktop') : 2;
                    var slidesTablet = $this.data('slides-tablet') ? $this.data('slides-tablet') : 1;
                    var slidesMobile = $this.data('slides-mobile') ? $this.data('slides-mobile') : 1;
                    var spaceBetween = $this.data('space-between') ? $this.data('space-between') : 80;

                    if (window.innerWidth < 1200) {
                        spaceBetween = 80;
                    }
                    if (window.innerWidth < 1024) {
                        spaceBetween = 24;
                    }

                    var swiper = new Swiper('.news-two-swiper-slider-' + index, {
                        direction: 'horizontal',
                        loop: loop,
                        freeMode: freeMode,
                        spaceBetween: spaceBetween,
                        breakpoints: {
                            1024: {
                                slidesPerView: slidesDesktop
                            },
                            768: {
                                slidesPerView: slidesTablet
                            },
                            320: {
                                slidesPerView: slidesMobile
                            }
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        scrollbar: {
                            el: '.swiper-scrollbar',
                            draggable: true,
                            // dragSize: dragSize
                        }
                    });
                });
            }
        }
        var initHalSlider = function () {
            if ($('.hal-slider').length) {
                var $swiperSelector = $('.hal-slider .swiper-container');

                $swiperSelector.each(function (index) {
                    var $this = $(this);
                    $this.addClass('hal-swiper-slider-' + index);

                    var dragSize = $this.data('drag-size') ? $this.data('drag-size') : 50;
                    var freeMode = $this.data('free-mode') ? $this.data('free-mode') : false;
                    var loop = $this.data('loop') ? $this.data('loop') : false;
                    var slidesXL = $this.data('slides-xl') ? $this.data('slides-xl') : 3;
                    var slidesDesktop = $this.data('slides-desktop') ? $this.data('slides-desktop') : 2.3;
                    var slidesTablet = $this.data('slides-tablet') ? $this.data('slides-tablet') : 2.1;
                    var slidesMobile = $this.data('slides-mobile') ? $this.data('slides-mobile') : 1;
                    var spaceBetween = $this.data('space-between') ? $this.data('space-between') : 30;

                    if (window.innerWidth < 1200) {
                        spaceBetween = 24;
                    }
                    if (window.innerWidth < 1024) {
                        spaceBetween = 16;
                    }

                    var swiper = new Swiper('.hal-swiper-slider-' + index, {
                        direction: 'horizontal',
                        loop: loop,
                        freeMode: freeMode,
                        spaceBetween: spaceBetween,
                        breakpoints: {
                            1200: {
                                slidesPerView: slidesXL
                            },
                            1024: {
                                slidesPerView: slidesDesktop
                            },
                            768: {
                                slidesPerView: slidesTablet
                            },
                            320: {
                                slidesPerView: slidesMobile
                            }
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        scrollbar: {
                            el: '.swiper-scrollbar',
                            draggable: true,
                            // dragSize: dragSize
                        }
                    });
                });
            }
        }
        var initFavouritesSlider = function () {
            const favouritesSlider = $('.favourites-slider');
            if (favouritesSlider.length) {
                var $swiperSelector = favouritesSlider.find('.swiper-container');
                $swiperSelector.each(function (index) {
                    var $this = $(this);
                    $this.addClass('favourites-swiper-slider-' + index);
                    const noFavouritesSlide = $this.find('.no-favourites-slide');
                    noFavouritesSlide.detach();

                    var dragSize = $this.data('drag-size') ? $this.data('drag-size') : 50;
                    var freeMode = $this.data('free-mode') ? $this.data('free-mode') : false;
                    var loop = $this.data('loop') ? $this.data('loop') : false;
                    var slidesXL = $this.data('slides-xl') ? $this.data('slides-xl') : 3;
                    var slidesDesktop = $this.data('slides-desktop') ? $this.data('slides-desktop') : 2.3;
                    var slidesTablet = $this.data('slides-tablet') ? $this.data('slides-tablet') : 2.1;
                    var slidesMobile = $this.data('slides-mobile') ? $this.data('slides-mobile') : 1;
                    var spaceBetween = $this.data('space-between') ? $this.data('space-between') : 30;

                    if (window.innerWidth < 1200) {
                        spaceBetween = 24;
                    }
                    if (window.innerWidth < 1024) {
                        spaceBetween = 16;
                    }
                    if (window.innerWidth < 768) {
                        spaceBetween = 8;
                    }

                    var swiper = new Swiper('.favourites-swiper-slider-' + index, {
                        direction: 'horizontal',
                        loop: loop,
                        freeMode: freeMode,
                        spaceBetween: spaceBetween,
                        breakpoints: {
                            1200: {
                                slidesPerView: slidesXL
                            },
                            1024: {
                                slidesPerView: slidesDesktop
                            },
                            768: {
                                slidesPerView: slidesTablet
                            },
                            320: {
                                slidesPerView: slidesMobile
                            }
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        scrollbar: {
                            el: '.swiper-scrollbar',
                            draggable: true,
                            // dragSize: dragSize
                        }
                    });

                    const checkSlider = () => {
                        if (swiper.slides.length === 0) {
                            swiper.appendSlide(noFavouritesSlide.get(0));
                        }
                    };

                    swiper.slides.forEach(element => {
                        const $element = $(element);
                        const id = String($element.data('id'));
                        $element.find('.favourites-remove-button').click(() => {
                            swiper.removeSlide(swiper.slides.indexOf(element))
                            favouriteHomesApp ? favouriteHomesApp.delete(id) : null;
                            checkSlider();
                        });
                    });

                    checkSlider();

                    $this.data('swiper', swiper);
                });
            }
        }
        //Virtual to show embedded iframe
        var virtualEmbedShow = function () {
            $('.button-virtual').on('click', function () {
                var imgObj = $(this).next('.image-holder');
                var iframeSrc = imgObj.next('.iframe-holder').find('iframe').data('defer-src');
                $(this).hide().parent().addClass('active');
                imgObj.hide();
                imgObj.next('.iframe-holder').removeClass('hide');
                imgObj.next('.iframe-holder').find('iframe').attr('src', iframeSrc)
            })
        }

        var readMoreContent = function () {
            var calcContentHeight = $('.readmore-html').find('.column').css('height');
            $('.readmore-html').find('.column').css({
                height: '300px'
            })
            $('.readmore-html .button-more').on('click', function () {
                var parent = $(this).closest('.readmore-html');
                parent.toggleClass('opened');
                parent.find('.column').stop().animate({
                    height: parent.hasClass('opened') ? calcContentHeight : '300px'
                }, 700)

            })
        }

        var initRecentlyViewedSlider = function () {
            if (window.innerWidth < 1024) {
                $('.recently-viewed-list').slick({
                    adaptiveHeight: true,
                    variableWidth: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    swipe: true,
                    infinite: false,
                    swipeToSlide: true,
                    dots: false,
                    arrows: false
                });
            }
        }

        var initTabcontrolSlider = function () {
            if (window.innerWidth < 1024) {
                $('.tabset .tab-controls').slick({
                    adaptiveHeight: true,
                    variableWidth: true,
                    slidesToScroll: 1,
                    swipe: true,
                    infinite: false,
                    swipeToSlide: true,
                    dots: false,
                    arrows: false
                });
                $('.dh-tabset .dh-tab-controls').slick({
                    adaptiveHeight: true,
                    variableWidth: true,
                    slidesToScroll: 1,
                    swipe: true,
                    infinite: false,
                    swipeToSlide: true,
                    dots: false,
                    arrows: false
                });
            }
        }

        var initFacadeSlider = function () {
            $('.facade-slider').each(function () {
                var sliderId = $(this).attr('id');
                $('#' + sliderId).on('load', function () {
                    $('#' + sliderId).not('.slick-initialized').slick({
                        adaptiveHeight: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        swipe: true,
                        infinite: true,
                        swipeToSlide: true,
                        dots: false,
                        arrows: true,
                    });
                    $('#' + sliderId).slick('setPosition');
                }());
            });
        }

        var initHomepageSlider = function () {
            if ($('.homepageSlider').length) {
                $('.homepageSlider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 400,
                    infinite: true,
                    speed: 500,
                    fade: true,
                    cssEase: 'linear',
                    arrows: false,
                    dots: false,
                });
            }
        }

        var initHomeDesignsFacadeSlider = function () {
            $('.home-design-facade-slider:not(.home-designs-app-slider)').each(function () {
                var sliderId = $(this).attr('id');
                $('#' + sliderId).on('load', function () {
                    $('#' + sliderId).not('.slick-initialized').slick({
                        adaptiveHeight: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        swipe: true,
                        infinite: true,
                        swipeToSlide: true,
                        dots: true,
                        arrows: true,
                    });
                    $('#' + sliderId).slick('setPosition');
                }());
            });

        }

        var initStickyFilter = function () {
            var filter = document.getElementById("sticky-filter");
            if (filter) {
                var sticky = filter.offsetTop;

                if (window.pageYOffset > sticky) {
                    filter.classList.add("sticky");
                } else {
                    filter.classList.remove("sticky");
                }
            }
        }

        var initStickyHeader = function () {
            if ($('header .header-bottom').length) {
                var stickyHeader = document.getElementById("stickyHeader");
                var sticky = stickyHeader.offsetTop;

                if ($(window).scrollTop() > sticky) {
                    stickyHeader.classList.add("sticky-header");
                } else {
                    stickyHeader.classList.remove("sticky-header");
                }
            }
        }


        var initInclusionsSlider = function () {
            const $sliderTheme = $('.slider-theme');
            if ($sliderTheme.length) {
                $sliderTheme.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: false,
                    dots: false,
                    // asNavFor: '.slider-theme-nav',
                    adaptiveHeight: true,
                    infinite: true,
                    swipeToSlide: false,
                    swipe: false,
                    responsive: [{
                        breakpoint: 767,
                        settings: {
                            dots: false,
                            arrows: false,
                            swipe: false,
                            // infinite: false
                        }
                    }]
                });
                $('.slider-theme-nav').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    asNavFor: '.slider-theme',
                    dots: false,
                    centerMode: false,
                    focusOnSelect: true,
                    arrows: false,
                    infinite: true,
                    swipeToSlide: true,
                    responsive: [{
                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToScroll: 1,
                            slidesToShow: 1,
                            infinite: false,
                            dots: true,
                            arrows: true,
                            appendDots: $('.box-theme .expand-content'),
                            customPaging: function (slider, i) {
                                var title = $(slider.$slides[i]).find('.text').text();
                                return '<span>' + title + '</span>';
                            }
                        }
                    }
                    ]

                });
            }
            //Tooltip - Interior Theme
            $('.tip').on('click', function () {
                var targetid = $(this).attr('target');

                $('.tip').not($(this)).removeClass('active');
                //$('.tip').not('[target = '+targetid+']').removeClass('active');
                $('.tip').not('[target = ' + targetid + ']').parent('.tooltip-content').removeClass('active');
                $('.tip').not('[target = ' + targetid + ']').parent('.nav-dots').removeClass('active');
                $('[target = ' + targetid + ']').toggleClass('active');

                $(this).parent('.tooltip-content').toggleClass('active');
                $(this).parent('.nav-dot').toggleClass('active');

                if ($(this).hasClass('active')) {
                    if ($(this).parents('.slider-item').find('.tooltip-content-area').css('display') == 'none') {
                        $(this).parents('.slider-item').find('.tooltip-content-area').fadeIn();
                    }
                }
                if ($(this).parent('.tooltip-content').hasClass('top')) {
                    var contentHeight = $(this).parent('.tooltip-content').find('.content').outerHeight();
                    var gap = 36;
                    var marginTop = contentHeight + gap;
                    $(this).parent('.tooltip-content').find('.content').css('margin-top', '-' + marginTop + 'px');
                }
            })
            $('.button-expand').each(function () {
                $(this).click(function () {
                    $(this).toggleClass('active');
                    $(this).next('.expand-content').slideToggle();
                })
            })
            $('.expand-content').find('.slick-dots li').click(function () {
                var textCurrent = $(this).find('span').text();
                $(this).parents('.expand-content').css('display', 'none');
                $(this).parents('.expand-holder').find('.button-expand').removeClass('active');
                $(this).parents('.expand-holder').find('.button-expand').text(textCurrent);
            });
            //Toggle tooltip content
            const $mapInfo = $('.map-info');
            $('.slider-theme .slider-item').each(function () {
                $(this).find('.toggle-tooltip').click(function () {
                    $(this).parents('.slider-item').find('.target-content').removeClass('active').hide();
                    $(this).parents('.slider-item').find('.toggle-tooltip').removeClass('active-button');
                    $(this).addClass('active-button');
                    $('#' + $(this).attr('target')).addClass('active').fadeIn(100).show().trigger('click');
                });

                if ($mapInfo.length) {
                    $(this).find('.map-info').mouseover(function () {
                        $('.toggle-tooltip').removeClass('active active-button');
                        $('.tooltip-content').removeClass('active');
                        $(this).children('.toggle-tooltip').addClass('active active-button');
                        $(this).addClass('active');
                        $(this).children('.content').mouseleave(function () {
                            $('.toggle-tooltip').removeClass('active active-button');
                            $('.tooltip-content').removeClass('active');
                        });
                        $(this).mouseleave(function () {
                            $('.toggle-tooltip').removeClass('active active-button');
                            $('.tooltip-content').removeClass('active');
                        });
                    });

                    $(this).find('.map-info .toggle-tooltip').mouseenter(function () {
                        $('.toggle-tooltip').removeClass('active active-button');
                        $('.tooltip-content').removeClass('active');
                        $(this).addClass('active active-button');
                        $(this).parents('.tooltip-content').addClass('active');
                        $(this).parents('.tooltip-content').children('.content').mouseleave(function () {
                            $('.toggle-tooltip').removeClass('active active-button');
                            $('.tooltip-content').removeClass('active');
                        });
                    });



                }


            });
        };

        if ($('.fui-i').length > 0) {
            $('.fui-i').removeClass('fui-i').addClass('fui-iX');
        }

        var init3ColSlider = function () {
            $('.three-column-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                swipe: true,
                infinite: true,
                swipeToSlide: true,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 7000,
                fade: true,
                cssEase: 'linear'
            });
        }

        return {
            init: async function () {
                windowLoad();
                windowScroll();
                onWindowResize();
                clickEvents();
                chosenSelect('.chosen-select');
                // sameHeight('.mh');
                // sameHeightByRow('.mhbr');
                initArticleSlider();
                initTestimonialSlider();
                initExploreHomesSlider();
                initExploreNeighborhoodSlider();
                initRecentHomesSlider();
                initTeamSlider();
                initTwoColSlider();
                initReviewsSlider();
                initOtherHomesSlider();
                initHalSlider();
                initNewsSlider();
                initFavouritesSlider();
                initflexSlider();
                initRecentlyViewedSlider();
                initTabcontrolSlider();
                initInclusionsSlider();
                init3ColSlider();
                initAccordion();
                initHomepageSlider();
                initPhotoSwipeFromDOM('.slick-pswp-gallery.slider-main');
                initSlickPhotoSwipeSlider('.slick-pswp-gallery.slider-main');
                initSlickPhotoSwipeSliderOneImage('#gallery1');
                initSlickPhotoSwipeSliderOneImage('#gallery2');
                uniteGallery("#facade-gallery");
                uniteGallery("#images-gallery");
                uniteGallery("#images-gallery-1");
                uniteGallery("#video-gallery");
                uniteGallery("#video-gallery-1");
                isotopeInit('.isotope-items');
                rangeSlider('#slider-year-range');
                rangeSliderNoVal('#slider-affordability-range');
                initDonutChart('#donutChart');
                initDonutChart2('#donutChart2');
            }
        }

    })(jQuery, UIElement);

    UIController.init();

})();