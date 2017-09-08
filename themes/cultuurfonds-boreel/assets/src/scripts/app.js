/**********************************************************************

APP

**********************************************************************/
const $ = require('../../../devtools/node_modules/jquery/dist/jquery.min.js');

class App {

  constructor() {
    $(".toggle--menu").click(function() {
      $(this).toggleClass('active');
      $(".sidebar").slideToggle("slow", function() {
        // Animation complete.
      });
    });

  }

}

class Functions {
  constructor() {

    let emojiSpan = document.querySelector('.info-modal--button span');
    let emojiArray = [
      '🥑',
      '💥',
      '⚡️',
      '👋',
      '👋🏽',
      '🏖',
      '🛰'
    ];
    let choosenEmoji = emojiArray[Math.floor(Math.random() * emojiArray.length) + 0];

    emojiSpan.appendChild(document.createTextNode(choosenEmoji));

  }
}

new App();
//new Functions();
