import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

jQuery(document).ready(function ($) {

    let burgerMenu = $('.burger-menu'),
        menu = $('.menu');

    $(burgerMenu).on('click', function () {
        burgerMenu.toggleClass('active');
        menu.toggleClass('active');
    });

    $(document).mouseup(function (e) {
        if ((!burgerMenu.is(e.target) && burgerMenu.has(e.target).length === 0) && (!menu.is(e.target) && menu.has(e.target).length === 0)) {
            burgerMenu.removeClass('active');
            menu.removeClass('active');
        }
    });

    $(window).on('scroll', function () {
        burgerMenu.removeClass('active');
        menu.removeClass('active');
    });

    /**
     * Anchor link
     */
    $(".anchor-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top);

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        menu.removeClass('active');
    });

    /**
     * Show description
     */
    $('.content-description .link-more').on('click', function (e) {
        e.preventDefault();
        if ($(this).parent('.content-description').children('.content-description-hidden').is(':visible')) {
            $(this).children('span').text($(this).data('show-text'));
        } else {
            $(this).children('span').text($(this).data('hidden-text'));
        }
        $(this).parent('.content-description').children('.content-description-hidden').slideToggle();
    });

    /**
     * Form-label
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        $(this).val() !== "" ? $(this).parents('.form-group').addClass('in-focus') : $(this).parents('.form-group').removeClass('in-focus');
    });

    /**
     * Place select
     */
    $('.place-select').on('click', function () {
        $(this).toggleClass('active');
    });

    $(document).mouseup(function (e) {
        let container = $('.place-select');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.removeClass('active');
        }
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Modal
     */
    let contactModal = $('.custom-modal--contact'),
        closeModal = $('.close-modal'),
        modalMask = $('.modal-mask');

    $('.open-contact').on('click', function (e) {
        e.preventDefault();
        $(contactModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(contactModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(contactModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function () {
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            if ($(contactModal).length) {
                $(contactModal).removeClass('active');
                $(modalMask).removeClass('active');
            }
        }
    });

    /**
     * Slider
     */
    $(window).on('load', function () {
        if ($('.intro-stocks').length) {
            new Flickity(document.querySelector('.intro-stocks'), {
                prevNextButtons: false,
                pageDots: true,
                contain: true,
                draggable: false,
                wrapAround: true,
                adaptiveHeight: true,
                autoPlay: 4000,
                pauseAutoPlayOnHover: true,
                cellAlign: 'left'
            });
        }

        if ($('.certificates-slider').length) {
            new Flickity(document.querySelector('.certificates-slider'), {
                prevNextButtons: false,
                pageDots: true,
                contain: true,
                draggable: false,
                wrapAround: true,
                adaptiveHeight: true,
                autoPlay: 4000,
                pauseAutoPlayOnHover: true,
                cellAlign: 'left'
            });
        }

        if ($('.video-slider').length) {
            new Flickity(document.querySelector('.video-slider'), {
                prevNextButtons: false,
                pageDots: true,
                contain: true,
                draggable: false,
                wrapAround: true,
                adaptiveHeight: true,
                autoPlay: 4000,
                pauseAutoPlayOnHover: true,
                cellAlign: 'left'
            });
        }
    });

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.reveal-left', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.reveal-right', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.reveal-bottom', {
        origin: 'bottom',
        delay: 400,
        distance: '200px'
    });
    ScrollReveal().reveal('.reveal-bottom-interval', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80
    });
});