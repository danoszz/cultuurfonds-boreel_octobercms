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

    let toggleContainer = $('.toggle--filtersort');
    let toggleButton = $(".toggle--filtersort__title");
    let toggleInner = $(".toggle--filtersort__inner");


    toggleButton.click(function() {
      $(this).next(toggleInner).slideToggle(225);
      $(this).parent().toggleClass('active');
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
