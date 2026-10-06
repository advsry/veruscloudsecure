/**
 * Verus front-end: mega menu, mobile nav, scroll reveal.
 */
(function () {
  'use strict';

  var header = document.getElementById('site-header');
  var toggle = document.querySelector('.v-nav-toggle');
  var nav = document.getElementById('primary-nav');
  var backdrop = document.querySelector('.v-mega-backdrop');
  var mq = window.matchMedia('(max-width: 900px)');

  function closeAllMega() {
    document.querySelectorAll('.v-nav__item--mega').forEach(function (item) {
      item.classList.remove('is-open');
      var trigger = item.querySelector('[data-mega-trigger]');
      var panel = item.querySelector('.v-mega');
      if (trigger) trigger.setAttribute('aria-expanded', 'false');
      if (panel && !mq.matches) panel.hidden = true;
    });
    if (backdrop) backdrop.hidden = true;
  }

  function openMega(item) {
    closeAllMega();
    item.classList.add('is-open');
    var trigger = item.querySelector('[data-mega-trigger]');
    var panel = item.querySelector('.v-mega');
    if (trigger) trigger.setAttribute('aria-expanded', 'true');
    if (panel) panel.hidden = false;
    if (backdrop && !mq.matches) backdrop.hidden = false;
  }

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', open ? 'false' : 'true');
      document.body.classList.toggle('nav-open', !open);
      if (open) {
        document.querySelectorAll('.v-mega').forEach(function (p) {
          p.hidden = true;
        });
      }
    });
  }

  document.querySelectorAll('.v-nav__item--mega').forEach(function (item) {
    var trigger = item.querySelector('[data-mega-trigger]');
    var panel = item.querySelector('.v-mega');
    if (!trigger || !panel) return;

    var enterTimer;
    var leaveTimer;

    item.addEventListener('mouseenter', function () {
      if (mq.matches) return;
      clearTimeout(leaveTimer);
      enterTimer = setTimeout(function () {
        openMega(item);
      }, 80);
    });

    item.addEventListener('mouseleave', function () {
      if (mq.matches) return;
      clearTimeout(enterTimer);
      leaveTimer = setTimeout(function () {
        item.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
        panel.hidden = true;
        if (!document.querySelector('.v-nav__item--mega.is-open') && backdrop) {
          backdrop.hidden = true;
        }
      }, 160);
    });

    trigger.addEventListener('click', function (event) {
      if (!mq.matches && trigger.getAttribute('href')) {
        return;
      }
      event.preventDefault();
      var isOpen = item.classList.contains('is-open');
      if (isOpen) {
        item.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
        panel.hidden = true;
      } else {
        document.querySelectorAll('.v-nav__item--mega.is-open').forEach(function (other) {
          if (other !== item) {
            other.classList.remove('is-open');
            var t = other.querySelector('[data-mega-trigger]');
            var p = other.querySelector('.v-mega');
            if (t) t.setAttribute('aria-expanded', 'false');
            if (p) p.hidden = true;
          }
        });
        item.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
        panel.hidden = false;
      }
    });

    panel.querySelectorAll('[data-mega-tab]').forEach(function (tab) {
      tab.addEventListener('click', function () {
        var id = tab.getAttribute('data-mega-tab');
        panel.querySelectorAll('[data-mega-tab]').forEach(function (t) {
          t.setAttribute('aria-selected', t === tab ? 'true' : 'false');
        });
        panel.querySelectorAll('[data-mega-panel]').forEach(function (p) {
          p.hidden = p.getAttribute('data-mega-panel') !== id;
        });
      });
    });
  });

  if (backdrop) {
    backdrop.addEventListener('click', closeAllMega);
  }

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      closeAllMega();
      document.body.classList.remove('nav-open');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    }
  });

  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('is-scrolled', window.scrollY > 12);
    }, { passive: true });
  }

  var reveals = document.querySelectorAll('.v-reveal');
  if (reveals.length && 'IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('v-in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('v-in'); });
  }
})();
