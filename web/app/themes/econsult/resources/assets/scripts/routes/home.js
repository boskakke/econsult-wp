export default {
	init() {
		// JavaScript to be fired on the home page

		const words = document.querySelectorAll('.jumbotron__word');
		const wordArray = [];
		let currentWord = 0;

		words[currentWord].style.opacity = 1;
		for (let i = 0; i < words.length; i++) {
			splitLetters(words[i]);
		}

		function changeWord() {
			const cw = wordArray[currentWord];
			const nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
			for (let i = 0; i < cw.length; i++) {
				animateLetterOut(cw, i);
			}
			
			for (let i = 0; i < nw.length; i++) {
				nw[i].className = 'letter behind';
				nw[0].parentElement.style.opacity = 1;
				animateLetterIn(nw, i);
			}
			
			currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
		}

		function animateLetterOut(cw, i) {
			setTimeout(function() {
				cw[i].className = 'letter out';
			}, i*20);
		}

		function animateLetterIn(nw, i) {
			setTimeout(function() {
				nw[i].className = 'letter in';
			}, 240+(i*20));
		}

		function splitLetters(word) {
			const content = word.innerHTML;
			word.innerHTML = '';
			const letters = [];
			for (let i = 0; i < content.length; i++) {
				const letter = document.createElement('span');
				letter.className = 'letter';
				letter.innerHTML = content.charAt(i);
				word.appendChild(letter);
				letters.push(letter);
			}
			
			wordArray.push(letters);
		}

		changeWord();
		setInterval(changeWord, 4000);


	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
