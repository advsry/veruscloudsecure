/**
 * FAQ accordion, mobile "read the full breakdown", and Calendly booking events.
 */
(function () {
  'use strict';

  document.querySelectorAll('.v-lp .faq-q').forEach(function (btn) {
    btn.addEventListener('click', function () {
      if (btn.parentElement) {
        btn.parentElement.classList.toggle('open');
      }
    });
  });

  var expander = document.querySelector('.v-lp .mobile-expander button');
  if (expander) {
    expander.addEventListener('click', function () {
      document.body.classList.add('v-lp-show-all');
    });
  }

  var root = document.querySelector('.v-lp');
  var bookingPage = root ? root.getAttribute('data-booking-page') || '' : '';

  window.addEventListener('message', function (e) {
    if (e.origin !== 'https://calendly.com' || !e.data || typeof e.data.event !== 'string' || e.data.event.indexOf('calendly.') !== 0) {
      return;
    }
    window.dataLayer = window.dataLayer || [];
    if (e.data.event === 'calendly.event_scheduled') {
      window.dataLayer.push({
        event: 'calendly_booked',
        booking_page: bookingPage
      });
    }
  });
})();
