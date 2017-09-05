/**********************************************************************

APP

**********************************************************************/

class App {

	constructor() {

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
