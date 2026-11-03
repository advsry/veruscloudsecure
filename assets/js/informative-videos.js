/**
 * Turn the Informative Videos embeds into a three-across grid.
 * A click opens the video in an overlay. The rest of the page stays put.
 */
(function () {
  'use strict';

  var root = document.querySelector('.v-videos-page .v-prose');
  if (!root) return;

  var cards = [];
  root.querySelectorAll('iframe').forEach(function (iframe) {
    var src = iframe.getAttribute('src') || '';
    var match = src.match(/youtube\.com\/embed\/([A-Za-z0-9_-]+)/);
    if (!match) return;

    var col = iframe.closest('.x-col') || iframe.parentElement;
    var captionEl = col ? col.querySelector('.x-text') : null;
    var caption = captionEl ? captionEl.textContent.replace(/\s+/g, ' ').trim() : '';
    var title = iframe.getAttribute('title') || '';
    if (!caption) caption = title && title !== 'Untitled' ? title : 'Play video';

    cards.push({
      id: match[1],
      caption: caption,
      label: title && title !== 'Untitled' ? title : caption,
      col: col,
      iframe: iframe
    });
  });

  if (!cards.length) return;

  var grid = document.createElement('div');
  grid.className = 'v-video-grid';

  cards.forEach(function (card) {
    var button = document.createElement('button');
    button.type = 'button';
    button.className = 'v-video-card';
    button.setAttribute('data-video-id', card.id);
    button.setAttribute('aria-label', 'Play video: ' + card.label);

    var media = document.createElement('span');
    media.className = 'v-video-card__media';

    var image = document.createElement('img');
    image.src = 'https://i.ytimg.com/vi/' + card.id + '/hqdefault.jpg';
    image.alt = '';
    image.decoding = 'async';

    var play = document.createElement('span');
    play.className = 'v-video-card__play';
    play.setAttribute('aria-hidden', 'true');

    var text = document.createElement('span');
    text.className = 'v-video-card__caption';
    text.textContent = card.caption;

    media.appendChild(image);
    media.appendChild(play);
    button.appendChild(media);
    button.appendChild(text);
    grid.appendChild(button);

    if (card.col) card.col.classList.add('v-video-source');
    var frame = card.iframe.closest('.x-frame-video-embed');
    if (frame) {
      frame.remove();
    } else {
      card.iframe.remove();
    }
  });

  var firstRow = cards[0].col && cards[0].col.closest('.x-row');
  if (firstRow && firstRow.parentNode) {
    firstRow.parentNode.insertBefore(grid, firstRow);
  } else {
    root.insertBefore(grid, root.firstChild);
  }

  root.querySelectorAll('#nf-form-5-cont, .nf-form-cont, .ninja-forms-noscript-message').forEach(function (node) {
    node.remove();
  });
  root.querySelectorAll('p').forEach(function (paragraph) {
    if (paragraph.querySelector('img, iframe, a, form, input')) return;
    var text = paragraph.textContent.replace(/\s+/g, '');
    if (!text || text === 'NoFieldsFound.') paragraph.remove();
  });

  var dialog = document.createElement('dialog');
  dialog.className = 'v-video-modal';
  dialog.setAttribute('aria-label', 'Video');

  var frameWrap = document.createElement('div');
  frameWrap.className = 'v-video-modal__frame';

  var close = document.createElement('button');
  close.type = 'button';
  close.className = 'v-video-modal__close';
  close.textContent = 'Close';

  var player = document.createElement('div');
  player.className = 'v-video-modal__player';

  frameWrap.appendChild(close);
  frameWrap.appendChild(player);
  dialog.appendChild(frameWrap);
  document.body.appendChild(dialog);

  function clearPlayer() {
    player.textContent = '';
  }

  function closeVideo() {
    if (dialog.open) dialog.close();
    clearPlayer();
  }

  function openVideo(id, label) {
    clearPlayer();
    var iframe = document.createElement('iframe');
    iframe.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0';
    iframe.title = label || 'Video';
    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
    player.appendChild(iframe);
    if (typeof dialog.showModal === 'function') {
      dialog.showModal();
    }
  }

  grid.addEventListener('click', function (event) {
    var button = event.target.closest('.v-video-card');
    if (!button || !grid.contains(button)) return;
    openVideo(button.getAttribute('data-video-id'), button.getAttribute('aria-label'));
  });

  close.addEventListener('click', closeVideo);
  dialog.addEventListener('close', clearPlayer);
  dialog.addEventListener('click', function (event) {
    if (event.target === dialog) closeVideo();
  });
})();
